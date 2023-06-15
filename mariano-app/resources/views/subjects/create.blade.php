@extends('layouts/plantilla')


@section('main')
 
    <form action="{{route('subjects.store')}}" method="POST">
        {{-- toquen --}}
        @csrf

        <label >
            Nombre de materia:
            <input type="text" name="name">
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
            <input type="time" name="hora_inicio" id="hora_inicio">
        </label><br><br>

        <label>
            Hora de fin de la materia: 
            <input type="time" name="hora_fin" id="hora_fin">
        </label><br><br>

        <label>
            Hora limite de llegada: 
            <input type="time" name="hora_limite" id="hora_limite">
        </label><br><br>

        <hr><hr><hr>
        <button type="submit">Enviar</button>
    </form>

@endsection