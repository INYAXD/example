@extends('layout')

@section('title', "註冊會員")

@section('content')
    <div class="container pt-5">
        <h3>註冊會員</h3>
        @if(Session::has("error"))
            <div class="alert alert-danger">
                <p><strong>註冊驗證失敗：</strong></p>
                <ul>
                    @foreach(Session::get("error") as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route("register.action")}}" method="POST">
            @csrf
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
              @if(Session::has("error_email"))
                value="{{Session::get("error_email")}}"
              @endif
              >
              <label for="email">請輸入Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com"
              @if(Session::has("error_name"))
              value="{{Session::get("error_name")}}"
              @endif
              >
              <label for="name">請輸入您的姓名</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
              <label for="floatingPassword">請輸入密碼</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPasswordConfirm" name="passwordConfirm" placeholder="Password">
              <label for="floatingPasswordConfirm">請再輸入一次密碼</label>
            </div>
            <hr>
            <input type="submit" value="註冊" class="btn btn-lg btn-primary w-100">
        </form>
    </div>
@endsection