<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class CambioController extends Controller
{
    public function cambiarEstado(Request $request)
    {
        $idTarea = $request->input('idTarea');
        $nuevoEstado = $request->input('nuevoEstado');

        // Busca la tarea en la base de datos y actualiza su estado
        $tarea = Tarea::find($idTarea);
        if ($tarea) {
            $tarea->estado_tarea = $nuevoEstado;
            $tarea->save();
        }

        // Puedes devolver una respuesta si lo deseas
        return response()->json(['success' => true]);
    }
}