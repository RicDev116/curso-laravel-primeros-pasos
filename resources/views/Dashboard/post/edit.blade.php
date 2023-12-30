@extends('dashboard.master')
@section('content')
    <h1>Actualizar Post {{$post->title}}</h1>

    <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @include('dashboard.post._form',['task' => 'edit'])
    </form>
@endsection