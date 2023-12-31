@extends('dashboard.master')

@section('content')
    <a href='{{route('category.create')}}'></a>

    <table>
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Slug
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
                        <a href='{{route('category.edit',$c)}}'>Editar</a>
                        <a href='{{route('category.show',$c)}}'>Ver</a>
                        <form action="{{route('category.destroy',$c)}}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                        {{-- <a href='{{route('post.destroy')}}''>Eliminar</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$categories->links()}}
@endsection