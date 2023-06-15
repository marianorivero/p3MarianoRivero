@extends('layouts/plantilla')


@section('main')
    <!-- -->
    <!-- 
    <br><br>
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>-->
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Audit sobre alumnos') }}
    </h2><br><br>

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