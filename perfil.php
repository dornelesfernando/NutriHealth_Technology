<?php
include 'cadconexao.php';
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    header("Location: inicio.php");
    exit();
}

// Obter o email da sessão
$email = $_SESSION['email'];

// Buscar as informações do usuário no banco de dados
$sql = "SELECT nome, sobrenome, email, altura, peso, datanasc, artrite, artrose, osteoporose, constipacao, enjoo, vomitos, tonturas 
        FROM login 
        WHERE email = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();

// Redirecionar se não encontrar o usuário
if (!$usuario) {
    header("Location: inicio.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - NutriHealth Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./src/css/stylePerfil.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h2>Perfil do Usuário</h2>
        <div class="perfil-container">
            <div class="perfil-info">
                <strong>Nome:</strong> <?= htmlspecialchars($usuario['nome']) ?><br>
                <strong>Sobrenome:</strong> <?= htmlspecialchars($usuario['sobrenome']) ?><br>
                <strong>E-mail:</strong> <?= htmlspecialchars($usuario['email']) ?><br>
                <strong>Altura:</strong> <?= htmlspecialchars($usuario['altura']) ?> cm<br>
                <strong>Peso:</strong> <?= htmlspecialchars($usuario['peso']) ?> kg<br>
                <strong>Data de Nascimento:</strong> <?= htmlspecialchars($usuario['datanasc']) ?><br>
            </div>

            <h3>Condições de Saúde</h3>
            <div class="perfil-info">
                <strong>Artrite:</strong> <?= $usuario['artrite'] ? 'Sim' : 'Não' ?><br>
                <strong>Artrose:</strong> <?= $usuario['artrose'] ? 'Sim' : 'Não' ?><br>
                <strong>Osteoporose:</strong> <?= $usuario['osteoporose'] ? 'Sim' : 'Não' ?><br>
                <strong>Constipação:</strong> <?= $usuario['constipacao'] ? 'Sim' : 'Não' ?><br>
                <strong>Enjoo:</strong> <?= $usuario['enjoo'] ? 'Sim' : 'Não' ?><br>
                <strong>Vômitos:</strong> <?= $usuario['vomitos'] ? 'Sim' : 'Não' ?><br>
                <strong>Tonturas:</strong> <?= $usuario['tonturas'] ? 'Sim' : 'Não' ?><br>
            </div>
        </div> 
    </main>
</body>
</html>