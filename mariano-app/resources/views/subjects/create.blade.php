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
    
        <button type="submit">Enviar</button>
    </form>

@endsection