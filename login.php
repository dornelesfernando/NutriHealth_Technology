<?php
// Processamento do login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Simulação de verificação de login bem-sucedido
    $login_sucesso = true; // Aqui você faria a verificação real no banco de dados

    // Exemplo de resposta (isso poderia ser mais elaborado dependendo do sistema)
    if ($login_sucesso) {
        $mensagem_login = "Login bem-sucedido!";
    } else {
        $mensagem_login = "E-mail ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="./src/css/styleLogin.css">
</head>
<body>
    <!-- Formulário de login -->
    <div class="login-container">
        <h2><i class="fa fa-user"></i> Login</h2>

        <form action="testlogin.php" method="POST">
            <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
            <input type="email" name="email" id="email" required>

            <label for="senha"><i class="fa fa-lock"></i> Senha</label>
            <input type="password" name="senha" id="senha" required>

            <input class="inputsubmit" type="submit" name="submit" value="Entrar">
        </form>

        <div class="form-footer">
            <p>Ainda não tem uma conta? <a href="cadastro.php"><i class="fa fa-user-plus"></i> Cadastre-se</a></p>
        </div>
    </div>

</body>
</html>
