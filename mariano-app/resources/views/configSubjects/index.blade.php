@extends('layouts/plantilla')


@section('main')
     
    <br><br>
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>

    <br><hr><br>

    {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Calendario de materias') }}
    </h2><br><br> --}}


    <table border="1">
        <thead>
            <tr>
                <th>Materia</th>
                <th>Dia</th>
                <th>Hora de inicio</th>
                <th>Hora de finalización</th>
                <th>Hora límite</th>
            </tr>
        </thead>

        
        <tbody>
            @foreach($configSubjects as $configSubject)
                <tr>  
                    <td>{{$configSubject->name}}</td>
                    <td>{{$configSubject->nombre}}</td>
                    <td>{{$configSubject->hora_inicio}}</td>
                    <td>{{$configSubject->hora_fin}}</td>
                    <td>{{$configSubject->hora_limite}}</td>
                </tr>
            @endforeach    
        </tbody>


    </table>

@endsection