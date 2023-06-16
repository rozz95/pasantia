<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
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

        return view('proyecto', compact('dit'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_proyecto' => 'string',
            'miembros_proyecto' => 'string',
            
            
            
        ]);

        Proyecto::create($validatedData);

        return redirect()->route('proyecto.index')
            ->with('success', 'Product created successfully.');
    } 
    
}