@extends('layouts/plantilla')


@section('main')  
    
    <form action="{{route('subjects.update', $subject->id)}}" method="POST">
        {{-- toquen --}}
        @csrf


        @method('PATCH')

        <label >
            Nombre de materia:
            <input type="text" name="name" value="{{$subject->name}}">
        </label>
        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>


        
        <label>
            Dia: 
            <select name="dia" id="dia">
                @foreach ($days as $day)
                  <option value="{{ $day->name }}" {{ ($day->name == $configSubject->dia ? "selected" : "") }}> {{ $day->name }}</option> 
                @endforeach
            </select>
        </label><br><br>




        <b></b>
        <label>
            Hora de inicio de la materia: 
            <input type="time" name="hora_inicio" id="hora_inicio" value="{{$configSubject->hora_inicio}}">
        </label><br><br>

        <label>
            Hora de fin de la materia: 
            <input type="time" name="hora_fin" id="hora_fin" value="{{$configSubject->hora_fin}}">
        </label><br><br>

        <label>
            Hora limite de llegada: 
            <input type="time" name="hora_limite" id="hora_limite" value="{{$configSubject->hora_limite}}">
        </label><br><br>

        <hr><hr><hr>
        <button type="submit">Enviar</button>
    </form>

@endsection