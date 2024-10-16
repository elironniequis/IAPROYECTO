<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Preguntas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'header.php'; ?> <!-- Incluimos el header -->

<div class="container text-center mt-5">
    <h3 class="text-center" style="font-size: 2.5rem; color: #ff6b6b;">Selecciona una Categoría</h3>

    <div id="menu" class="mt-4">
        <!-- Primera fila -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=numeros'" style="cursor: pointer; background: linear-gradient(135deg, #FF9A9E, #FECFEF);">
                    <img src="images/numeros.jpg" class="card-img-top" alt="Números">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Números</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=animales'" style="cursor: pointer; background: linear-gradient(135deg, #A1C4FD, #C2E9FB);">
                    <img src="images/animales.jpg" class="card-img-top" alt="Animales">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Animales</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=colores'" style="cursor: pointer; background: linear-gradient(135deg, #FBC2EB, #A6C1EE);">
                    <img src="images/colores.jpg" class="card-img-top" alt="Colores">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Colores</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda fila -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=verbos'" style="cursor: pointer; background: linear-gradient(135deg, #C2FFD8, #A1C4FD);">
                    <img src="images/verbos.jpg" class="card-img-top" alt="Verbos">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Verbos</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=frutas'" style="cursor: pointer; background: linear-gradient(135deg, #FFC371, #FF5F6D);">
                    <img src="images/frutas.jpg" class="card-img-top" alt="Frutas">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Frutas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=familia'" style="cursor: pointer; background: linear-gradient(135deg, #FF9A9E, #FAD0C4);">
                    <img src="images/familia.jpg" class="card-img-top" alt="Familia">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Familia</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tercera fila (Frases en Quechua y Acciones) -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=frases_quechua'" style="cursor: pointer; background: linear-gradient(135deg, #A1C4FD, #C2E9FB);">
                    <img src="images/frases_quechua.jpg" class="card-img-top" alt="Frases en Quechua">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Frases en Quechua</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='juego.php?categoria=acciones'" style="cursor: pointer; background: linear-gradient(135deg, #FDC830, #F37335);">
                    <img src="images/acciones.jpg" class="card-img-top" alt="Acciones">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Acciones</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fila para el diccionario en Quechua -->
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <div class="card" onclick="window.location.href='diccionario_quechua.php'" style="cursor: pointer; background: linear-gradient(135deg, #FF9A9E, #FECFEF);">
                    <img src="images/diccionario.jpg" class="card-img-top" alt="Diccionario Quechua">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2A9D8F;">Diccionario en Quechua</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?> <!-- Incluimos el footer -->

<!-- Scripts necesarios -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
