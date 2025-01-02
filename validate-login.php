<?php
// validate-login.php

// Simulación de base de datos de usuarios (esto debe ser reemplazado con una base de datos real)
$usuarios = [
    'usuario1' => 'contraseña1',
    'usuario2' => 'contraseña2'
];

// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Validar las credenciales
if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
    // Si el login es correcto, redirigir al campus virtual
    header('Location: campus/campus-virtual.html');
    exit();
} else {
    // Si las credenciales no son válidas, mostrar un mensaje de error
    echo "Credenciales incorrectas. Intenta nuevamente.";
}
?>
