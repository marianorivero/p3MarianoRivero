@extends('layouts/plantilla')

@section('main')
    <!-- -->
    <!-- 
    <a href="/dashboard"><button>Atras</button></a>
    <a href="/"><button>Inicio</button></a>
    <br><hr><br>-->


    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Asistencia') }}
    </h2><br><br>


    <form action="">
        <input type="text" placeholder="Ingrese DNI"><br><br>
        <hr><hr><hr><hr>
        <input type="submit" value="Enviar">
    </form>
@endsection