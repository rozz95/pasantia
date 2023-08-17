<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\Request;
//nuevo controller
class ProyectoController extends Controller
{
    public function show()
    {        
        return view('proyecto');
    }
    public function index()
    {
        $dit = Proyecto::all();
        $usr = User::all();


        return view('proyecto', compact('dit','usr'));
    }
    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre_proyecto' => 'string',
        'miembros_proyecto' => 'array',
    ]);

    // Obtén los correos electrónicos seleccionados
    $correosSeleccionados = $request->input('miembros_proyecto');

    // Concatena los correos electrónicos en una cadena
    $emailsConcatenados = implode(', ', $correosSeleccionados);

    // Crea un nuevo proyecto con los correos electrónicos concatenados
    Proyecto::create([
        'nombre_proyecto' => $validatedData['nombre_proyecto'],
        'miembros_proyecto' => $emailsConcatenados,
    ]);

    return redirect()->route('proyecto.index')
        ->with('success', 'Product created successfully.');
}

    
}