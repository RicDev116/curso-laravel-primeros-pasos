@extends('dashboard.master')
@section('content')
    <h1>Actualizar Post {{$category->title}}</h1>

    <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
        @method("PUT")
        @include('dashboard.category._form',['slug' => true])
    </form>
@endsection