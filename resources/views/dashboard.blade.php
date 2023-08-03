@extends('layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        <div class="header">
            <h1 class="header-title">
                Welcome Back!
            </h1>
            <!-- <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p> -->
        </div>
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-info p-2">
            {{ $message }}
        </div>
        @endif --}}
        <div class="row">
            <div class="col-xl-4 col-xxl-4 ">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Total Users</h5>
                            </div>

                            <div class="col-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="display-5 mt-1 mb-3"></h1>
                        {{-- <div class="mb-0">
                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
                            More visitors than usual
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Pending Task</h5>
                            </div>

                            <div class="col-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                        <i class="align-middle  fas fa-fw fa-user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="display-5 mt-1 mb-3"></h1>
                        {{-- <div class="mb-0">
                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                            Less sales than usual
                        </div> --}}
                    </div>
                </div>
            </div>





            <div class="col-xl-4 col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Completed Task</h5>
                            </div>

                            <div class="col-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                        <i class="align-middle fas fa-user-alt-slash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="display-5 mt-1 mb-3"></h1>
                        
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">InProgress Task</h5>
                            </div>

                            <div class="col-auto">
                                <div class="avatar">
                                    <div class="avatar-title rounded-circle bg-primary-dark">
                                        <i class="align-middle fas fa-user-alt-slash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="display-5 mt-1 mb-3"></h1>
                        
                    </div>
                </div>
            </div>

         


           


      
      
      
    </div>
</main>
@endsection
