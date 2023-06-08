@extends('layouts/plantilla')


@section('main')
    <br><br>
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>

    <br><hr><br>
    <h1>Config Subjects</h1>


    <table border="1">
        <thead>
            <tr>
                <th>Materia (id)</th>
                <th>Dia</th>
                <th>Hora de inicio</th>
                <th>Hora de finalización</th>
                <th>Hora límite</th>
            </tr>
        </thead>

        
        <tbody>
            @foreach($configSubjects as $configSubject)
                <tr>
                    <td>{{$configSubject->subject_id}}</td>
                    <td>{{$configSubject->dia}}</td>
                    <td>{{$configSubject->hora_inicio}}</td>
                    <td>{{$configSubject->hora_fin}}</td>
                    <td>{{$configSubject->hora_limite}}</td>
                </tr>
            @endforeach    
        </tbody>


    </table>

@endsection