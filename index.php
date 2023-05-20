<?php include 'template/header.php' ?>

<h2 class="titulo">
    Bienvenido al Sistema de Casa de Reposo Vida de Paz
</h2>
<div class="card-group">
    <div class="card">
        <img class="card-img-top" src="icons/person-plus.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Módulo Pacientes</h5>
            <p class="card-text">En este apartado podrás registrar, listar y generar un reporte de todos los pacientes.</p>
            <a href="Pacientes.php" class="btn btn-primary">Ir al Módulo</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="icons/person-lines-fill.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Módulo Familiares</h5>
            <p class="card-text">En este apartado podrás registrar, listar y generar un reporte de todos los familiares.</p>
            <a href="Familiares.php" class="btn btn-primary">Ir al Módulo</a>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>