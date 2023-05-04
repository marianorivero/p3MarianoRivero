

<table border="1">
    <thead> 
        <tr>
            <th>Nombre </th>
            <th> Apellido </th>
            <th> Dni </th>
            <th>Cumpleaños </th>
            <th> Acciones </th>
      </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
        <tr>
            <th>{{$student->name}} </th>
            <th>{{$student->last_name}}</th>
            <th>{{$student->state}} </th>
            <th>{{$student->dni}}</th>
            <th>{{$student->birthday}} </th>
            <th> <a href="student/{{$student->id}}/edit"><button>Editar</button></a></th>
            <th> <a href="#"><button type="submit" value="Borrar"> Borrar</button></a></th>
        </tr>
        @endforeach
    </tbody>

</table>


