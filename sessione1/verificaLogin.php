<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'admin') {
    session_start();
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
} else {
    header('Location: errore.php');
}
