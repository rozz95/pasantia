<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
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

        return view('tarea', compact('dat'),['id'=> $id]);
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
            'miembros_tarea' => 'string',
            'prioridad_tarea' => 'string',
            
        ]);

        Tarea::create($validatedData);
        return redirect()->route('tarea.index', ['id' => $request->proyectos_id])
        ->with('success', 'Product created successfully.');
    } 
    
}

 
