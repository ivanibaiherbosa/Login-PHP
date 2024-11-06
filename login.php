<?php
session_start();
if (isset($_POST['enviar'])) {
    $usuario = $_POST['inputUsuario'];
    $password = $_POST['inputPassword'];
    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña";
        include "index.php";
    } else {
        if ($usuario == "admin" && $password == "admin") {
            $_SESSION['usuario'] = $usuario;
            include "main.php"; 
        } else {
            $error = "Usuario o contraseña no válidos!";
            include "index.php";
        }
    }
} else {
    header("Location: index.php"); 
    exit();
}
