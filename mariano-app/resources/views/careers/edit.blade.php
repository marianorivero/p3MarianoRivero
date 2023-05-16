<form action="{{route('careers.update', $career[0]->id)}}" method="POST">
    @csrf
    @method('put')
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><input name="name" type="text" value="{{$career[0]->name}}"></th>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="guardar">
</form>