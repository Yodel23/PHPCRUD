<?php
if (isset($_POST['enviar'])) {
    $usuario = $_POST['inputUsuario'];
    $password = $_POST['inputPassword'];

    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña";
        include "indexExterno.php";
    } else {
        if ($usuario == "admin" && $password == "admin") {
            session_start();
            $_SESSION['usuario'] = $usuario;
            include "main.php";
        } else {
            $error = "Usuario o contraseña no válidos!";
            include "indexExterno.php";
        }
    }
}