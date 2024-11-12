<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'login_sistema';  // Substitua pelo seu nome de banco de dados

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
