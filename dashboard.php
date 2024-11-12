<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<body>

<h2>Bem-vindo ao Dashboard</h2>
<p>Aqui você pode ver suas informações privadas.</p>
<a href="logout.php">Sair</a>

</body>
</html>
