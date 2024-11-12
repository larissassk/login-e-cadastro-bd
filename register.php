<?php
session_start();
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Verifica se o email já existe
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $erro = "Este email já está registrado.";
    } else {
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senha);
        if ($stmt->execute()) {
            $_SESSION['sucesso'] = "Conta criada com sucesso!";
            header("Location: login.php");
            exit();
        } else {
            $erro = "Erro ao criar conta. Tente novamente.";
        }
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadlog.css">
</head>

<body>
    <?php if (isset($erro)) {
        echo "<p style='color:red;'>$erro</p>";
    } ?>
    <form method="POST" action="">
        <h2>Cadastro de Novo Usuário</h2>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit" name="register">Cadastrar</button>
    </form>

</body>

</html>