<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario Quechua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container mt-5">
    <h3 class="text-center">Diccionario Completo de Palabras en Quechua</h3>

    <div class="row mt-4">
        <!-- Números en Quechua -->
        <h4 class="text-center">Números</h4>
        <?php
            $numeros = [
                "Huk" => "Uno",
                "Iskay" => "Dos",
                "Kimsa" => "Tres",
                "Tawa" => "Cuatro",
                "Phichqa" => "Cinco",
                "Suqta" => "Seis",
                "Qanchis" => "Siete",
                "Pusaq" => "Ocho",
                "Isqon" => "Nueve",
                "Chunka" => "Diez"
            ];

            foreach ($numeros as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>

    <div class="row mt-4">
        <!-- Animales en Quechua -->
        <h4 class="text-center">Animales</h4>
        <?php
            $animales = [
                "Allqu" => "Perro",
                "Atuq" => "Zorro",
                "Kuntur" => "Cóndor",
                "Misi" => "Gato",
                "Puma" => "Puma",
                "Unu" => "Agua",
                "Llama" => "Llama",
                "Atoq" => "Zorro",
                "Ch'iwchi" => "Pájaro",
                "K'uchi" => "Cerdo"
            ];

            foreach ($animales as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>

    <div class="row mt-4">
        <!-- Colores en Quechua -->
        <h4 class="text-center">Colores</h4>
        <?php
            $colores = [
                "Puka" => "Rojo",
                "Yuraq" => "Blanco",
                "Q'ellu" => "Amarillo",
                "Anqas" => "Azul",
                "Ch'umpi" => "Marrón",
                "Qomer" => "Verde",
                "K'ulli" => "Violeta",
                "Ñawi" => "Negro",
                "Pinti" => "Rosa",
                "K'uychi" => "Arcoíris"
            ];

            foreach ($colores as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>

    <div class="row mt-4">
        <!-- Verbos en Quechua -->
        <h4 class="text-center">Verbos</h4>
        <?php
            $verbos = [
                "Wasiq" => "Construir",
                "Rikuy" => "Ver",
                "Rimay" => "Hablar",
                "Kuyuy" => "Dar",
                "Wachay" => "Nacer",
                "Ñawi" => "Ver",
                "Sumaq" => "Bonito",
                "Chay" => "Ese",
                "Inti" => "Sol"
            ];

            foreach ($verbos as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>

    <div class="row mt-4">
        <!-- Frutas en Quechua -->
        <h4 class="text-center">Frutas</h4>
        <?php
            $frutas = [
                "Sumaq" => "Fresa",
                "Intiq" => "Limón",
                "Chicha" => "Maíz",
                "Uva" => "Uva",
                "Limon" => "Lima",
                "Pukllay" => "Grosella",
                "Sankay" => "Papaya",
                "Ch'iri" => "Fruta",
                "P'itu" => "Piña",
                "Yachay" => "Tamarindo"
            ];

            foreach ($frutas as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>

    <div class="row mt-4">
        <!-- Familia en Quechua -->
        <h4 class="text-center">Familia</h4>
        <?php
            $familia = [
                "Wawa" => "Hijo",
                "Tayta" => "Padre",
                "Mama" => "Madre",
                "Sumaq" => "Bonita",
                "Amachay" => "Hermano",
                "Ñaña" => "Hermana",
                "Tayticha" => "Papá",
                "Mamaq" => "Abuela",
                "K'uychi" => "Amigo"
            ];

            foreach ($familia as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>

    <div class="row mt-4">
        <!-- Frases en Quechua -->
        <h4 class="text-center">Frases en Quechua</h4>
        <?php
            $frases = [
                "Rimaykullayki" => "Hola",
                "Añay" => "Gracias",
                "Kusikuy" => "Por favor",
                "Tupananchiskama" => "Adiós"
            ];

            foreach ($frases as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>

    <div class="row mt-4">
        <!-- Acciones en Quechua -->
        <h4 class="text-center">Acciones</h4>
        <?php
            $acciones = [
                "Munayta pukllay" => "Me gusta jugar",
                "Munayta mikhuy" => "Me gusta comer",
                "Munayta tusuy" => "Me gusta bailar",
                "Munayta taki" => "Me gusta cantar",
                "Munayta llank'ay" => "Me gusta trabajar",
                "Munayta puñuy" => "Me gusta dormir",
                "Munayta muyuy" => "Me gusta correr",
                "Munayta yachay" => "Me gusta estudiar"
            ];

            foreach ($acciones as $quechua => $espanol) {
                echo "
                <div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$espanol}</h5>
                            <p class='card-text'>{$quechua}</p>
                            <button class='btn btn-primary' onclick='speak(\"{$quechua}\")'>Escuchar</button>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
    </div>
</div>
<!-- Botón para volver al menú -->
<div class="text-center mb-4">
    <button class="btn btn-secondary" onclick="volverAlMenu()">Volver al Menú</button>
</div>

<?php include 'footer.php'; ?> <!-- Incluimos el footer -->

<!-- Scripts necesarios -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript para controlar la síntesis de voz -->
<script>
    function speak(text) {
        if ('speechSynthesis' in window) {
            var utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'es-ES'; // Usamos el español porque no hay soporte nativo para quechua
            utterance.pitch = 1; // Tonalidad normal
            utterance.rate = 1; // Velocidad normal
            utterance.volume = 1; // Volumen máximo
            
            // Reproducimos la voz
            window.speechSynthesis.speak(utterance);
        } else {
            alert("Tu navegador no soporta la síntesis de voz.");
        }
    }
    function volverAlMenu() {
    window.location.href = 'index.php'; // Redirige al menú principal
}

</script>
</body>
</html>
