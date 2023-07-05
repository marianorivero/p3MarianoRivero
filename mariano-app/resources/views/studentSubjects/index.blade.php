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
                <th>Alumno</th>
                <th>Materia</th>
            </tr>
        </thead>

        
        <tbody>
            @foreach($studentSubjects as $studentSubject)
                <tr>  
                    <td>{{$studentSubject->first_name}} {{$studentSubject->last_name}}</td>
                    <td>{{$studentSubject->name}}</td>

                </tr>
            @endforeach    
        </tbody>


    </table>

@endsection