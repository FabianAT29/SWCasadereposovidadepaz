<?php
//print_r($_POST);
if (
    empty($_POST["oculto"])
    || empty($_POST["txtNombre"])
    || empty($_POST["txtApellidoP"])
    || empty($_POST["txtApellidoM"])
    ||empty($_POST["txtDni"])
    || empty($_POST["txtEmail"])
    || empty($_POST["txtTelefono"])
    || empty($_POST["txtDniPaciente"])
) {

    header('Location: Familiares.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$nombre = $_POST["txtNombre"];
$apellidop = $_POST["txtApellidoP"];
$apellidom = $_POST["txtApellidoM"];
$dni = $_POST["txtDni"];
$correo = $_POST["txtEmail"];
$telefono = $_POST["txtTelefono"];
$dnipaciente = $_POST["txtDniPaciente"];

    $sentencia = $bd -> prepare("INSERT INTO familiares (nombre, apellidop, apellidom,
    dni, correo, telefono, dnipaciente) VALUES (?,?,?,?,?,?,?)");
    $resultado = $sentencia->execute([$nombre,$apellidop,$apellidom,
    $dni,$correo, $telefono, $dnipaciente]);

    if ($resultado === TRUE) {
        header('Location: Familiares.php?mensaje=registrado');
    } else {
        header('Location: Familiares.php?mensaje=error');
        exit();
    }
