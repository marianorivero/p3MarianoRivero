@extends('layouts/plantilla')


@section('main')  
    
    <br><br>
    <a href="/subjects"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>


    <form action="{{route('subjects.update', $subject->id)}}" method="POST">
        {{-- toquen --}}
        @csrf


        @method('PATCH')

        <label >
            <b>Nombre de materia:</b>
            <input type="text" name="name" value="{{$subject->name}}">
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

                <?php
                    $dibujado = false; 
                ?>

                @foreach ($configSubjects as $configSubject)
                    @if ($configSubject->dia == $day->id)
                        <label>
                            <b>{{$day->nombre}}</b>
                            <input type="checkbox" checked name="dias[]" value={{$day->id}}>            
                        </label><br>

                        <label>
                            Hora inicio: <input type="time" name="hora_inicio[]" value="{{$configSubject->hora_inicio}}">
                        </label><br>
                        
                        <label>
                            Hora fin: <input type="time" name="hora_fin[]" value="{{$configSubject->hora_fin}}">
                        </label><br>
                        
                        <label>
                            Hora limite: <input type="time" name="hora_limite[]" value="{{$configSubject->hora_limite}}">
                        </label>  
                        
                        
                        <?php
                            $dibujado = true; 
                        ?>


                    @endif
                @endforeach



                @if ($dibujado==false)
                    <label>
                        <b>{{$day->nombre}}</b>
                        <input type="checkbox" name="dias[]" value={{$day->id}}>            
                    </label><br>
                    
                    <label>
                        Hora inicio: <input type="time" name="hora_inicio[]">
                    </label><br>
                
                    <label>
                        Hora fin: <input type="time" name="hora_fin[]" >
                    </label><br>
                
                    <label>
                        Hora limite: <input type="time" name="hora_limite[]">
                    </label>     
                @endif
            </div>  
        @endforeach 

        
        <button type="submit">Enviar</button>
    </form>

@endsection