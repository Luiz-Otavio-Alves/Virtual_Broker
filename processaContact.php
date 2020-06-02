<?php 
	include_once("conexao.php");
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];
	
	$sql = "INSERT INTO contatos (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";
	$salvar = mysqli_query($conexao,$sql);
	
	mysqli_close($conexao);
?>
<?php require_once 'config.php'; ?>
<?php include(HEADER_LOGIN); ?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<h2>Mensagem Enviada!</h2>
		</div>
	</section>
<?php include(FOOTER_SIMPlES); ?>
