<?php include 'template/headerFamiliares.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from familiares");
$familiares = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($familiares);
?>

<div class="card">
    <div class="card-header">
        Lista de Familiares
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
                        <th scope="col">DNI</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">DNI Paciente</th>
                        <th scope="col" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($familiares as $dato) {


                    ?>

                        <tr class="">
                            <td scope="row"> <?php echo $dato->codigo; ?></td>
                            <td><?php echo $dato->nombre; ?></td>
                            <td><?php echo $dato->apellidop; ?></td>
                            <td><?php echo $dato->apellidom; ?></td>
                            <td><?php echo $dato->dni; ?></td>
                            <td><?php echo $dato->correo; ?></td>
                            <td><?php echo $dato->telefono; ?></td>
                            <td><?php echo $dato->dnipaciente; ?></td>
                            <td>
                                <a class="text-success" href="editarFamiliares.php?codigo=<?php echo $dato->codigo; ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('Estas seguro de eliminar')" class="text-danger" href="eliminarFamiliares.php?codigo=<?php echo $dato->codigo; ?>">
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
                <a class="btn btn-secondary" type="button" href="Familiares.php">Regresar al inicio</a>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>