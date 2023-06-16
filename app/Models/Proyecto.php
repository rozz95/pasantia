<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//nuevo modelo MiTabla 
class Proyecto extends Model
{
    //fillable especifica que columnas se va llenar al momento de crear registros en la tabla
    //Esta clase será llamada desde el controlador
    protected $fillable = ['nombre_proyecto','miembros_proyecto'];
}