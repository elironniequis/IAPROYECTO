<?php include 'header.php'; ?> <!-- Incluimos el header -->

<div class="container text-center mt-5">
    <h2 id="categoria-titulo">Juego de Preguntas</h2>
    <div id="juego" class="mt-5">
        <div class="card p-3">
            <h2 id="pregunta" class="card-title"></h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-lg opcion mb-3" onclick="verificarRespuesta(this)"></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-lg opcion mb-3" onclick="verificarRespuesta(this)"></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-lg opcion mb-3" onclick="verificarRespuesta(this)"></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-lg opcion mb-3" onclick="verificarRespuesta(this)"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nivel y barra de progreso -->
        <div id="nivel" class="mt-3"></div>
        <div class="progress mt-4">
            <div id="barra" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        
    </div>
    <!-- Botón para volver al menú -->
    <div class="mt-4">
        <button class="btn btn-secondary" onclick="volverAlMenu()">Volver al Menú</button>
    </div>
    
</div>

<?php include 'footer.php'; ?> <!-- Incluimos el footer -->

<!-- Lógica de JavaScript -->
<script src="script.js"></script>
