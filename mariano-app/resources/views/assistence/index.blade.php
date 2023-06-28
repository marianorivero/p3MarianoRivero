@extends('layouts/plantilla')

@section('main')
    <!-- -->
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>

    <h2>Ingresar una asistencia</h2>
    <form action="{{route('assistence.store')}}" method="POST">
        {{-- toquen --}}
        @csrf
        <input type="text" name="dni" placeholder="Ingrese DNI"><br><br>
        <button type="submit">Enviar</button>
    </form>

    <br><hr><br>
    <h2>Tabla de asistencias</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID estudiante</th>
                <th>ID materia</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($assistence as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->student_id}}</td>
                    <td>{{$a->subject_id}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection