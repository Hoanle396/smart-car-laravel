@extends('layouts.client')

@section('content')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="{{asset('public/images/login.png')}}" class="img-fluid" />
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login to continue</h1>
                                    </div>
                                    <form action="{{URL::to('login')}}" method="post" class="user">
                                        @csrf
                                        <div class="form-group mb-3">
                                            @if(session()->has('error'))
                                            <div class="alert alert-danger form-control">{{session()->get('error')}}</div>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn form-control btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @endsection
