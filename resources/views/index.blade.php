@extends('layout')

@section('title', "機密內容")

@section('content')

    @if(Session::has("msg"))
        <div class="alert alert-success">
            <p><strong>{{Session::get("msg")}}</strong></p>
        </div>
    @endif
    <div class="container pt-5">
        <h2>牙牙的書鋪</h2>
        <table class="table table-striped table-hover">
            <tr>
                <th>書名</th>
                <th>數量</th>
                @if(Auth::check())
                    <th>操作</th>
                @endif
            </tr>
            @for($i = 1; $i<=5; $i++)
            <tr>
                <td>書本{{$i}}</td>
                <td>{{$i*10}}</td>
                @if(Auth::check())
                    <td>編輯@if(Auth::user()->role == "A") | 刪除@endif</td>
                @endif
            </tr>
            @endfor
        </table>

        <h2>機密內容</h2>

        @if(Auth::check())
            <iframe width="100%" height="800" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=9ZBBSdg0J3w2Cbz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        @else
            <h4 class="text-danger">請登入後方可觀看</h4>
        @endif

    </div>

@endsection