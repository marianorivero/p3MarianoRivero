@extends('layouts/plantilla')


@section('main')
    <br><br>
    <a href="/students"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>
    

    <form action="{{route('students.update', $student[0]->id)}}" method="POST">
        {{-- toquen --}}
        @csrf


        @method('PATCH')

        <label >
            Nombre:
            <input type="text" name="first_name" value="{{$student[0]->first_name}}">
        </label>
        @error('first_name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>



        <label >
            Apellido
            <input type="text" name="last_name" value="{{$student[0]->last_name}}">
        </label>
        @error('last_name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>



        <label >
            DNI:
            <input type="number" name="dni" value="{{$student[0]->dni}}">
        </label>
        @error('dni')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>


        <label >
            Fecha de nacimiento:
            <input type="date" name="birthday" value="{{$student[0]->birthday}}">
        </label>
        @error('birthday')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>
        


        
        <b>Materias que cursa</b><br>
        @foreach ($subjects as $subject)
            <?php
            $dibujado = false; 
            ?>

            @foreach ($studentSubjects as $studentSubject)
                @if ($subject->id == $studentSubject->id)

                    <input type="checkbox" checked name="materias[]" value={{$subject->id}}>
                    {{$subject->name}} <br>

                    <?php
                    $dibujado = true; 
                    ?>
                    
                @endif
                
            @endforeach

            @if ($dibujado==false)
                <input type="checkbox"  name="materias[]" value={{$subject->id}}>
                {{$subject->name}} <br>
            @endif
                    

                
        @endforeach
        <br><br>

        <button type="submit">Enviar</button>
    </form>

@endsection