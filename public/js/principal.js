
          function drag(event)
          {
            event.dataTransfer.setData('text', event.target.id)}


            function allowDrop(event)
          {event.preventDefault()}


          function drop(event) {
            event.preventDefault();
            const data = event.dataTransfer.getData('text');
            const containerId = event.currentTarget.id;
            const idTarea = document.getElementById(data).id;
        
            // Aquí puedes obtener el nuevo estado de la tarea según el contenedor en el que se soltó
            let nuevoEstado;
            switch (containerId) {
                case 'completados':
                    nuevoEstado = 'completados';
                    break;
                case 'procesos':
                    nuevoEstado = 'procesos';
                    break;
                case 'pendientes':
                    nuevoEstado = 'pendientes';
                    break;
                default:
                    nuevoEstado = '';
                    break;
            }
        
            // Obtén el token CSRF desde la página
            const csrfToken = $('meta[name="csrf-token"]').attr('content');
        
            // Envía la solicitud AJAX utilizando jQuery para cambiar el estado de la tarea en la base de datos
            $.ajax({
                url: '/cambiar-estado-tarea',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data: {
                    _token: csrfToken,
                    idTarea: idTarea,
                    nuevoEstado: nuevoEstado
                },
                success: function(response) {
                    // Maneja la respuesta del servidor si es necesario
                },
                error: function(xhr, status, error) {
                    // Maneja el error si ocurre algún problema
                }
            });
        
            event.currentTarget.appendChild(document.getElementById(data));
        }
        