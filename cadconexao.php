<?php
    // cadconexao.php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = ''; // Insira a senha correta, se houver
    $dbname = 'siteppi1';
    $port = 3306; // Utilize a porta correta do MySQL

    $conexao = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $port);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }else{
        //echo "Conexão realizada com sucesso!";
    }
?>
