<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>
       var calendarioShowUrl = "{{ url('/calendario/tareas') }}";

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: function(fetchInfo, successCallback, failureCallback) {
            fetch(calendarioShowUrl)
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    var eventos = data.map(function(evento) {
                        return {
                            title: evento.title,//tarea nombre
                            start: evento.start,//fecha inicio tarea
                            end: evento.end,//fecha fin tarea
                            color: getRandomColor()// color de la tarea
                        };
                    });
                    successCallback(eventos);
                })
                .catch(function(error) {
                    failureCallback(error);
                });
        }
    });
    calendar.setOption('locale', 'Es');
    calendar.render();
});
/*esta funcion ayuda a generar un color aletorio para las tareas*/ 
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

    </script>
    <title>Calendario</title>
</head>
<body>
@include('header')

@include('sidebar') 
<div class="container">
    <div id="calendar"></div>
    </div>
    <style>
        *{
         margin: 0;
           padding: 0;
           box-sizing: border-box;
           font-family: 'Poppins',sans-serif;
         }
        body{
            display:grid;
            
        }
    </style>
</body>
</html>

