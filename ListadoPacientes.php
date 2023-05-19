<?php include 'template/headerPacientes.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from pacientes");
$pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($pacientes);
?>

<div class="card">
    <div class="card-header">
        Lista de Pacientes
    </div>
    <div class="p-4">
        <div class="table align-middle">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Tipo de Servicio</th>
                        <th scope="col">Duración</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($pacientes as $dato) {


                    ?>

                        <tr class="">
                            <td scope="row"> <?php echo $dato->codigo; ?></td>
                            <td><?php echo $dato->nombre; ?></td>
                            <td><?php echo $dato->apellidop; ?></td>
                            <td><?php echo $dato->apellidom; ?></td>
                            <td><?php echo $dato->fecha; ?></td>
                            <td><?php echo $dato->dni; ?></td>
                            <td><?php echo $dato->edad; ?></td>
                            <td><?php echo $dato->Tipo; ?></td>
                            <td><?php echo $dato->duracion; ?></td>
                            <td>
                                <a class="text-success" href="editarPacientes.php?codigo=<?php echo $dato->codigo; ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('Estas seguro de eliminar')" class="text-danger" href="eliminarPacientes.php?codigo=<?php echo $dato->codigo; ?>">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="d-grid">
                <a href="Fpdf/ReportePacientes.php" target="_blank" class="btn btn-info">Generar Reportes</a>
                <br>
                <a class="btn btn-secondary" type="button" href="Pacientes.php">Regresar al inicio</a>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>