<!-- resources/views/eventos/index.blade.php -->
@extends('layouts.dashboard')


@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Eventos</h1>
        <a href="{{ route('eventos.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Crear Nuevo Evento
        </a>
    </div> -->



    <!-- <div class="bg-white shadow-md rounded-lg overflow-x-auto max-h-96">-->
        <!-- <div class="overflow-x-auto overflow-y-auto max-h-96">

         </div> -->
    <!--</div> -->

    <!--<div class="bg-white shadow-md rounded-lg overflow-x-auto max-h-96">
    <table class="table w-full border-separate lg:border-collapse">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripcion</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Inicio</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Fin</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ubicación</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Organizador</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacidad</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contacto Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contacto telefono</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($eventos as $evento)
                    <tr>
                        <td class="">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $evento->nombre }}
                            </div>
                        </td>
                        <td class="">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $evento->descripcion }}
                            </div>
                        </td>
                        <td class="">
                            <div class="text-sm text-gray-900">
                                {{ \Carbon\Carbon::parse($evento->fecha_inicio)->format('d/m/Y H:i') }}
                            </div>
                        </td>
                        <td class="">
                            <div class="text-sm text-gray-900">
                                {{ \Carbon\Carbon::parse($evento->fecha_fin)->format('d/m/Y H:i') }}
                            </div>
                        </td>
                        <td class="">
                            <div class="text-sm text-gray-900">{{ $evento->ubicacion }}</div>
                        </td>
                        <td class="">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $evento->organizador }}
                            </div>
                        </td>
                        <td class=" text-sm text-gray-900">
                            {{ $evento->capacidad }}
                        </td>
                        <td class="">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                       {{ $evento->estado === 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $evento->estado === 1 ? 'Activo' : 'Inactivo' }}
                            </span>
                        </td>
                        <td class=" whitespace-nowrap">
                            @if($evento->imagen_url)
                            <img src="data:image/jpeg;base64,{{ $evento->imagen_url }}" alt="{{ $evento->nombre }}">
                            @else
                                <div class="h-10 w-10 rounded-full bg-gray-200"></div>
                            @endif
                        </td>
                        <td class="">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $evento->contacto_email }}
                            </div>
                        </td>
                        <td class="">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $evento->contacto_telefono }}
                            </div>
                        </td>
                        <td class=" whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-3">
                                <a href="{{ route('eventos.show', $evento) }}"
                                   class="text-blue-600 hover:text-blue-900">Ver</a>
                                <a href="{{ route('eventos.edit', $evento) }}"
                                   class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('eventos.destroy', $evento) }}"
                                      method="POST"
                                      class="inline"
                                      onsubmit="return confirm('¿Está seguro que desea eliminar este evento?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:text-red-900">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class=" whitespace-nowrap text-sm text-gray-500 text-center">
                            No hay eventos registrados
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>-->
    <div class="overflow-x-auto max-w-full">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="table-fixed w-full border-separate max-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripcion</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Inicio</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Fin</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ubicación</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Organizador</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capacidad</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contacto Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contacto telefono</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($eventos as $evento)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $evento->nombre }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $evento->descripcion }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ \Carbon\Carbon::parse($evento->fecha_inicio)->format('d/m/Y H:i') }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ \Carbon\Carbon::parse($evento->fecha_fin)->format('d/m/Y H:i') }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $evento->ubicacion }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $evento->organizador }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $evento->capacidad }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $evento->estado === 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $evento->estado === 1 ? 'Activo' : 'Inactivo' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            @if($evento->imagen_url)
                                <img src="data:image/jpeg;base64,{{ $evento->imagen_url }}" alt="{{ $evento->nombre }}" class="h-10 w-10 rounded-full">
                            @else
                                <div class="h-10 w-10 rounded-full bg-gray-200"></div>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $evento->contacto_email }}</td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $evento->contacto_telefono }}</td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <div class="flex space-x-3">
                                <a href="{{ route('eventos.edit', $evento) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                <form action="{{ route('eventos.destroy', $evento) }}" method="POST" class="inline" onsubmit="return confirm('¿Está seguro que desea eliminar este evento?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-sm text-gray-500 text-center">No hay eventos registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


    @if($eventos->hasPages())
        <div class="mt-4">
            {{ $eventos->links() }}
        </div>
    @endif
</div>
@endsection
