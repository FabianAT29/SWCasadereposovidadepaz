<?php 
    if(!isset($_GET['codigo'])){
        header('Location: ListadoPacientes.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM pacientes where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: ListadoPacientes.php?mensaje=eliminado');
    } else {
        header('Location: ListadoPacientes.php?mensaje=error');
    }
    
?>