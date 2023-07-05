@extends('layouts/plantilla')

@section('main')

    <br><br>
    <a href="/careers"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>

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
        
        <hr><hr><hr>
        <button type="submit">Enviar</button>
    </form>

@endsection