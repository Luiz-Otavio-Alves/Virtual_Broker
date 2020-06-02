<<<<<<< HEAD
<?php 
	include_once("conexao.php");
	$hoje = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	$nome=$_POST['nome'];
	$CPF_CNPJ=$_POST['CPF_CNPJ'];
	$nascimento=$_POST['nascimento'];
	$endereco=$_POST['endereco'];
	$bairro=$_POST['bairro'];
	$cep=$_POST['cep'];
	$cidade=$_POST['cidade'];
	$fone=$_POST['fone'];
	$celular=$_POST['celular'];
	$estado=$_POST['estado'];	
	$criacao=$hoje->format("Y-m-d H:i:s");
	$modificado=$hoje->format("Y-m-d H:i:s");
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	
	$sql = "INSERT INTO clientes (nome,CPF_CNPJ,nascimento,endereco,bairro,cep,cidade,fone,celular,estado,criacao,modificado,usuario,senha) VALUES ('$nome','$CPF_CNPJ','$nascimento','$endereco','$bairro','$cep','$cidade','$fone','$celular','$estado','$criacao','$modificado', '$usuario', '$senha')";
	$salvar = mysqli_query($conexao,$sql);
	
	$linhas = mysqli_affected_rows($conexao);
	
	mysqli_close($conexao);
?>
<?php require_once 'config.php'; ?>
<?php include(HEADER_LOGIN); ?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<h2>Cadastro Confirmado!</h2>
			<?php
				if($linhas == 1){
					echo "<span>Cadastro realizado com sucesso!</span>";
				}else{
					echo "<span> Cadastro NÃO efetuado! Já existe um usuário com esse email. </span>";
				}
			?>
			</nav>
		</div>
	</section>
<?php include(FOOTER_TEMPLATE); ?>
=======
<?php 
	include_once("conexao.php");
	$hoje = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	$nome=$_POST['nome'];
	$CPF_CNPJ=$_POST['CPF_CNPJ'];
	$nascimento=$_POST['nascimento'];
	$endereco=$_POST['endereco'];
	$bairro=$_POST['bairro'];
	$cep=$_POST['cep'];
	$cidade=$_POST['cidade'];
	$fone=$_POST['fone'];
	$celular=$_POST['celular'];
	$estado=$_POST['estado'];	
	$criacao=$hoje->format("Y-m-d H:i:s");
	$modificado=$hoje->format("Y-m-d H:i:s");
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	
	$sql = "INSERT INTO clientes (nome,CPF_CNPJ,nascimento,endereco,bairro,cep,cidade,fone,celular,estado,criacao,modificado,usuario,senha) VALUES ('$nome','$CPF_CNPJ','$nascimento','$endereco','$bairro','$cep','$cidade','$fone','$celular','$estado','$criacao','$modificado', '$usuario', '$senha')";
	$salvar = mysqli_query($conexao,$sql);
	
	$linhas = mysqli_affected_rows($conexao);
	
	mysqli_close($conexao);
?>
<?php require_once 'config.php'; ?>
<?php include(HEADER_LOGIN); ?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<h2>Cadastro Confirmado!</h2>
			<?php
				if($linhas == 1){
					echo "<span>Cadastro realizado com sucesso!</span>";
				}else{
					echo "<span> Cadastro NÃO efetuado! Já existe um usuário com esse email. </span>";
				}
			?>
			</nav>
		</div>
	</section>
<?php include(FOOTER_TEMPLATE); ?>
>>>>>>> 55d465aec2759ee4abfb8c5ef3ce68e700e1a43f
