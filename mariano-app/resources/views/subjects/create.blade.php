@extends('layouts/plantilla')


@section('main')
 
    <form action="{{route('subjects.store')}}" method="POST">
        {{-- toquen --}}
        @csrf

        <label >
            <b>Nombre de materia</b>:
            <input type="text" name="name">
        </label>

        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>
        <b>HORARIOS</b>
        

        @foreach ($days as $day)
            <div style = "padding-left: 10px; padding-top: 7px; padding-bottom: 7px; margin-bottom: 5px; width: 20%; border: steelblue solid 1px;">

                <label>
                    <b>{{$day->nombre}}</b>
                        <input type="checkbox" name="dias[]" value={{$day->id}}>            
                </label><br>
                        
                <label>
                    Hora inicio: <input type="time" name="hora_inicio[]">
                </label><br>
                    
                <label>
                    Hora fin: <input type="time" name="hora_fin[]">
                </label><br>
                    
                <label>
                    Hora limite: <input type="time" name="hora_limite[]">
                </label>

            </div>
            
            
        @endforeach
        
        {{-- <label>
            Dia: 
            <select name="dia" id="dia">
                <option value="1">Lunes</option>
                <option value="2">Martes</option>
                <option value="3">Miercoles</option>
                <option value="4">Jueves</option>
                <option value="5">Viernes</option>
                <option value="6">Sabado</option>

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
        </label><br><br> --}}

        
        <button type="submit">Enviar</button>
    </form>

@endsection