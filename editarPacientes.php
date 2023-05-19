<?php include 'template/headerPacientes.php' ?>

<?php
if (!isset($_GET['codigo'])) {
    header('Location: ListadoPacientes.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("select * from pacientes where codigo = ?;");
$sentencia->execute([$codigo]);
$paciente = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($paciente);
?>

<div class="contair mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarPacientesProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required value="<?php echo $paciente->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" name="txtApellidoP" autofocus required value="<?php echo $paciente->apellidop; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" name="txtApellidoM" autofocus required value="<?php echo $paciente->apellidom; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="txtFecha" autofocus required value="<?php echo $paciente->fecha; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DNI: </label>
                        <input type="number" class="form-control" name="txtDni" autofocus required value="<?php echo $paciente->dni; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required value="<?php echo $paciente->edad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo de Servicio: </label>
                        <select class="form-select" name="comboboxServicio" autofocus required>
                            <!--<option selected></option>-->
                            <option value="Días">Días</option>
                            <option value="Semana">Semanas</option>
                            <option value="Meses">Meses</option>
                            <option value="Permanente">Permanente</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Duración: </label>
                        <input type="text" class="form-control" name="txtDuracion" autofocus require value="<?php echo $paciente->duracion; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $paciente->codigo; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>