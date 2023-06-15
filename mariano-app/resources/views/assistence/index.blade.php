@extends('layouts/plantilla')

@section('main')

<a href="/dashboard"><button>Atras</button></a>
<a href="/"><button>Inicio</button></a>
<br><hr><br>

<h1>Asistencia</h1>

<form action="">
    <input type="text" placeholder="Ingrese DNI"><br><br>
    <input type="submit" value="Enviar">
</form>
@endsection