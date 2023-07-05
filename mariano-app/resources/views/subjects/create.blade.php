@extends('layouts/plantilla')


@section('main')
    <br><br>
    <a href="/subjects"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>

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
        <button type="submit">Enviar</button>
    </form>

@endsection