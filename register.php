<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="cadlog.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <form action="register.php" method="POST">
            <label for="full_name">Nome Completo:</label>
            <input type="text" id="full_name" name="full_name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="phone_number">Número de Telefone:</label>
            <input type="text" id="phone_number" name="phone_number" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
        <p>Já tem conta? <a href="login.php">Entre aqui</a></p>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include 'db.php';

            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            // Verificar se o número de telefone é válido
            if (!preg_match("/^\+?\d{1,4}?\s?\(?\d{1,3}?\)?\s?\d{1,4}\s?\d{1,4}\s?\d{1,9}$/", $phone_number)) {
                echo "Erro: Número de telefone inválido.";
            } else {
                // Verificar se o e-mail já existe
                $check_email = "SELECT * FROM usuarios WHERE email='$email'";
                $result = $conn->query($check_email);

                if ($result->num_rows > 0) {
                    echo "Erro: O e-mail já está em uso.";
                } else {
                    $sql = "INSERT INTO usuarios (full_name, email, phone_number, password) VALUES ('$full_name', '$email', '$phone_number', '$password')";

                    if ($conn->query($sql) === TRUE) {
                        header("Location: login.php");
                        exit();
                    } else {
                        echo "Erro: " . $sql . "<br>" . $conn->error;
                    }
                }
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
