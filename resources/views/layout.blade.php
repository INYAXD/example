<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title") | {{env("APP_NAME")}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a href="{{route("index")}}" class="navbar-brand">銀牙牙喵</a>
          <div class="d-flex">
            @if(Auth::check())
                <h2 class="text-light pt-2 h5 me-3">{{Auth::user()->name}}</h2>
                <a href="{{route("loginout")}}" class="btn btn-danger text-light">登出</a>    
            @else
                <a href="{{route("register.form")}}" class="btn btn-primary text-light me-3">註冊</a>
                <a href="{{route("login.form")}}" class="btn btn-info text-light">登入</a>
            @endif            
          </div>
        </div>
      </nav>
    @yield("content")

</body>
</html>