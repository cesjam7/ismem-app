@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Gestión de Estudiantes</h1>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Añadir Estudiante</a>
        @if (session('success'))
            <div class="alert alert-success mb-0">{{ session('success') }}</div>
        @endif
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>DNI</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr class="text-center align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->edad }}</td>
                        <td>{{ $estudiante->dni }}</td>
                        <td>{{ $estudiante->email }}</td>
                        <td>{{ $estudiante->telefono }}</td>
                        <td class="d-flex justify-content-center gap-2">
                            <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
