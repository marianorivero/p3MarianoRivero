@extends('layouts/plantilla')

@section('main')
<table border="1">
    <thead> 
        <tr>
            <th> Apellido </th>
            <th>Nombre </th>
            <th>State</th>
            <th> DNI </th>
            <th>Cumpleaños </th>
            <th> <a href="{{route('students.create')}}"><button type="submit"> Agregar </button></a></th>
      </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
        <tr>
            <th> {{$student->last_name}} </th>
            <th> {{$student->name}} </th>
            <th> {{$student->state}} </th>
            <th> {{$student->dni}} </th>
            <th> {{$student->birthday}} </th>
            <th> <a href="students/{{$student->id}}/edit"><button>Editar</button></a></th>

            <form action="{{route('students.destroy', $student)}}" method="post">
                @csrf
                @method('delete')
                <th><button type="submit"> Borrar</button></th>
            </form>

        </tr>
        @endforeach
    </tbody>

</table>
@endsection



