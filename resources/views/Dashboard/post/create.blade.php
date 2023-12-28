<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creaer Post</title>
</head>
<body>
    <h1>Crear Post</h1>

    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title" id="">

        <label for="">Slug</label>
        <input type="text" name="slug" id="">

        <label for="">Categoría</label>
        <select name="category_id" id="">
            @foreach ($categories as $title => $id)
                <option value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>

        <label for="">Posteado</label>
        <select name="posted">
            <option value="yes">Si</option>
            <option value="not">No</option>
        </select>

        <label for="">Contenido</label>
        <input type="text" name="content" id="">

        <label for="">Descripción</label>
        <input type="text" name="description" id="">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>