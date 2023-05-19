<?php
print_r($_POST);
if (!isset($_POST['codigo'])) {
    header('Location: ListadoFamiliares.php?mensaje=error');
}

include_once 'model/conexion.php';
$codigo = $_POST["codigo"];
$nombre = $_POST["txtNombre"];
$apellidop = $_POST["txtApellidoP"];
$apellidom = $_POST["txtApellidoM"];
$dni = $_POST["txtDni"];
$correo = $_POST["txtEmail"];
$telefono = $_POST["txtTelefono"];
$dnipaciente = $_POST["txtDniPaciente"];

$sentencia = $bd->prepare("UPDATE familiares SET nombre = ?, apellidop= ?,
apellidom = ?, dni= ?, correo = ?, edad = ?, telefono = ?, dnipaciente = ? WHERE codigo = ?;");
$resultado = $sentencia->execute([$nombre, $apellidop, $apellidom, $dni, $dni, $correo, $telefono, $dnipaciente, $codigo]);

if($resultado === TRUE){
    header('Location: ListadoFamiliares.php?mensaje=editado');
}else{
    header('Location: ListadoFamiliares.php?mensaje=error');
    exit();
} 

?>
