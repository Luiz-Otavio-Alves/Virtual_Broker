<?php require_once 'config.php'; ?>
	<?php 
		session_start();
			if (!$_SESSION['cadastrado']){
				header("Location:2.php");
					die;
					}else
						
					?>
	<?php require_once 'config.php'; ?>
	
	<?php include(HEADER_CADASTRO); ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3 col-md-2">
				<h3>Olá o cadastro foi realizado com sucesso!</h3>
	<?php include(FOOTER_SIMPlES); } ?>