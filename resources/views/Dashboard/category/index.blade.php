@extends('dashboard.master')

@section('content')
    <a class="my-2 btn btn-success" href='{{route('category.create')}}'>Crear</a>

    <table class="table mb-3">
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Slug
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>
                        {{$c->title}}
                    </td>
                    <td>
                        {{$c->slug}}
                    </td>
                    <td>
                        <a class="btn btn-prymary mt-2" href='{{route('category.edit',$c)}}'>Editar</a>
                        <a class="btn btn-prymary mt-2" href='{{route('category.show',$c)}}'>Ver</a>
                        <form action="{{route('category.destroy',$c)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                        </form>
                        {{-- <a href='{{route('post.destroy')}}''>Eliminar</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$categories->links()}}
@endsection
