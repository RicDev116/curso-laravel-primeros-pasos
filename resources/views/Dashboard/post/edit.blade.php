@extends('dashboard.master')
@section('content')
    <h1>Actualizar Post {{$post->title}}</h1>

    <form action="{{route('post.update', $post->id)}}" method="POST">
        @method("PUT")
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Please fix the following errors
            </div>
        @endif

        <label for="">Titulo</label>
        <input type="text" name="title" id="" value = {{ $post->title}}>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Slug</label>
        <input readonly type="text" name="slug" id=""value = {{ $post->slug}}>
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Categoría</label>
        <select name="category_id" id="">
            @foreach ($categories as $title => $id)
                <option {{ $post->category_id == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Posteado</label>
        <select name="posted">
            <option {{ $post->posted == 'yes' ? 'selected' : ''}} value="yes">Si</option>
            <option {{ $post->posted == 'not' ? 'selected' : ''}} value="not">No</option>
        </select>
        @error('posted')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Contenido</label>
        <textarea name="content">{{ $post->content}}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label for="">Descripción</label>
        <textarea name="description">{{ $post->description}}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <button type="submit">Enviar</button>
    </form>
@endsection