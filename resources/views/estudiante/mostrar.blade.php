@extends('estudiante/template')
@section('title','MostrarTodos')
@section('content')

<h1>Lista de estudiantes</h1>
<table>
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantesArray AS $estudiante)
        <tr>
            <td>{{ $estudiante['cedula'] }}</td>
            <td>{{ $estudiante['nombre'] }}</td>
            <td>{{ $estudiante['apellido'] }}</td>
            <td>{{ $estudiante['direccion'] }}</td>
            <td>{{ $estudiante['telefono'] }}</td>
            <td><a href="{{ url('estudiantes/'. $estudiante['cedula']) .'/edit' }}">Editar</a></td>
            <td>
                <form action="{{ url('estudiantes/'.$estudiante['cedula']) }}" method="post">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('estudiantes/create') }}">Crear</a>
@endsection