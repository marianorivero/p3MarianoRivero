@extends('layouts/plantilla')


@section('main')  
    <!-- -->
    <!-- 
    <br><br>
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>-->

    <h1>MATERIAS</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th> <a href="{{route('subjects.create')}}"><button type="submit"> Agregar Materia</button></a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td>{{$subject->name}}</td>
                <td> <a href="subjects/{{$subject->id}}/edit"><button>Editar</button></a></td>

                <form action="{{route('subjects.destroy', $subject)}}" method="post">
                    @csrf
                    @method('delete')
                    <td><button type="submit"> Borrar</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection