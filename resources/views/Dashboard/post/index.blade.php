@extends('dashboard.master')

@section('content')
    <a class="btn btn-success my-3" href='{{route('post.create')}}'>Crear</a>
    <table class="table mb-3">
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Categoria
                </th>
                <th>
                    Posted
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{$p->title}}
                    </td>
                    <td>
                        {{$p->category->title}}
                    </td>
                    <td>
                        {{$p->posted}}
                    </td>
                    <td>
                        <a class="my-2 btn btn-prymary" href='{{route('post.edit',$p)}}''>Editar</a>
                        <a class="my-2 btn btn-prymary" href='{{route('post.show',$p)}}''>Ver</a>
                        <form  action="{{route('post.destroy',$p)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="my-2 btn btn-danger" type="submit">Eliminar</button>
                        </form>
                        {{-- <a href='{{route('post.destroy')}}''>Eliminar</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$posts->links()}}
@endsection
