@extends('layouts.main')

@section('title')
    Insert Kelas
@endsection

@section('body')
    <div class="container">
        <h2 class="my-5 text-center">Insert Kelas</h2>
        <form action="" method="post" class="my-5">
            @csrf
            <div class="mb-5">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
            <div class="mb-5">
                <label for="guru">Guru</label>
                <select class="form-select" aria-label="Default select example" name="guru" id="guru" multiple>
                    <option selected>Guru</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            <div class="inputMurid1 mb-5">
                <label for="murid1">Murid 1</label>
                <select class="form-select" aria-label="Default select example" name="murid1" id="murid1">
                    <option selected>Murid 1</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
            
        </form>
    </div>
@endsection

@section('script')
    <script src="{{url('kelas/script.js')}}"></script>
@endsection