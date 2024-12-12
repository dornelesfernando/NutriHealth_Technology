<?php
    session_start();
    // Incluindo o arquivo de conexão 
    include_once('cadconexao.php'); 

    // Verificando se a conexão foi estabelecida 
    if ($conexao->connect_error) { die("Falha na conexão: " . $conexao->connect_error); }

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        include_once('cadconexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Acessou
        $sql = "SELECT * FROM login WHERE email='$email' and senha='$senha'";

        $result = $conexao->query($sql);

        if ($result && $result->num_rows < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ppi01.php');
        }
    } else {
        // Não acessou
        //echo "Não entrou";
    }
?>
