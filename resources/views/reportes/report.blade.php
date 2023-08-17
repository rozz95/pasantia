<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css'  href="{{asset('css/report.css') }}">
    <title>Report</title>
</head>
<body>
@include('header')
@include('sidebar') 
<div class="generalContenedor">
    <div class="contenedorMayor">
    <h4>Reportes de tareas</h4>
    
    <div class="contenedorMenor">
        
        <form action="">
            <label for="" class="info">Reportes especificos</label><br>
            <strong>Elija un usuario</strong><br>
            @foreach($users as $user)
             <input type="checkbox" id="miCheckbox{{ $user->id }}" name="userReporte[]" value="{{ $user->email }}">
              <label for="miCheckbox{{ $user->id }}">{{ $user->email }}</label><br>
            @endforeach 
            
             <strong>Seleccione el tipo de reporte:</strong><br>
             <select name="reporte_periodo" id="">
                <option value="baja">Reporte semanal</option>
                <option value="media">Reporte por mes</option>
                <option value="alta">Reporte anual</option>
                <input type="submit" class="" id="" value="Generar reporte" >
        </form>

    </div>
    </div>
</div>
   
</body>
</html>