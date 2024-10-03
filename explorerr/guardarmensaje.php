<?php
session_start();
include "conexion.php"; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
        $_SESSION['usuario'] = trim($_POST['usuario']);
    } else {
        if (!isset($_SESSION['usuario'])) {
            $_SESSION['usuario'] = "Anonimo";
        }
    }

    if (isset($_SESSION['usuario']) && !empty($_POST['mensaje'])) {
        $usuario = $_SESSION['usuario'];
        $mensaje = trim($_POST['mensaje']);
        $sql = "INSERT INTO blog (usuario, mensaje) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ss", $usuario, $mensaje);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "Error al preparar la consulta: " . $conn->error;
        }
    } else {
        echo "El mensaje no puede estar vacío.";
    }
}
header("Location: index.php"); 
exit();
?>
