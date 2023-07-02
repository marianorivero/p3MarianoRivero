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
                <th>Estudiante</th>
                <th>Materia</th>
                <th>Fecha y Hora</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($assistences as $assistence)
                <tr>
                    <td>{{$assistence->last_name}}</td>
                    <td>{{$assistence->name}}</td>
                    <td>{{$assistence->created_at}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection