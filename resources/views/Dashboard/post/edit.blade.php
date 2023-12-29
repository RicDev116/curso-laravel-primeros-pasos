@extends('dashboard.master')
@section('content')
    <h1>Actualizar Post {{$post->title}}</h1>

    <form action="{{route('post.update', $post->id)}}" method="POST">
        @method("PUT")
        @include('dashboard.post._form')
    </form>
@endsection