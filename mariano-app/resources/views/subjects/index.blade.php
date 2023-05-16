<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
        <tr>
            <th>{{$subject->name}}</th>
            <th><a href="subjects/{{$subject->id}}/edit"><button>Editar</button></a>
                <form action="subjects/{{$subject->id}}" method="POST">
                    @csrf
                    @method('delete')
                <button>Eliminar</button>
                </form>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>