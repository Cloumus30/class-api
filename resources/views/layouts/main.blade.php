<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <script src="{{url('js/bootstrap.bundle.js')}}"></script>
    @yield('head')
    <title>Blog | @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cloudy's Class</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">All Class</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              @if (Auth::guard('admin')->check())
                <li class="nav-item dropdown d-flex">
                  <img src="{{url('img/github.png')}}" alt="" class="rounded-circle" width="50px" height="50px">
                  <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{auth('admin')->user()->nama}}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
                   
                  </ul>
                </li>  
              @elseif(Auth::guard('siswa')->check())
              <li class="nav-item dropdown d-flex">
                <img src="{{url('img/github.png')}}" alt="" class="rounded-circle" width="50px" height="50px">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{auth('siswa')->user()->nama}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
                 
                </ul>
              </li>   
              @elseif(Auth::guard('guru')->check())
              <li class="nav-item dropdown d-flex">
                <img src="{{url('img/github.png')}}" alt="" class="rounded-circle" width="50px" height="50px">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{auth('guru')->user()->nama}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
                 
                </ul>
              </li>   
              @else
              <li class="nav-item dropdown d-flex">
                <img src="{{url('img/github.png')}}" alt="" class="rounded-circle" width="50px" height="50px">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Guest
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{url('/login/admin')}}">Login Admin</a></li>
                  <li><a class="dropdown-item" href="{{url('/login/siswa')}}">Login Siswa</a></li>
                  <li><a class="dropdown-item" href="{{url('/login/guru')}}">Login Guru</a></li>
                </ul>
              </li>   
              @endif
            </ul>
          </div>
        </div>
      </nav>

    @yield('body')


    @yield('script')
</body>
</html>