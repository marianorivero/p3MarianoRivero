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
                <th>Id de usuario</th>
                <th>Log</th>
                <th>Action</th>
                <th>Fecha y hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($audits as $audit)
                <tr>
                    <td>{{$audit->user_id}}</td>
                    <td>{{$audit->log}}</td>
                    <td>{{$audit->action}}</td>
                    <td>{{$audit->created_at}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection