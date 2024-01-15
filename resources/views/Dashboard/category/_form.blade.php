@csrf

@if ($errors->any())

    <div class="alert alert-danger" role="alert">
        Please fix the following errors
    </div>

    @isset($create)
        @if ($errors->has("slug"))
            <div class="invalid-feedback">Cambia el titulo</div>
        @endif
    @endisset


@endif


<label for="">Titulo</label>
<input class="form-control" type="text" name="title" id="" value="{{old("title",$category->title)}}">

@isset($slug)
    <label for="slug">Slug</label>
    <input readonly type="text" name="slug" id="slug" value="{{old("slug",$category->slug)}}">
    @if ($errors->has("slug"))
        <div class="invalid-feedback">Cambia el titulo</div>
    @endif
@endisset

@error('title')
    <div class="invalid-feedback">{{ $message }}</div>
@enderror


<button class="btn btn-success mt-3" type="submit">Enviar</button>
