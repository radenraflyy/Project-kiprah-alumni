@extends('layout.layout')
@section('content')
    <body > 
        <div id="body-pd"  class="dashboard-body">
    <header class="header " id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="pull-right"><i class='bx bxs-face-mask bx-spin bx-flip-horizontal' ></i>Admin</div>
        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="{{route('dashboard')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">Kiprah Alumni</span> 
                </a>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="{{route('alumni')}}" class="nav_link"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Data Alumni</span> 
                    </a> 
                    <a href="{{route('add')}}" class="nav_link active"> 
                        <i class='bx bx-user-plus nav_icon'></i>
                        <span class="nav_name">Tambah Alumni</span> 
                    </a>
                </div>
            </div> 
            {{-- <a href="" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">Logout</span> 
            </a> --}}
            <form method="POST" action={{route('logout_action')}}>
                @csrf
                <input type="hidden" name="token" value={{$users->token}}>
                <button><i class='bx bx-log-out nav_icon'></i>Logout</button>
            </form> 
        </nav>
    </div>
        
    <div class="container overflow-hidden" style="margin-top:100px;">
        @if (session('successAdd'))
            <div class="alert alert-success">
                {{session('successAdd')}}
            </div>
        @endif
        <h3>{{$title}}</h3>
        <a href="{{route('add')}}" class="btn btn-primary" style="margin-top:20px;">Tambah Data Alumni</a>
        <div class="row g-2">
            <div class="col-4 mt-50"  >
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-50"  >
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-50"  >
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-50"  >
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-50"  >
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-50"  >
                <div class="card" style="width: 18rem;">
                    <img src="https://via.placeholder.com/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    </div>
@endsection