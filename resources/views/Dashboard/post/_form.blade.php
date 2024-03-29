@csrf

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        Please fix the following errors
    </div>

    @error('slug')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if ($errors->has("slug"))
    <div class="invalid-feedback">Cambia el titulo</div>
    @endif

@endif


<label for="">Titulo</label>
<input type="text" class="form-control" name="title" id="" value="{{old("title",$post->title)}}">

@error('title')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror


<label for="">Categoría</label>
<select class="form-control" name="category_id" id="">
    @foreach ($categories as $title => $id)
        <option {{old("category_id",$post->category_id) == $id ? "selected" : ""}} value="{{$id}}">{{$title}}</option>
    @endforeach
</select>

@error('category_id')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror


<label for="">Posteado</label>
<select class="form-control" name="posted">
    <option {{old("posted",$post->posted) == "yes" ? "selected":""}} value="yes">Si</option>
    <option {{old("posted",$post->posted) == "not" ? "selected":""}} value="not">No</option>
</select>

@error('posted')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror


<label for="">Contenido</label>
<textarea class="form-control" name="content">{{old("content",$post->content)}}</textarea>

@error('content')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror


<label for="">Descripción</label>
<textarea class="form-control" name="description">{{old("description",$post->description)}}</textarea>

@error('description')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

@if (isset($task) && $task == 'edit')
    <label for="">Imagen</label>
    <input type="file" name="image">
@endif


<button type="submit" class="btn btn-success mt-3">Enviar</button>
