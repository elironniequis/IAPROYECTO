// Verificar si estamos en 'juego.php' antes de cargar las preguntas y ejecutar la lógica del juego
if (window.location.pathname.includes('juego.php')) {
    let preguntas = {}; // Almacenará las preguntas cargadas
    let preguntasAleatorias = []; // Arreglo para almacenar las preguntas barajadas

    // Hacemos la petición para cargar las preguntas desde preguntas.php
    fetch('preguntas.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al cargar las preguntas');
            }
            return response.json();
        })
        .then(data => {
            preguntas = data; // Guardamos las preguntas cargadas
            iniciarJuegoConCategoria(); // Iniciamos el juego con la categoría seleccionada
        })
        .catch(error => {
            console.error('Error al cargar las preguntas:', error);
            alert('No se han podido cargar las preguntas. Verifica la conexión o el archivo preguntas.php.');
        });

    let nivel = 1; // Nivel actual del juego
    let categoriaActual = ''; // Categoría seleccionada
    let respuestasCorrectas = 0; // Contador de respuestas correctas
    let totalPreguntas = 0; // Número total de preguntas en la categoría seleccionada

    // Función para obtener el parámetro de la URL
    function obtenerParametroURL(nombre) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(nombre);
    }

    // Función para barajar las preguntas
    function barajarPreguntas(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    // Función para iniciar el juego con la categoría seleccionada desde la URL
    function iniciarJuegoConCategoria() {
        const categoria = obtenerParametroURL('categoria');
        if (!categoria || !preguntas[categoria]) {
            alert('No hay preguntas disponibles para esta categoría.');
            return;
        }

        categoriaActual = categoria;
        preguntasAleatorias = barajarPreguntas([...preguntas[categoria]]); // Barajamos las preguntas
        iniciarJuego(categoria);
    }

    // Función para iniciar el juego
    function iniciarJuego(categoria) {
        nivel = 1;
        respuestasCorrectas = 0;
        totalPreguntas = preguntasAleatorias.length; // Calculamos el número total de preguntas barajadas
        document.getElementById('juego').style.display = 'block';
        document.getElementById('categoria-titulo').innerText = `Jugando en la categoría: ${categoria.charAt(0).toUpperCase() + categoria.slice(1)}`;
        mostrarPregunta();
    }

    // Función para mostrar la pregunta actual
    function mostrarPregunta() {
        const preguntaActual = preguntasAleatorias[nivel - 1];
        const opciones = [preguntaActual.a, preguntaActual.b, preguntaActual.c, preguntaActual.d];
        
        // Mezclamos las opciones de manera aleatoria
        opciones.sort(() => Math.random() - 0.5);

        // Mostramos la pregunta y las opciones en el HTML
        document.getElementById('pregunta').innerText = preguntaActual.q;
        document.getElementById('pregunta').classList.add('pregunta-animada'); // Agregar animación a la pregunta

        const botones = document.querySelectorAll('.opcion');
        botones.forEach((boton, index) => {
            boton.innerText = opciones[index];
            boton.disabled = false;
            boton.onclick = () => verificarRespuesta(boton); // Añadimos el evento onclick aquí
            boton.classList.remove('correcta', 'incorrecta'); // Quitamos clases previas
        });
        document.getElementById('nivel').innerText = `Nivel: ${nivel} / ${totalPreguntas}`;
        actualizarProgreso();
    }

    // Función para verificar la respuesta seleccionada por el usuario
    function verificarRespuesta(boton) {
        const respuestaSeleccionada = boton.innerText;
        const preguntaActual = preguntasAleatorias[nivel - 1];
        const botones = document.querySelectorAll('.opcion');

        // Deshabilitamos los botones para evitar seleccionar otra opción
        botones.forEach(btn => btn.disabled = true);

        if (respuestaSeleccionada === preguntaActual.a) {
            respuestasCorrectas++; // Incrementamos las respuestas correctas
            boton.classList.add('correcta'); // Marcamos la opción correcta
        } else {
            boton.classList.add('incorrecta'); // Marcamos la opción incorrecta
            botones.forEach(btn => {
                if (btn.innerText === preguntaActual.a) {
                    btn.classList.add('correcta'); // Marcamos la respuesta correcta
                }
            });
        }

        // Avanzamos a la siguiente pregunta después de 2 segundos
        setTimeout(() => {
            if (nivel < totalPreguntas) {
                nivel++; // Avanzamos al siguiente nivel
                mostrarPregunta(); // Mostramos la siguiente pregunta
            } else {
                finalizarJuego(); // Finalizamos el juego si se acabaron las preguntas
            }
        }, 2000);
    }

    // Función para finalizar el juego y redirigir al resultado
    function finalizarJuego() {
        // Redirigimos a resultado.php pasando el número de respuestas correctas y el total de preguntas
        window.location.href = `resultado.php?correctas=${respuestasCorrectas}&total=${totalPreguntas}`;
    }

    // Función para actualizar la barra de progreso
    function actualizarProgreso() {
        const progreso = (nivel / totalPreguntas) * 100;
        document.getElementById('barra').style.width = `${progreso}%`;
    }

    // Función para volver al menú principal
    function volverAlMenu() {
        window.location.href = 'index.php'; // Redirige al usuario al menú principal
    }
}
