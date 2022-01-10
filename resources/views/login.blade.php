@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{url('style2.css')}}">
@endsection

@section('title')
    Login Page
@endsection

@section('body')
<div class="container">
    <div class="d-flex flex-column justify-content-center align-item-center" style="height:50em;">
        <div class="justify-content-center align-self-center">
            <div class="">
                <div class="text-center">
                    <img src="{{url('img/github.png')}}" alt="Login" class="login-image text-center">
                </div>
                
                <h2 class="text-center my-4">Login</h2>
                <form action="{{url('/login/'.$guard)}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="username" class="form-label">username</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label for="remember" class="form-check-label">remember</label>
                    </div>
                    <div class="mb-2 d-grid gap-2">
                        <button type="submit" class="btn btn-success">Login</button>
                        <div class="form-text">don't have account? <a href="register.html">Register</a></div>
                    </div>
            
                    <div class="text-center mt-4">
                        <div class="form-text fs-7">
                            @cielhub 2021
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
           