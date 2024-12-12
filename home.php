<?php
	session_start();
    //print_r($_SESSION);
	if((!isset($_SESSION['email']) ==true) and (!isset($_SESSION['senha']) == true)){
		header('location: login.php');
		 unset($_SESSION['email']);
		 unset($_SESSION['senha']);
	}else{
		$logado=$_SESSION['email'];
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriHealth Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./src/css/styleMain.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- Seção principal -->
    <main>
        <section id="sobre" class="content-section">
            <div class="text-container">
                <h2>Bem-vindo ao NutriHealth Technology</h2>
                <p>Este site foi desenvolvido com o objetivo de proporcionar exercícios físicos e atividades adaptadas para a terceira idade, com foco no bem-estar e qualidade de vida. Navegue pelas seções para aprender mais e começar os exercícios!</p>
            </div>
            <div class="image-container">
                <img src="./src/img/all/imagem01.jpg" alt="Exercício para Idosos">
            </div>
        </section>

        <!-- Seção de Benefícios -->
        <div class="benefits-wrapper">
            <section id="beneficios" class="benefits-section">
                <div class="container">
                    <h2 class="section-title">Benefícios do NutriHealth Technology</h2>
                    <div class="benefits-grid">
                        <div class="benefit-item">
                            <img src="./src/img/all/imagem03.jpg" alt="Exercícios Físicos" class="benefit-image">
                            <h3>Exercícios Físicos Adaptados</h3>
                            <p>Oferecemos exercícios específicos para a terceira idade, focados em melhorar a mobilidade, o equilíbrio e a força, de forma segura e eficaz.</p>
                        </div>
                        <div class="benefit-item">
                            <img src="./src/img/all/imagem04.jpg" alt="Aconselhamento Nutricional" class="benefit-image">
                            <h3>Aconselhamento Nutricional</h3>
                            <p>Receba orientações nutricionais, focadas em uma alimentação equilibrada para melhorar a saúde e a energia no dia a dia.</p>
                        </div>
                        <div class="benefit-item">
                            <img src="./src/img/all/imagem05.jpg" alt="Suporte Personalizado" class="benefit-image">
                            <h3>Suporte Personalizado</h3>
                            <p>Conte com um acompanhamento contínuo, com sugestões personalizadas para o seu perfil, para otimizar os resultados dos exercícios e da alimentação.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 NutriHealth Technology</p>
    </footer>

</body>
</html>
