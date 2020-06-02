<?php require_once 'config.php'; ?>
<?php include(HEADER_LOGIN); ?>
<?php 
	include_once("conexao.php");
	$id_cliente=$_SESSION['id'];
	$endereco_imovel=$_POST['endereco_imovel'];
	$bairro_imovel=$_POST['bairro_imovel'];
	$tamanho_imovel=$_POST['tamanho_imovel'];
	$preco_imovel = $_POST['preco_imovel'];
	$descricao_imovel=$_POST['descricao_imovel'];
	$tipo_imovel=$_POST['tipo_imovel'];
	$nome_imagem=$_POST['nome_imagem'];

	$sql = "INSERT INTO imoveis (id,endereco_imovel,bairro_imovel,tamanho_imovel,preco_imovel,descricao_imovel,tipo_imovel) VALUES ('$id_cliente','$endereco_imovel','$bairro_imovel','$tamanho_imovel','$preco_imovel','$descricao_imovel','$tipo_imovel')";
	
	$sqlRecuperaId = "SELECT AUTO_INCREMENT FROM information_schema.tables WHERE  table_name = 'imoveis' AND    table_schema = 'bd_corretorvirtual' ";
	
	$sqlImagensImoveis = "INSERT INTO imagensImoveis (id_imovel,caminho,nome_imagem) VALUES ('$sqlRecuperaId','imagens/','$nome_imagem')";
	
	$salvar = mysqli_query($conexao,$sql);
	$salvarImagensImoveis = mysqli_query($conexao,$sqlImagensImoveis);
	
	
	if(isset($_FILES['arquivo'])){
		
	}
	
	
	$mysqlImg = $_FILES["name"];
	$diretorio = "C:/xampp/htdocs/CorretorVirtualNovo/imagens/";			
	move_uploaded_file($_FILES["tmp_name"], $diretorio.$mysqlImg);
	
	$linhas = mysqli_affected_rows($conexao);
	
	mysqli_close($conexao);
?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<h2>Cadastro Confirmado!</h2>
			<?php
				if($linhas == 1){
					echo "<span> Cadastro realizado com sucesso! </span>";
				}else{
					echo "<span> Cadastro NÃO efetuado! Verifique as informações inseridas! </span>";
				}
			?>
			</nav>
		</div>
	</section>
<?php include(FOOTER_SIMPlES); ?>
