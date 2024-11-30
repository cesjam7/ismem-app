<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|integer',
            'dni' => 'required|digits:8|unique:estudiantes,dni',  // Aquí no es necesario usar $estudiante->id en el store
            'email' => 'required|email|unique:estudiantes,email',  // También, no es necesario el $estudiante->id en store
            'telefono' => 'nullable',  // "required" no es necesario si usas "nullable"
        ]);
    
        Estudiante::create($request->all());
    
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante creado con éxito');
    }
    
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }
    
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|integer',
            'dni' => 'required|digits:8|unique:estudiantes,dni,' . $estudiante->id,  // Aquí sí se utiliza el $estudiante->id para evitar conflicto en la edición
            'email' => 'required|email|unique:estudiantes,email,' . $estudiante->id,  // Para evitar conflictos con el correo en la edición
            'telefono' => 'nullable',  // "nullable" es suficiente, no es necesario "required" si lo permite vacío
        ]);
    
        $estudiante->update($request->all());
    
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado con éxito');
    }
    

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado con éxito');
    }
}
