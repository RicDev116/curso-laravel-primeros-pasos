@extends('dashboard.master')
@section('content')

    <h1>Crear Categoría</h1>

    <form action="{{route('category.store')}}" method="POST">
        @include('dashboard.category._form',['create' => true])
    </form>

@endsection