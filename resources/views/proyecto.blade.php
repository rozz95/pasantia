<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'  href="{{asset('css/tablero.css') }}">
    
   
    
    <title>Mesa de Proyectos</title>
</head>
<body>
@include('header')
@include('sidebar') 
<div class="contenedor">
    
    <div class="proyectos">
        <div class="contenedor-cabezera">
        <h4 class="nombrecabeza">Proyectos en marcha</h4>
        <button class="crear_proyecto" id="proyecto_crear">Crear</button>
        </div>
        <div class="proyecto">
            <h6 class="nombreP">Nombre del proyecto</h6>
            <div class="contenedor-proyectos">
                  <div class="proyecto1" style="background-image: url('{{asset('img/fondo1.jpg') }}')">
                  <a href="#" class="titulo-proyecto"> Proposito</a>
        
            

                  </div>
                   
            </div>      
        </div>

        @foreach($dit as $single)
        <div class="proyecto">
            <h6 class="nombreP" id="">{{$single->nombre_proyecto}}</h6>
            <div class="contenedor-proyectos">
                  <div class="proyecto1" style="background-image: url('{{asset('img/fondo1.jpg') }}')">
                  <a href="/tarea/{{$single->id}}"  class="titulo-proyecto"> Proposito</a>
        
            

                  </div>
                   
            </div>      
        </div>

       @endforeach 
    </div>



    <div class="recientes">
        <h5>Eventos recientes</h5>
        <div class="reciente" style="background-image: url('{{asset('img/fondo2.jpg') }}')">
           <p class="titulo-proyecto">Me interesa</p>
        </div>
    </div>
    
</div>
    
<div class="modal_formulario" id="formulario_modal">

        
    <div class="contenedor_modal">
        <div class="componentes_modal">
        <form method="post" action="{{ route('proyecto.store') }}">
             @csrf
            <h3 class="titulo_modal">Formulario</h3>
            <p class="parrafo">Creando proyectos para luego asignar tareas, y cumplir con las metas propuestas...</p>
            <strong class="modal_formulario" id="strong">Nombre del proyecto:</strong>
            <input type="text" class="text_nombre" id="text_id" name="nombre_proyecto"></br>
            <Strong class="titulo_miembros" id="strong">Participantes:</Strong>
            <div class="check">
            
            <input type="text" id="miembro" name="miembros_proyecto" value="persona">
            </div>
            <div class="misbotones">
            <button type="submit" class="" id="misbotones">crear</button>
            <button class="cerrar" id="misbotones">cerrar</button> 
            </form>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="{{asset('js/tablero.js') }}"></script>
</body>
</html>