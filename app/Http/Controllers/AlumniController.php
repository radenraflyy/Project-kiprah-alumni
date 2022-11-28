<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        return view('login');
    }

    //Dashboard
    public function dashboard()
    {
        if(Session::has('token')){
            $users = User::where('token', Session::get('token'))->first();

            return view('dashboard', [
                'title' => 'Dashboard Admin',
                'users' => $users
            ]);
        }else{
            return back();
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:6',
            'date' => 'required',
            'address' => 'required|min:6',
            'status' => 'required',
            'company' => 'required',
            'major' => 'required',
            'rayon' => 'required',
            'generation' => 'required'
        ]);

        Alumni::create([
            // 'photo' => $request->photo,
            'name' => $request->name,
            'date_of_birth' => $request->date,
            'address' => $request->address,
            'job_status' => $request->status,
            'company' => $request->company,
            'rombel' => $request->major,
            'rayon' => $request->rayon,
            'school_generation' => $request->generation
        ]);

        
        return redirect()->route('dashboard')->with('successAdd', 'Berhasil Menambahkan Todo!');
    }

    //Logout
    public function logout_action(Request $request){
        User::where('token', $request->token)->update([
            'token' => null
        ]);
        Session::pull('token');
        return to_route('login');
    }

    //page Alumni
    public function alumni()
    {
        if (Session::has('token')) {
            $users = User::where('token', Session::get('token'))->first();

            return view('alumni', [
                'title' => 'Dashboard Admin',
                'users' => $users
            ]);
        } else {
            return back();
        }
    }

    //Page add alumni
    public function addAlumni()
    {
        if (Session::has('token')) {
            $users = User::where('token', Session::get('token'))->first();

            return view('tambahAlumni', [
                'title' => 'Dashboard Admin',
                'users' => $users
            ]);
        } else {
            return back();
        }
    }

    public function login_action(Request $request)
    {
        $users = User::where('email', $request->email)->first();
        if($users == null){
            return back()->with('erorr', 'Mohon Maaf gmail anda tidak sesuai');
        }
        $db_password = $users->password;
        $hashed_password = Hash::check($request->password, $db_password);
        
        if($hashed_password){
            $users->token = Str::random(20);
            $users->save();
            $request->session()->put('token', $users->token);
            return to_route('dashboard');
        }else{
            return redirect()->back()->with('erorr', 'Maaf password anda tidak sesuai');
        }
    }

    
}

    