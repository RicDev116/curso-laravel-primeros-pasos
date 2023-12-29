@extends('dashboard.master')
@section('content')
    <h1>Crear Post</h1>

    <form action="{{route('post.store')}}" method="POST">
        @include('dashboard.post._form')
    </form>
@endsection