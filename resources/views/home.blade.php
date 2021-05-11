@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <title>CODING LEARN APPLICATION </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--enable mobile device-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--fontawesome css-->
    <link rel="stylesheet" href="a/css/font-awesome.min.css">

    <!--animate css-->
    <link rel="stylesheet" href="a/css/animate-wow.css">
    <!--main css-->
    <link rel="stylesheet" href="a/css/style.css">
    <link rel="stylesheet" href="a/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="a/css/slick.min.css">
    <!--responsive css-->
    <link rel="stylesheet" href="a/css/responsive.css">
 </head>
 <body>
    <header id="header" class="top-head">
       <!-- Static navbar -->
       <nav class="navbar navbar-default">
          <div class="container-fluid">
             <div class="row">
                <div class="col-md-4 col-sm-12 left-rs">
                  
                </div>
                <div class="col-md-8 col-sm-12">
                   <div class="right-nav">
                      <div class="login-sr">
                         <div class="login-signup">
                           <div class="login-sr">
                              <div class="login-signup">
                                 <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                  
                                       <a id="navbarDropdown"  class="right-arrow pull-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><span class="caret"></span>
                                           {{ Auth::user()->name }}
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                           <a class="dropdown-item" href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                               {{ __('Logout') }}
                                           </a>
                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                               @csrf
                                           </form>
                                           <a href="{{url('mahasiswa')}}"> College Data</a>
                                       </div>
                                   </li>
                                 </ul>
                              </div>
                           </div>
                         </div>
                      </div>
                      <div class="help-r hidden-xs">
                         <div class="help-box">
                           
                         </div>
                      </div>
                      <div class="nav-b hidden-xs">
                         <div class="nav-box">
                           
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!--/.container-fluid --> 
       </nav>
    </header>
    <!-- Modal -->
    <div class="modal fade lug" id="myModal" role="dialog">
       <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Choose</h4>
             </div>
             <div class="modal-body">
             
             </div>
          </div>
       </div>
    </div>

    <div class="page-content-product">
       <div class="main-product">
          <div class="container">
             <div class="row clearfix">
                <div class="find-box">
                   <h1>Find your Code Programming<br>Get Easy For Learn Programming</h1>
                   <h4>It has been easier.</h4>
                   <div class="product-sh">
                      <div class="col-sm-6">
                      </div>
                   </div>
                </div>
             </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table table-responsive">
                    
                        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                        
                        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                        
                        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                        
                        <tr><th>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
                      
                        </button>
                        </table>
                        
                        
                            <div class="login-signup">
                               <ul>
                                  <li><a class="custom-b" href="{{ url('edit') }}">Change Data</a></li>
                               
                               </ul>
                            </div>
                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection