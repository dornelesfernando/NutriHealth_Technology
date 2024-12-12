<?php
include_once('cadconexao.php');
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

    $result = mysqli_query($conexao, "INSERT INTO login(nome, sobrenome, email, senha, altura, peso, datanasc, artrite, artrose, osteoporose, constipacao, enjoo, vomitos, tonturas) 
    VALUES ('$nome', '$sobrenome', '$email', '$senha', '$altura', '$peso', '$datanasc', '$artrite', '$artrose', '$osteoporose', '$constipacao', '$enjoo', '$vomitos', '$tonturas')");

    if ($result) {
        header("Location: inicio.php");
        exit();
    } else {
        //echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleCadastro.css">
</head>
<body>
    <!-- Formulário de cadastro -->
    <h4>Cadrasto</h4>
    <form method="POST" action="" class="cadastro-container">

        <!-- Informações Pessoais -->
        <h5>Informações Pessoais</h5>
        <div class="row">
            <div class="input-field col s12">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="validate" required>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" class="validate" required>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="validate" required>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="validate" required>
            </div>
        </div>

        <!-- Informações Físicas -->
        <h5>Informações Físicas</h5>
        <div class="row">
            <div class="input-field col s12">
                <label for="altura">Altura (em cm)</label>
                <input type="number" name="altura" id="altura" class="validate" required>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="peso">Peso (em kg)</label>
                <input type="number" name="peso" id="peso" class="validate" required>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="datanasc">Data de Nascimento</label>
                <input type="date" name="datanasc" id="datanasc" class="validate" required>
            </div>
        </div>

        <!-- Condições de Saúde -->
        <h5>Condições de Saúde</h5>
        <div class="row">
            <div class="input-field col s12">
                <label for="artrite">Artrite (Sim/Não)</label>
                <select name="artrite" id="artrite" class="validate" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="artrose">Artrose (Sim/Não)</label>
                <select name="artrose" id="artrose" class="validate" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="osteoporose">Osteoporose (Sim/Não)</label>
                <select name="osteoporose" id="osteoporose" class="validate" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="constipacao">Constipação (Sim/Não)</label>
                <select name="constipacao" id="constipacao" class="validate" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="enjoo">Enjoo (Sim/Não)</label>
                <select name="enjoo" id="enjoo" class="validate" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="vomitos">Vômitos (Sim/Não)</label>
                <select name="vomitos" id="vomitos" class="validate" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <label for="tonturas">Tonturas (Sim/Não)</label>
                <select name="tonturas" id="tonturas" class="validate" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row center-align">
            <button type="submit" name="submit" id="submit" class="btn waves-effect waves-light blue">Cadastrar</button>
        </div>
    </form>

    <div class="form-footer">
        <p>Já tem uma conta? <a href="ppi01.php">Faça login</a></p>
    </div>
</body>
</html>