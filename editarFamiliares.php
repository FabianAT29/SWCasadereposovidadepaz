<?php include 'template/headerFamiliares.php' ?>

<?php
if (!isset($_GET['codigo'])) {
    header('Location: ListadoFamiliares.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("select * from familiares where codigo = ?;");
$sentencia->execute([$codigo]);
$familiares = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($familiares);
?>

<div class="contair mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-edit">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarFamiliaresProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" name="txtApellidoP" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" name="txtApellidoM" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DNI: </label>
                        <input type="number" class="form-control" name="txtDni" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo Electronico: </label>
                        <input type="email" class="form-control" name="txtEmail" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="tel" class="form-control" name="txtTelefono" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DNI Paciente: </label>
                        <input type="number" class="form-control" name="txtDniPaciente" autofocus>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $familiares->codigo; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>