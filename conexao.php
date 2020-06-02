<<<<<<< HEAD
<?php 
	$hostname = "mysql18-farm76.kinghost.net";
	$user = "testesluizotav";
	$password = "Luizao2019";
	$database = "testesluizotav";
	
	$conexao = mysqli_connect($hostname, $user, $password, $database);
	
	if(!$conexao){
		echo "Falha na conexao com o Banco de Dados!";
	}
=======
<?php 
	$hostname = "mysql18-farm76.kinghost.net";
	$user = "testesluizotav";
	$password = "Luizao2019";
	$database = "testesluizotav";
	
	$conexao = mysqli_connect($hostname, $user, $password, $database);
	
	if(!$conexao){
		echo "Falha na conexao com o Banco de Dados!";
	}
>>>>>>> 55d465aec2759ee4abfb8c5ef3ce68e700e1a43f
?>