@extends('layouts/plantilla')


@section('main')  

    <br><br>
    <a href="/students"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>

    <form action="{{route('students.store')}}" method="POST">
        {{-- toquen --}}
        @csrf

        <label >
            Nombre:
            <input type="text" name="first_name">
        </label>
        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>



        <label >
            Apellido
            <input type="text" name="last_name">
        </label>
        @error('last_name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>




        <label >
            DNI:
            <input type="number" name="dni">
        </label>
        @error('dni')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br>


        <label >
            Fecha de nacimiento:
            <input type="date" name="birthday">
        </label>
        @error('name')
            <br>
            <small>* {{$message}}</small>
            <br>
        @enderror
        <br><br><br>
        
        <label >
            <b>Materias que cursa</b><br>
            @foreach ($subjects as $subject)
            <input type="checkbox" name="materias[]" value={{$subject->id}}>
            {{$subject->name}} <br>
            @endforeach
        </label>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

@endsection