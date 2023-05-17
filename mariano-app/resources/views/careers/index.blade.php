@extends('layouts/plantilla')

@section('main')

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th> <a href="{{route('careers.create')}}"><button type="submit"> Agregar </button></a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($careers as $career)
            <tr>
                <th>{{$career->name}}</th>
                <th> <a href="careers/{{$career->id}}/edit"><button>Editar</button></a></th>

                <form action="{{route('careers.destroy', $career)}}" method="post">
                    @csrf
                    @method('delete')
                    <th><button type="submit"> Borrar</button></th>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection