<<<<<<< HEAD
<?php //* require_once chama os arquivos definidos previamente */?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; // reparem que estou chamando a constante DBAPI que eu defini no arquivo config anteriormente.?> 

<?php 
	//$db define uma variavel, que recebe a conexao retornada pela funçao open_database */
	$db = open_database(); 
	
	if ($db) {
		echo '<h1>CONECTADO AO BANCO!</h1>';
	} else {
		echo '<h1>ERRO: USUÁRIO E SENHA INCORRETOS!</h1>';
	}
=======
<?php //* require_once chama os arquivos definidos previamente */?>
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; // reparem que estou chamando a constante DBAPI que eu defini no arquivo config anteriormente.?> 

<?php 
	//$db define uma variavel, que recebe a conexao retornada pela funçao open_database */
	$db = open_database(); 
	
	if ($db) {
		echo '<h1>CONECTADO AO BANCO!</h1>';
	} else {
		echo '<h1>ERRO: USUÁRIO E SENHA INCORRETOS!</h1>';
	}
>>>>>>> 55d465aec2759ee4abfb8c5ef3ce68e700e1a43f
?>