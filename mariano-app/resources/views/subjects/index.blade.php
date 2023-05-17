@extends('layouts/plantilla')


@section('main')  

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th> <a href="{{route('subjects.create')}}"><button type="submit"> Agregar </button></a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <th>{{$subject->name}}</th>
                <th> <a href="subjects/{{$subject->id}}/edit"><button>Editar</button></a></th>

                <form action="{{route('subjects.destroy', $subject)}}" method="post">
                    @csrf
                    @method('delete')
                    <th><button type="submit"> Borrar</button></th>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection