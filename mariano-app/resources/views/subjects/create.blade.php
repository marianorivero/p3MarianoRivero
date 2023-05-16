<form action="{{route('subjects.store')}}" method="POST">
    @csrf
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><input name="name" type="text"></th>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="guardar">
</form>