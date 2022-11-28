@extends('layout.layout')
@section('content')
</head>
<body id="body-pd"> 
    <header class="header " id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="pull-right"><i class='bx bxs-face-mask bx-spin bx-flip-horizontal' ></i>Admin</div>
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

            <form method="POST" action={{route('logout_action')}}>
                @csrf
                <input type="hidden" name="token" value={{$users->token}}>
                <button><i class='bx bx-log-out nav_icon'></i>Logout</button>
            </form> 
        </nav>
    </div>
        
    <div class="container overflow-hidden" style="margin-top:100px;">
        <h4>Data Alumni</h4>
        <div style="margin-top:50px;">
            <a href="{{route('add')}}" class="btn btn-primary">Tambah Data Alumni</a>
            <div class="table-responsive" style="margin-top:10px;">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>#</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Angkatan</th>
                        <th class="text-center"></th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>
                            <img src="https://via.placeholder.com/100" style="width:100px" class="card-img-top" alt="...">
                            Muhammad Fadhil Ayudha
                        </td>
                        <td class="text-center">25</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <img src="https://via.placeholder.com/100" style="width:100px" class="card-img-top" alt="...">
                            Asep
                        </td>
                        <td class="text-center">25</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <img src="https://via.placeholder.com/100" style="width:100px" class="card-img-top" alt="...">
                            Jawir
                        </td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection