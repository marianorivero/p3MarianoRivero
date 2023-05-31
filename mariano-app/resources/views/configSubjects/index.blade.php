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
                    <th>{{$configSubject->subject_id}}</th>
                    <th>{{$configSubject->dia}}</th>
                    <th>{{$configSubject->hora_inicio}}</th>
                    <th>{{$configSubject->hora_fin}}</th>
                    <th>{{$configSubject->hora_limite}}</th>
                </tr>
            @endforeach    
        </tbody>


    </table>

@endsection