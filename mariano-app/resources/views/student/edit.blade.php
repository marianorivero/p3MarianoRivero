@extends('layouts/plantilla')


@section('main')
    
{{-- 
    action="students/{{$student[0]->id}}"
    --}}
    <form action="{{route('students.update', $student[0]->id)}}" method="POST">
        {{-- toquen --}}
        @csrf


        @method('PATCH')

        <label >
            Nombre:
            <input type="text" name="name" value="{{$student[0]->name}}">
        </label>
        @error('name')
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



        {{-- <label >
            State:
            <input type="text" name="state">
        </label>
        <br><br> --}}

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
        

        <button type="submit">Enviar</button>
    </form>

@endsection