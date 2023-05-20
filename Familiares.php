<?php include 'template/headerFamiliares.php' ?>

<!-- inicio alertas -->

<!-- Alerta de Datos incompletos -->
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta') {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Datos Incompletos</strong>
        <br>Favor de completar todos los campos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<!-- Alerta de Paciente registrado-->
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Paciente Registrado</strong>
        <br>Los datos del paciente fueron registrados con exito.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<!-- Alerta de error al editar-->
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>
        <br>Vuelve a intentar.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<!-- Alerta de editado correctamente -->
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Se actualizo con exito</strong>
        <br>Los datos fueron editados con exito.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<!-- Alerta de eliminado correctamente-->
<?php
if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Se elimino con exito</strong>
        <br>Los datos fueron eliminados con exito.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<!-- fin de alertas-->
<h2 class="titulo">
    Bienvenido al módulo Familiares
</h2>

<div class="card-group">
    <div class="card">
        <img class="card-img-top" src="icons/person-plus.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Registrar Familiares</h5>
            <p class="card-text">En este apartado podrás registrar todos los datos de los familiares.</p>
            <a href="RegistroFamiliares.php" class="btn btn-primary">Ir a Registrar</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="icons/person-lines-fill.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Ver lista de Familiares</h5>
            <p class="card-text">En este apartado podrás ver el listado todos los familiares registrados.</p>
            <a href="ListadoFamiliares.php" class="btn btn-primary">Ir a ver la lista de Pacientes</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="icons/filetype-pdf.svg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Generar Reporte</h5>
            <p class="card-text">En este apartado podrás generar un reporte de todos los familiares registrados.</p>
            <a href="Fpdf/ReporteFamiliares.php" class="btn btn-primary" target="_blank">Ir generar Reporte</a>
        </div>
    </div>
</div>


<!--REDIRECIONAMIENTO PACIENTES
<div class="container display: flex align-items: center justify-content: center">
<a class="btn btn-success" type="button" href="RegistroFamiliares.php">Registrar Familiares</a>
<a class="btn btn-success" type="button" href="ListadoFamiliares.php">Listar Familiares</a>
<a class="btn btn-success" type="button" href="index.php">Volver al inicio</a>
</div>
REDIRECIONAMIENTO PACIENTES-->
<?php include 'template/footer.php' ?>