<!-- resources/views/eventos/edit.blade.php -->
@extends('layouts.dashboard')


@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-2xl font-semibold text-gray-900">Editar Evento</h1>
            @include('eventos.form', ['evento' => $evento])
        </div>
    </div>
@endsection
