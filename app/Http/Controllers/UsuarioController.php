<?php

namespace App\Http\Controllers;
use App\Models\usuario;
use Illuminate\Http\Request;
//nuevo controller
class usuarioController extends Controller
{
    public function show()
    {        
        return view('usuario');
    }
    public function index()
    {
        $det = usuario::all();

        return view('tarea', compact('det'));
    }
    
}