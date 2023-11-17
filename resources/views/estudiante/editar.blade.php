@extends('estudiante/template')

@section('title', 'Editar estudiante')
@section('content')

<h1>Edita al estudiante {{ $estudiante['cedula'] }}</h1>

<form action="{{ url('/estudiantes/'.$estudiante['cedula']) }}" method="POST">
    @method("PUT")
    @csrf
    <div>
        <label for="cedula">Cedula</label>
        <input type="text" name="cedula" id="cedula" value="{{ $estudiante['cedula'] }}" readonly>
    </div>
    <div class="mb-3">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ $estudiante['nombre'] }}">
    </div>
    <div class="mb-3">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" value="{{ $estudiante['apellido'] }}">
    </div>
    <div class="mb-3">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" value="{{ $estudiante['direccion'] }}">
    </div>
    <div class="mb-3">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono" value="{{ $estudiante['telefono'] }}">
    </div>
    <button type="submit">Actualizar</button>
</form>

@endsection
