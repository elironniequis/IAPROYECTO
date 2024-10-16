<?php include 'header.php'; ?> <!-- Incluimos el header -->

<div class="container text-center mt-5">
    <h1>¡Felicitaciones!</h1>
    <p class="lead">Has completado el cuestionario.</p>
    <h3 id="resultado-mensaje"></h3>
    <p id="resultado-detalle"></p>
    <a href="index.php" class="btn btn-primary mt-4">Volver al menú principal</a>
</div>


<script>
    // Obtenemos los parámetros de la URL para mostrar los resultados
    const urlParams = new URLSearchParams(window.location.search);
    const correctas = parseInt(urlParams.get('correctas'));
    const total = parseInt(urlParams.get('total'));

    // Calculamos el porcentaje de aciertos
    const porcentaje = (correctas / total) * 100;

    // Generamos un mensaje basado en el número de respuestas correctas
    let mensaje = '';
    if (correctas === total) {
        mensaje = "¡Increíble! Has acertado todas las preguntas. ¡Eres un genio!";
    } else if (correctas >= Math.floor(total * 0.8)) {
        mensaje = "¡Excelente! Has hecho un gran trabajo. ¡Sigue así!";
    } else if (correctas >= Math.floor(total * 0.6)) {
        mensaje = "¡Buen trabajo! Lo hiciste bien, pero aún puedes mejorar.";
    } else if (correctas >= Math.floor(total * 0.4)) {
        mensaje = "No está mal, pero puedes intentarlo de nuevo para mejorar.";
    } else if (correctas > 0) {
        mensaje = "¡Bien! Al menos acertaste algunas, ¡sigue practicando!";
    } else {
        mensaje = "¡No te desanimes! La práctica te hará mejorar. ¡Inténtalo de nuevo!";
    }

    // Actualizamos los elementos en la página para mostrar el resultado
    document.getElementById('resultado-mensaje').innerText = mensaje;
    document.getElementById('resultado-detalle').innerText = `Respondiste correctamente ${correctas} de ${total} preguntas.`;
</script>
