@extends('layouts/plantilla')

@section('main')

    <form action="{{route('careers.store')}}" method="POST">
        {{-- toquen --}}
        @csrf

        <label >
            Nombre de carrera:
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