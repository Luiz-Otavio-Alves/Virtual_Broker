<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Virtual Broker | Home</title>
    <meta charset="UTF-8">
    <meta name="description" content="loans HTML Template">
    <meta name="keywords" content="loans, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="shortcut icon" />

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/prettyPhoto.css" >
	<link rel="stylesheet" href="css/animate.min.css" >

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
        <div class="loader"></div>
    </div>

    <!--Anti Header-->
    <section class="section-anti-header">
        <h8><img src="img/email.png" alt=""> contato@virtualbroker.com.br</h8>
        <h9 class="parag"><img src="img/telefone.png" alt=""> (35) 9 9898 - 9520</h9>
        <a class="parag3" href="https://whatsapp.com/"><img src="img/whatsappl.png"></a>
        <a class="parag1" href="https://www.facebook.com/"><img src="img/facebook.png" /></a>
        <a class="parag2" href="https://www.instagram.com/?hl=pt-br"><img src="img/instagram.png" /></a>
    </section>

    <!-- Header Section -->
    <header class="header-section">
        <a href="index.php" class="site-logo">
            <img src="img/logo.png" alt="Página Inicial" title="Página Inicial">
        </a>
        <nav class="header-nav"> 
            <div id="divBusca">
                <input type="text" id="txtBusca" placeholder="O que você procura?"/>
                <button id="btnBusca"><img src="img/search-icon.png" alt="Buscar..."/></button>
              </div>
            <ul class="main-menu">
                <li class="active"><a href="about-us.php">Sobre nós</a></li>
                <li><a href="news.php">Destaques</a></li>
				<?php 
					if(isset($_SESSION['logado']) && $_SESSION['logado']==true){
						echo "<li><a href='#'> Imóveis </a>
									<ul class='sub-menu'>
										<li><a href='compra.php'>Compra</a></li>
										<li><a href='cadastro_Imovel.php'>Venda</a></li>
										<li><a href='locacao.php'>Locação</a></li>
									</ul>
							  </li>";
					}
				?>
            </ul>
            <div class="header-right">
                <a href="contact.php" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Entre em contato!</a>
				<div class="hr-btn hr-btn-2">Área do Cliente<br>
					<?php
						if(isset($_SESSION['logado']) && $_SESSION['logado']==true){
							echo '<a href="#" >'.$_SESSION["nome"];
							echo '<br><a href="alteracao.php">Editar Perfil</a>';	
							echo '<br><a href="deslogando.php">Sair</a>';							
						}else{
							echo '<a href="login.php"><button class="butarea">Entrar</button></a>';
						}
						
					?>
				</div>
			</div>
		</nav>
	</header>