<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class EventosController extends Controller
{
    //
    public function index()
    {
        Log::info('Accediendo a la lista de eventos.');
        $eventos = Evento::latest()->paginate(10);
        Log::info('Eventos obtenidos:', ['eventos_count' => $eventos->count()]);
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }


    public function store(Request $request)
    {
        Log::info('Inicio del proceso de creación de un nuevo evento.', [
            'request_data' => $request->all()
        ]);
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'max:500',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'ubicacion' => 'required|max:255',
            'organizador' => 'nullable|max:255',
            'capacidad' => 'nullable|integer|min:1',
            'estado' => 'required|integer|max:1',
            'imagen_url' => 'nullable|image|max:2048',
            'contacto_email' => 'nullable|email|max:255',
            'contacto_telefono' => 'nullable|max:20',
        ]);

        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->fecha_inicio = $request->fecha_inicio;
        $evento->fecha_fin = $request->fecha_fin;
        $evento->ubicacion= $request->ubicacion;
        $evento->estado= $request->estado;
        $evento->imagen_url= $request->imagen_url;

        if ($request->hasFile('imagen_url')) {
            $imagen = $request->file('imagen_url');
            // Obtiene el contenido del archivo como una cadena de bytes
            $imageContent = file_get_contents($imagen->getRealPath());

            // Codifica los bytes en base64 si necesitas almacenarlo como una cadena
            $evento->imagen_url = base64_encode($imageContent);
        }

        $evento->save();

        Log::info('Evento creado exitosamente.', [
            'evento_id' => $evento->id,
            'evento_nombre' => $evento->nombre,
            'imagen' => $evento->imagen_url
        ]);

        return redirect()->route('eventos.index')
            ->with('success', 'Evento creado exitosamente.');
    }

    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento'));
    }
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'max:500',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'ubicacion' => 'required|max:255',
            'organizador' => 'nullable|max:255',
            'capacidad' => 'nullable|integer|min:1',
            'estado' => 'required|integer|max:1',
            'imagen_url' => 'nullable|image|max:2048',
            'contacto_email' => 'nullable|email|max:255',
            'contacto_telefono' => 'nullable|max:20',
        ]);

        $evento->fill($request->except('imagen'));

        // if ($request->hasFile('imagen')) {
        //     $imagen = $request->file('imagen_url');
        //     $imagecontent = file_get_contents($request->file('imagen_url')->getRealPath());
        //     $evento->imagen_url = $imagecontent;
        // }
        if ($request->hasFile('imagen_url')) {
            $imagen = $request->file('imagen_url');
            // Obtiene el contenido del archivo como una cadena de bytes
            $imageContent = file_get_contents($imagen->getRealPath());

            // Codifica los bytes en base64 si necesitas almacenarlo como una cadena
            $evento->imagen_url = base64_encode($imageContent);
        }

        $evento->save();

        return redirect()->route('eventos.index')
            ->with('success', 'Evento actualizado exitosamente.');
    }

    public function destroy(Evento $evento)
    {
        // if ($evento->imagen) {
        //     Storage::delete('public/eventos/' . $evento->imagen);
        // }

        $evento->delete();

        return redirect()->route('eventos.index')
            ->with('success', 'Evento eliminado exitosamente.');
    }
    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
    }

}
