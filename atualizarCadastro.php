<?php
include_once('cadconexao.php');
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    header("Location: inicio.php");
    exit();
}

// Obter o email da sessão
$email = $_SESSION['email'];

// Escapar o valor do email para evitar injeção de SQL
$email = mysqli_real_escape_string($conexao, $email);

// Busca os dados atuais do usuário
$result = mysqli_query($conexao, "SELECT * FROM login WHERE email = '$email'");
$usuario = mysqli_fetch_assoc($result);

if (!$usuario) {
    die("Usuário não encontrado!");
}

// Atualiza os dados no banco de dados
if (isset($_POST['submit'])) {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $altura = mysqli_real_escape_string($conexao, $_POST['altura']);
    $peso = mysqli_real_escape_string($conexao, $_POST['peso']);
    $datanasc = mysqli_real_escape_string($conexao, $_POST['datanasc']);
    $artrite = mysqli_real_escape_string($conexao, $_POST['artrite']);
    $artrose = mysqli_real_escape_string($conexao, $_POST['artrose']);
    $osteoporose = mysqli_real_escape_string($conexao, $_POST['osteoporose']);
    $constipacao = mysqli_real_escape_string($conexao, $_POST['constipacao']);
    $enjoo = mysqli_real_escape_string($conexao, $_POST['enjoo']);
    $vomitos = mysqli_real_escape_string($conexao, $_POST['vomitos']);
    $tonturas = mysqli_real_escape_string($conexao, $_POST['tonturas']);

    $update = mysqli_query($conexao, 
        "UPDATE login SET 
        nome = '$nome', 
        sobrenome = '$sobrenome', 
        email = '$email', 
        senha = '$senha', 
        altura = '$altura', 
        peso = '$peso', 
        datanasc = '$datanasc', 
        artrite = '$artrite', 
        artrose = '$artrose', 
        osteoporose = '$osteoporose', 
        constipacao = '$constipacao', 
        enjoo = '$enjoo', 
        vomitos = '$vomitos', 
        tonturas = '$tonturas' 
        WHERE email = '$email'"
    );

    if ($update) {
        header("Location: perfil.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./src/css/styleCadastro.css">
</head>
<body>
    <h4>Atualizar Cadastro</h4>
    <form method="POST" action="" class="cadastro-container">
        <h5>Informações Pessoais</h5>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($usuario['nome']) ?>" required>

        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?= htmlspecialchars($usuario['sobrenome']) ?>" required>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="<?= htmlspecialchars($usuario['senha']) ?>" required>

        <h5>Informações Físicas</h5>
        <label for="altura">Altura (em cm)</label>
        <input type="number" name="altura" id="altura" value="<?= htmlspecialchars($usuario['altura']) ?>" required>

        <label for="peso">Peso (em kg)</label>
        <input type="number" name="peso" id="peso" value="<?= htmlspecialchars($usuario['peso']) ?>" required>

        <label for="datanasc">Data de Nascimento</label>
        <input type="date" name="datanasc" id="datanasc" value="<?= htmlspecialchars($usuario['datanasc']) ?>" required>

        <h5>Condições de Saúde</h5>
        <label for="artrite">Artrite</label>
        <select name="artrite" id="artrite">
            <option value="1" <?= $usuario['artrite'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$usuario['artrite'] ? 'selected' : '' ?>>Não</option>
        </select>

        <label for="artrose">Artrose</label>
        <select name="artrose" id="artrose">
            <option value="1" <?= $usuario['artrose'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$usuario['artrose'] ? 'selected' : '' ?>>Não</option>
        </select>

        <label for="osteoporose">Osteoporose</label>
        <select name="osteoporose" id="osteoporose">
            <option value="1" <?= $usuario['osteoporose'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$usuario['osteoporose'] ? 'selected' : '' ?>>Não</option>
        </select>

        <label for="constipacao">Constipação</label>
        <select name="constipacao" id="constipacao">
            <option value="1" <?= $usuario['constipacao'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$usuario['constipacao'] ? 'selected' : '' ?>>Não</option>
        </select>

        <label for="enjoo">Enjoo</label>
        <select name="enjoo" id="enjoo">
            <option value="1" <?= $usuario['enjoo'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$usuario['enjoo'] ? 'selected' : '' ?>>Não</option>
        </select>

        <label for="vomitos">Vômitos</label>
        <select name="vomitos" id="vomitos">
            <option value="1" <?= $usuario['vomitos'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$usuario['vomitos'] ? 'selected' : '' ?>>Não</option>
        </select>

        <label for="tonturas">Tonturas</label>
        <select name="tonturas" id="tonturas">
            <option value="1" <?= $usuario['tonturas'] ? 'selected' : '' ?>>Sim</option>
            <option value="0" <?= !$usuario['tonturas'] ? 'selected' : '' ?>>Não</option>
        </select>

        <div class="row center-align">
            <button type="submit" name="submit" id="submit" class="btn waves-effect waves-light blue">Cadastrar</button>
        </div>
    </body>
</html>