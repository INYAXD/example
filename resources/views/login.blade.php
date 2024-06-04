@extends('layout')

@section('title', "會員登入")

@section('content')
    <div class="container pt-5">
        <h3>會員登入</h3>
        @if(Session::has("msg"))
          <div class="alert alert-success">
            <p><strong>{{Session::get("msg")}}</strong></p>
          </div>
        @endif
        @if(Session::has("error"))
          <div class="alert alert-danger">
            <p><strong>{{Session::get("error")}}</strong></p>
          </div>
        @endif
        <form action="{{route("login.action")}}" method="POST">
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
              <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
              <label for="floatingPassword">請輸入密碼</label>
            </div>
            <hr>
            <input type="submit" value="登入" class="btn btn-lg btn-primary w-100">
        </form>
    </div>
    
@endsection