@extends('dashboard.master')
@section('content')
    <h1>Crear Post</h1>

    <form action="{{route('post.store')}}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Please fix the following errors
            </div>
        @endif

        <label for="">Titulo</label>
        <input type="text" name="title" id="">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        {{-- <label for="">Slug</label>
        <input type="text" name="slug" id="">
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror --}}

        <label for="">Categoría</label>
        <select name="category_id" id="">
            @foreach ($categories as $title => $id)
                <option value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Posteado</label>
        <select name="posted">
            <option value="yes">Si</option>
            <option value="not">No</option>
        </select>
        @error('posted')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Contenido</label>
        <input type="text" name="content" id="">
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Descripción</label>
        <input type="text" name="description" id="">
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <button type="submit">Enviar</button>
    </form>
@endsection