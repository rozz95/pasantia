<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    public function index()
    {
        return view("calendario.calendario");
    }
    public function show()
    {
        $tareas = Tarea::all();

        $eventos = [];
        foreach ($tareas as $tarea) {
            $evento = [
                'title' => $tarea->nombre_tarea,
                'start' => $tarea->fecha_inicio,
                'end' => $tarea->fecha_fin,
            ];
            $eventos[] = $evento;
        }

        return response()->json($eventos);
    }
}
