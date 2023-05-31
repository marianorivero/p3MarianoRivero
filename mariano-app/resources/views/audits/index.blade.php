@extends('layouts/plantilla')


@section('main')
    <br><br>
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>
    <h1>Audit sobre Alumnos</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id de usuario</th>
                <th>Log</th>
                <th>Action</th>
                <th>Fecha y hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($audits as $audit)
                <tr>
                    <th>{{$audit->user_id}}</th>
                    <th>{{$audit->log}}</th>
                    <th>{{$audit->action}}</th>
                    <th>{{$audit->created_at}}</th>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection