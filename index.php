<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Sistema</title>
</head>
<body>

<h2>Bem-vindo ao Sistema</h2>

<?php
if (isset($_SESSION['usuario_id'])) {
    echo "<p>Você está logado. <a href='dashboard.php'>Ir para o Dashboard</a></p>";
} else {
    echo "<p><a href='login.php'>Login</a> | <a href='register.php'>Cadastro</a></p>";
}
?>

</body>
</html>
