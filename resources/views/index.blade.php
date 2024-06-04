@extends('layout')

@section('title', "機密內容")

@section('content')

@if(Session::has("msg"))
    <div class="alert alert-success">
        <p><strong>{{Session::get("msg")}}</strong></p>
    </div>
@endif

<h1>機密內容</h1>

<iframe width="100%" height="800" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=9ZBBSdg0J3w2Cbz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


@endsection