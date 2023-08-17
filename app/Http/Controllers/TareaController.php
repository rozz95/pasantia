<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use App\Models\Proyecto;
use App\Models\Post;
use Illuminate\Http\Request;
//nuevo controller
class TareaController extends Controller
{
    public function show($id)
    {   
           
        return view('tarea', compact('id'));
    }
    public function index($id)
    {
        $dat = Tarea::all();
        $pj = Proyecto::where('id', $id)->get();

        return view('tarea', compact('dat','pj'),['id'=> $id]);
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'proyectos_id' => 'int',
        'nombre_tarea' => 'string',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'estado_tarea' => 'string',
        'descripcion_tarea' => 'string',
        'miembros_tarea' => 'array', // Actualizar la validación a 'array' en lugar de 'string'
        'prioridad_tarea' => 'string',
    ]);

    // Convertir el array de miembros_tarea en una cadena de texto separada por comas y espacios
    $miembros_tarea = implode(', ', $validatedData['miembros_tarea']);

    // Actualizar el valor de miembros_tarea en los datos validados
    $validatedData['miembros_tarea'] = $miembros_tarea;

    Tarea::create($validatedData);
    return redirect()->route('tarea.index', ['id' => $request->proyectos_id])
        ->with('success', 'Product created successfully.');
}

    
}

 
