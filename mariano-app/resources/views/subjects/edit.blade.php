@extends('layouts/plantilla')


@section('main')  
    
    <form action="{{route('subjects.update', $subject[0]->id)}}" method="POST">
        {{-- toquen --}}
        @csrf


        @method('PATCH')

        <label >
            Nombre de materia:
            <input type="text" name="name" value="{{$subject[0]->name}}">
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
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miercoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sabado">Sabado</option>

            </select>
        </label><br><br>


        <b></b>
        <label>
            Hora de inicio de la materia: 
            <input type="time" name="hora_inicio" id="hora_inicio" value="{{$configSubject[0]->hora_inicio}}">
        </label><br><br>

        <label>
            Hora de fin de la materia: 
            <input type="time" name="hora_fin" id="hora_fin" value="{{$configSubject[0]->hora_fin}}">
        </label><br><br>

        <label>
            Hora limite de llegada: 
            <input type="time" name="hora_limite" id="hora_limite" value="{{$configSubject[0]->hora_limite}}">
        </label><br><br>


        <button type="submit">Enviar</button>
    </form>

@endsection