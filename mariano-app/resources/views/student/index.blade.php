@extends('layouts/plantilla')


@section('main')
    <!-- -->
    
    <br><br>
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>
    

    <table border="1">
        <thead> 
            <tr>
                <th> Apellido </th>
                <th>Nombre </th>
                <th>State</th>
                <th> DNI </th>
                <th>Cumpleaños </th>
                <th> <a href="{{route('students.create')}}"><button type="submit"> Agregar Alumno</button></a></th>
        </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
            <tr>
                <td> {{$student->last_name}} </td>
                <td> {{$student->name}} </td>
                <td> {{$student->state}} </td>
                <td> {{$student->dni}} </td>
                <td> {{$student->birthday}} </td>
                <td> <a href="students/{{$student->id}}/edit"><button>Editar</button></a></td>

                <form action="{{route('students.destroy', $student)}}" method="post">
                    @csrf
                    @method('delete')
                    <td><button type="submit"> Borrar</button></td>
                </form>

            </tr>
            @endforeach
        </tbody>

    </table>
@endsection



