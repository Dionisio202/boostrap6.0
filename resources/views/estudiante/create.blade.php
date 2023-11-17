@extends('estudiante/template')

@section('title', 'Nuevo estudiante')
@section('content')

<h1>Crear nuevo estudiante</h1>

<form action="{{ url('/estudiantes') }}" method="POST">
    @csrf
    <div>
        <label for="cedula">Cedula</label>
        <input type="text" name="cedula" id="cedula">
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
    </div>
    <div>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
    </div>
    <div>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion">
    </div>
    <div>
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono">
    </div>
    <button type="submit">Guardar</button>
</form>

@endsection