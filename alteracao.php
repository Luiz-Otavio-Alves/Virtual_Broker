<?php require_once('config.php');?>
<?php include(HEADER_HOME); ?>
<?php
	include_once('conexao.php');
	$result_usuario = "SELECT * FROM clientes c INNER JOIN imagens i ON c.id = i.id WHERE c.id = ".$_SESSION['id'];
	$resultado_usuario = mysqli_query($conexao,$result_usuario);
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);
	/*$row_usuario = $resultado_usuario->fetch_all(MYSQLI_ASSOC);*/
	/*value="<?php echo $row_usuario['nome'];?>*/
 ?>
    <section class="page-top-section set-bg" data-setbg="https://mundomidia.com/FOTO_NOTICIA/95555788701215836526_como-montar-uma-imobiliaria-virtual-online.jpg">
        <div class="container">
            <h2>Perfil</h2>
            <nav class="site-breadcrumb">
            </nav>
			<?php echo '<img id="fotoperfil" src='.$row_usuario['caminho'].' alt="'.$row_usuario['nome_imagem'].'" /><br><strong><h2>'?>
        </div>
    </section>
	
<div class="container">
	<div class="row">
		<div class="col-md-3">
		 
		</div>
		<div class="col-md-5" style="padding-top:1%; padding-bottom:1%;">
			<ul class="nav navbar-nav">
			<?php echo '<li><input type="text" class="ulalter" id="ulalte" value=" '.$row_usuario['nome'].'"></li>';
				echo '<li>CPF <input class="ulalter" value=" '.$row_usuario['CPF_CNPJ'].'"></li>';
				echo '<li>Data de Aniversário <input class="ulalter" value=" '.$row_usuario['nascimento'].'"></li>';
				echo '<li>Endereço <input class="ulalter" value=" '.$row_usuario['endereco'].', '.$row_usuario['bairro'].'"></li>';
				echo '<li>Cidade <input class="ulalter" value=" '.$row_usuario['cidade'].', '.$row_usuario['estado'].'"></li>';
			?>
			</ul>
		</div>
		<div class="col-md-4" style="padding-top:2%;">
		<a href="#"><button class="butarea1">Editar Perfil</button></a>
		<?php echo '<br><li>Nome de usuário <input type="text" class="ulalter" value=" '.$row_usuario['usuario'].'"></li>';
			?>
	</div>
</div>


<section class="review-section spad" id="corcom">
        <div class="container">
		<h6 style="color:white; text-align:center; font-size: 250%;">Interesses</h6>
            <div class="row">
                <div class="col-lg-3 col-sm-6" style="border:1px solid #f43f00; border-radius: 15px;">
                    <div class="review-item" style="padding-bottom: 20px;">
                        <div class="rating">
                            <img src="imagens/casa1.jpg" alt="">
                        </div>
                        <h6>Casa de luxo</h6>
                        <h8 style="color:white; font-size:14px;">R$ 2.000.000,00</h8>
                        <p>Casa de Luxo em São Paulo em bairro nobre. Vizinhaça tranquila e favorável, aceeitamos trocas como complemento de valor no negócio.</p>
                        <a href="#"><button class="butarea1">Ver mais!</button></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" style="border:1px solid #f43f00; border-radius: 15px;">
                    <div class="review-item" style="padding-bottom: 20px;">
                    <div class="rating">
                            <img src="imagens/casa2.jpg" alt="">
                        </div>
                        <h6>Chácara com piscina</h6>
                        <h8 style="color:white; font-size:14px;">R$ 500.000,00</h8>
                        <p>Chácara no município de Botelhos. Ótimos acabamentos, construída a pouco tempo e com único propietário. Preço bom e abaixo do valor.</p>
                        <a href="#"><button class="butarea1">Ver mais!</button></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" style="border:1px solid #f43f00; border-radius: 15px;">
                    <div class="review-item" style="padding-bottom: 20px;">
                    <div class="rating">
                            <img src="imagens/casa3.jpg" alt="">
                        </div>
                        <h6>Casa Nova</h6>
                        <h8 style="color:white; font-size:14px;">R$ 250.000,00</h8>
                        <p>Residência em Poços de Caldas com preço bom. Localizada no Jardim Primavera, lugar tranquilo e sem incomodações.</p>
                            <a href="#"><button class="butarea1">Ver mais!</button></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" style="border:1px solid #f43f00; border-radius: 15px;">
                    <div class="review-item " style="padding-bottom: 20px;">
                    <div class="rating">
                            <img src="imagens/casa4.jpg" alt="">
                        </div>
                        <h6>Mansão em condomínio</h6>
                        <h8 style="color:white; font-size:14px;">R$ 1.200.000,00</h8>
                        <p>Mansão localizada em condomínio fechado em Poços de Caldas localizado próximo à Puc Minas. Local com alta segurança e tranquilidade.</p>
                        <a href="#"><button class="butarea1">Ver mais!</button></a>
                    </div>
                </div>
            </div>
        </div><hr>
        </div>
    </section>

<!-- importacao do Footer da pagina-->
<?php include(FOOTER_TEMPLATE); ?>