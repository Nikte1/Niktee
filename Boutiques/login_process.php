<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'nikte' && $password == '123') {
    $_SESSION['user_id'] = 1; // Asigna una sesión ficticia
    header("Location: index11.php");
} else {
    echo "Usuario o contraseña incorrectos. <a href='login.php'>Intentar de nuevo</a>";
}
?>