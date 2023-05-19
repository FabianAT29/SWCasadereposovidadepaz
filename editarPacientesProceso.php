<?php
print_r($_POST);
if (!isset($_POST['codigo'])) {
    header('Location: ListadoPacientes.php?mensaje=error');
}

include_once 'model/conexion.php';
$codigo = $_POST["codigo"];
$nombre = $_POST["txtNombre"];
$apellidop = $_POST["txtApellidoP"];
$apellidom = $_POST["txtApellidoM"];
$fecha = $_POST["txtFecha"];
$dni = $_POST["txtDni"];
$edad = $_POST["txtEdad"];
$tipo = $_POST["comboboxServicio"];
$duracion = $_POST["txtDuracion"];

$sentencia = $bd->prepare("UPDATE pacientes SET nombre = ?, apellidop= ?,
apellidom = ?, fecha= ?, dni = ?, edad = ?, tipo = ?, duracion = ? WHERE codigo = ?;");
$resultado = $sentencia->execute([$nombre, $apellidop, $apellidom, $fecha, $dni, $edad, $tipo, $duracion, $codigo]);

if($resultado === TRUE){
    header('Location: ListadoPacientes.php?mensaje=editado');
}else{
    header('Location: ListadoPacientes.php?mensaje=error');
    exit();
} 

?>
