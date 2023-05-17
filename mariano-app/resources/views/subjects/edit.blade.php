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


        <button type="submit">Enviar</button>
    </form>

@endsection