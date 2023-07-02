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
                <th>Estudiante (id)</th>
                <th>Materia(id)</th>
                <th>dia()</th>
                <th>horario()</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($assistence as $a)
                <tr>
                    <td>{{$a->student_id}}</td>
                    <td>{{$a->subject_id}}</td>
                    <td>*</td>
                    <td>*</td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection