@extends('layouts.main')

@section('title')
    Guru Page
@endsection

@section('body')
    <div class="container">
        <div class="profile-image text-center my-5">
            <img src="{{url('img/Dana.png')}}" alt="" width="200px" height="200px" class="rounded-circle" style="object-fit: cover">
        </div>
        <div class="text-center my-5" id="title-page">
            <h1>{{auth('guru')->user()->nama}}</h1>    
        </div>
    
        {{-- Biodata Guru --}}
        <div class="mt-5" id="title-biodata">
            <h3># Biodata</h3>    
        </div>
        <table class="table table-striped table-bordered">
            <tr>
                <td style="width:20%">Nama: </td>
                <td>{{auth('guru')->user()->nama}}</td>
            </tr>
            <tr>
                <td style="width:20%">Username: </td>
                <td>{{auth('guru')->user()->username}}</td>
            </tr>
            <tr>
                <td style="width:20%">Email: </td>
                <td>{{auth('guru')->user()->email}}</td>
            </tr>
        </table>

        {{-- Daftar Kelas Ajar --}}
        <div class="mt-5" id="title-kelas">
            <h3># Daftar Kelas Ajar</h3>    
        </div>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Kelas 1</td>
                <td class="text-center">
                    <a href="" class="btn btn-primary">Lihat</a>
                </td>
            </tr>
        </table>
    </div>
    
    
@endsection
