@extends('layouts/plantilla')

@section('main')
    <br><br>
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>

    <h1>CARRERAS</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th> <a href="{{route('careers.create')}}"><button type="submit"> Agregar Carrera </button></a></th>
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