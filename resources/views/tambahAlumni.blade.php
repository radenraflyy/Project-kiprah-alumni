@extends('layout.layout')
@section('content')
    <body id="body-pd"> 
    <header class="header " id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="pull-right"><i class='bx bxs-face-mask bx-spin bx-flip-horizontal'></i>Admin</div>
        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="{{route('dashboard')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">Kiprah Alumni   </span> 
                </a>
                <div class="nav_list"> 
                    <a href="{{route('dashboard')}}" class="nav_link"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="{{route('alumni')}}" class="nav_link active"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Data Alumni</span> 
                    </a> 
                    <a href="{{route('add')}}" class="nav_link active"> 
                        <i class='bx bx-user-plus nav_icon'></i>
                        <span class="nav_name">Tambah Alumni</span> 
                    </a>
                </div>
            </div> 
            {{-- <a href="#" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">Logout</span> 
            </a> --}}
            @if ($errors->any())
            @foreach($errors as $error)
            {{$error}}
            @endforeach
            @endif
            <form method="POST" action={{route('logout_action')}}>
                @csrf
                <input type="hidden" name="token" value={{$users->token}}>
                <button><i class='bx bx-log-out nav_icon'></i>Logout</button>
            </form> 
        </nav>
    </div>
        
    <div class="container overflow-hidden" style="margin-top:100px;">
        <h4>Add Alumni</h4>
        <div style="margin-top:50px;">
            <form action={{route('store')}} method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-2">
                        <input type="file" name="photo" class="dropify" data-default-file="" data-max-file-size="5M" data-allowed-file-extensions="png jpg jpeg" />
                    </div>
                </div>
                <br>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" name="date" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputPassword1">
                </div>
                <select name="status">
                    <option value="" hidden>Pilih</option>
                    <option value="Already working">
                        Already Working
                    </option>
                    <option value="No yet working">
                        No yet working
                    </option>
                </select>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Company</label>
                    <input type="text" class="form-control" name="company" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Major</label>
                    <input type="text" class="form-control" name="major" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Rayon</label>
                    <input type="text" class="form-control" name="rayon" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">School_generation</label>
                    <input type="text" class="form-control" name="generation" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary " style="margin-bottom: 100px">Submit</button>
              </form>
        </div>
    </div>
@endsection