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
                
                <h2 class="text-center my-4">Silahkan Login Terlebih Dahulu</h2>
                <div class="row my-4">
                    <a href="/login/admin" class="btn btn-primary btn-lg">Login sebagai Admin</a>
                </div>
                <div class="row my-4">
                    <a href="/login/guru" class="btn btn-success btn-lg">Login sebagai Guru</a>
                </div>
                <div class="row my-4">
                    <a href="/login/siswa" class="btn btn-info btn-lg">Login sebagai Siswa</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
           