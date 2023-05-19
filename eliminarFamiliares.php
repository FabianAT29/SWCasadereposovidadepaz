<?php 
    if(!isset($_GET['codigo'])){
        header('Location: ListadoFamiliares.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM familiares where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: ListadoFamiliares.php?mensaje=eliminado');
    } else {
        header('Location: ListadoFamiliares.php?mensaje=error');
    }
    
?>