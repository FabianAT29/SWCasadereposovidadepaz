<?php
//print_r($_POST);
if (
    empty($_POST["oculto"])
    || empty($_POST["txtNombre"])
    || empty($_POST["txtApellidoP"])
    || empty($_POST["txtApellidoM"])
    || empty($_POST["txtFecha"])
    || empty($_POST["txtDni"])
    || empty($_POST["txtEdad"])
    || empty($_POST["comboboxServicio"])
    || empty($_POST["txtDuracion"])
) {

    header('Location: RegistroPacientes.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$nombre = $_POST["txtNombre"];
$apellidop = $_POST["txtApellidoP"];
$apellidom = $_POST["txtApellidoM"];
$fecha = $_POST["txtFecha"];
$dni = $_POST["txtDni"];
$edad = $_POST["txtEdad"];
$tipo = $_POST["comboboxServicio"];
$duracion = $_POST["txtDuracion"];

    $sentencia = $bd -> prepare("INSERT INTO pacientes (nombre, apellidop, apellidom,
    fecha, dni, edad, Tipo, duracion) VALUES (?,?,?,?,?,?,?,?)");
    $resultado = $sentencia->execute([$nombre,$apellidop,$apellidom,
    $fecha,$dni, $edad, $tipo, $duracion]);

    if ($resultado === TRUE) {
        header('Location: Pacientes.php?mensaje=registrado');
    } else {
        header('Location: RegistroPacientes.php?mensaje=error');
        exit();
    }
