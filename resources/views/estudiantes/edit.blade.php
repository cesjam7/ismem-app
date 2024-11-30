@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>{{ isset($estudiante) ? 'Editar Estudiante' : 'Agregar Estudiante' }}</h2>
    <form action="{{ isset($estudiante) ? route('estudiantes.update', $estudiante) : route('estudiantes.store') }}" method="POST">
        @csrf
        @if(isset($estudiante))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $estudiante->nombre ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" id="apellito" class="form-control" value="{{ $estudiante->apellido ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" value="{{ $estudiante->edad ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">Dni</label>
            <input type="number" name="dni" id="dni" class="form-control" value="{{ $estudiante->dni ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $estudiante->email ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" name="telefono" id="telefono" class="form-control" value="{{ $estudiante->telefono ?? '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($estudiante) ? 'Actualizar' : 'Guardar' }}</button>
    </form>
</div>
@endsection
