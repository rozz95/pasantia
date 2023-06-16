<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'  href="{{asset('css/principal.css') }}">
    
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KANBAN</title>
    
</head>
<body>
@include('header')

<div class="container">

<button id="ButtonModal">Crear</button>

<div class="kandan-table">

@if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif

<form method="post" action="{{ route('tarea.store') }}">
             @csrf
    <div class="kanban-form" id="mymodal">
        <div class="container-inputs">
        
           <strong class="kanban-form-title">Tarea</strong>
          
          <?php
           $avg=0;
           $avg=$id;
           if($id==$avg)
           {
           
           echo"
               <input type='number' id='id-proyecto' value='$avg' name='proyectos_id'>"
               ;
           }
           
           ?>
          
            <strong class="strong-input">Nombre de la tarea</strong>
            <input type="text" id="tarea-nombre" class="input-text" name="nombre_tarea">
            <strong class="strong-input">Descripcion del trabajo</strong>
            
            <textarea id="tarea-descripcion" class="textarea-text" name="descripcion_tarea"></textarea>
            
                <strong class="strong-input">Asignacion</strong>
                
                <label > Miembros</label>
              <input type="text" id="miembro" name="miembros_tarea" value="persona">
             
              <label for="fecha_uno">Fecha Inicio</label>
              <input type="date" class="fecha_uno" name="fecha_inicio" id="fechainicio">
              <label for="fecha_dos">Fecha Final</label>
              <input type="date" class="fecha_dos" name="fecha_fin" id="fechafin">

              <input type='text' id='prioridad' value='pendientes' name='estado_tarea'>
              <strong class="strong-input">Prioridad de la tarea</strong>
              <select name="prioridad_tarea" id="">
                <option value="baja">prioridad baja</option>
                <option value="media"> prioridad media</option>
                <option value="alta">prioridad alta</option>
                
            </select>
                <input type="submit" class="" id="btn-crear-editar" value="Crear Tarea" >
               <button class="close">cerrar</button>  

        </div>
        </form>       
    </div>
   
      
    <div class="kanban-block" id="completados" ondrop="drop(event)" ondragover="allowDrop(event)">
    <strong>completados</strong>

    @foreach($dat as $single)
    <?php

    
  
    if($id==$single->proyectos_id && $single->estado_tarea=="completados")
    {
     echo"
    
         <div class='tarea' onclick='mostrardatos(this)' id='{$single->id}' draggable='true' ondragstart='drag(event)'  >
         <div class='dat'>
         <p class='nombret'>{$single->nombre_tarea}</p>
         <p class='descrip'>{$single->descripcion_tarea}</p>
         </div>
         <div class='det' >
         <i class='bx bx-plus icon' style='float:right'></i>
         </div>
         </div>
         <script>
        var borde = '{$single->prioridad_tarea}';
        var color = document.getElementById('{$single->id}');
        if (borde === 'baja') {
            color.style.borderColor = 'green';
        } else if (borde === 'media') {
            color.style.borderColor = 'yellow';
        } else if (borde === 'alta') {
            color.style.borderColor = 'red';
        }
    </script>
         
         "
         
         ;
    }elseif($id!=0)
    {
    }       
     ?>
        @endforeach 
    </div>

     <div class="kanban-block" id="procesos" ondrop="drop(event)" ondragover="allowDrop(event)">
    <strong>en proceso</strong>
    @foreach($dat as $single)
    <?php
    
  
    if($id==$single->proyectos_id && $single->estado_tarea=="procesos")
    {
     echo"
    
         <div class='tarea' onclick='mostrardatos(this)' id='{$single->id}' draggable='true' ondragstart='drag(event)'  >
         <div class='dat'>
         <p  class='nombret' >{$single->nombre_tarea}</p>
         <p class='descrip'>{$single->descripcion_tarea}</p>
         </div>
         <div class='det' >
         <i class='bx bx-plus icon' style='float:right'></i>
         </div>
         </div>
         
         <script>
        var borde = '{$single->prioridad_tarea}';
        var color = document.getElementById('{$single->id}');
        if (borde === 'baja') {
            color.style.borderColor = 'green';
        } else if (borde === 'media') {
            color.style.borderColor = 'yellow';
        } else if (borde === 'alta') {
            color.style.borderColor = 'red';
        }
    </script>
         "
         
         ;
    }elseif($id!=0)
    {   
    }
        ?>
        @endforeach 
     </div>

     <div class="kanban-block" id="pendientes" ondrop="drop(event)" ondragover="allowDrop(event)">
    <strong>pendientes</strong>
    @foreach($dat as $single)
    <?php  
    if($id==$single->proyectos_id && $single->estado_tarea=="pendientes")
    {
     echo"
     
         <div class='tarea'  onclick='mostrardatos(this)' id='{$single->id}' draggable='true' ondragstart='drag(event)'  >
         <div  class='dat'>
         <p class='nombret'>{$single->nombre_tarea}</p>
         <p class='descrip'>{$single->descripcion_tarea}</p>
         </div>
         <div class='det' >
         <i class='bx bx-plus icon' style='float:right'></i>
         </div>
         </div>

         <script>
        var borde = '{$single->prioridad_tarea}';
        var color = document.getElementById('{$single->id}');
        if (borde === 'baja') {
            color.style.borderColor = 'green';
        } else if (borde === 'media') {
            color.style.borderColor = 'yellow';
        } else if (borde === 'alta') {
            color.style.borderColor = 'red';
        }
    </script>
         
         
         "
         
         ;
    }elseif($id!=0)
    {
     
    }
        ?>
        @endforeach   
    </div>
  </div>
</div>

@include('sidebar')

<div class="recuadro" id="modal">
<div class="datos">
    <label >Nombre de la tarea</label>
<strong class="strong-input" id="nombre_reescrito">Nombre</strong>
<label >Descripcion de la tarea</label>
<p class="ladescripcion" id="descript"></p>
<strong class="encargados">encargado</strong>
<button class="cerrado">cerrar</button>  
</div>
</div>

<script type="text/javascript" src="{{asset('js/crear.js') }}"></script>
<script type="text/javascript" src="{{asset('js/principal.js') }}"></script>
</body>
</html>