<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//nuevo modelo MiTabla 
class Tarea extends Model
{
    //fillable especifica que columnas se va llenar al momento de crear registros en la tabla
    //Esta clase será llamada desde el controlador
    protected $fillable = ['id','proyectos_id','nombre_tarea','fecha_inicio','fecha_fin','estado_tarea','descripcion_tarea','miembros_tarea','prioridad_tarea'];
}