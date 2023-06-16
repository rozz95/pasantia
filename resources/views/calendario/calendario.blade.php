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
                events: {
                    url: calendarioShowUrl,
                    method: 'GET',
                    success: function(response) {
                        var eventos = response.map(function(evento) {
                            return {
                                title: evento.title,
                                start: evento.start,
                                end: evento.end
                            };
                        });
                        return eventos;
                    }
                }
            });
            calendar.setOption('locale', 'Es');
            calendar.render();
        });
    </script>
    <title>Calendario</title>
</head>
<body>
    <div id="calendar"></div>
</body>
</html>

