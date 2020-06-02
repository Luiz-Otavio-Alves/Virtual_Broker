<<<<<<< HEAD
<?php require_once 'config.php'; ?>
<?php include(HEADER_CADASTRO); ?>
<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="container">
			<h2>Cadastro</h2>
				<nav class="site-breadcrumb">
					<a class="sb-item" href="#">Home</a>
					<span class="sb-item active">About us</span>
				</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- About Section end -->
	<section class="about-section spad">
		<div class="container">
		<h2> Cadastre-se </h2>
			<div class="row">
				<div class="col-md-12">
					<form action="processa.php" method="post">
					  <!-- area de campos do form -->
					  <hr />
					  <div class="row">
						<div class="col-md-7">
						  <label for="name">Nome / Razão Social</label>
						  <input type="text" class="form-control" name="nome">
						</div>

						<div class="form-group col-md-3">
						  <label for="campo2">CNPJ / CPF</label>
						  <input type="text" class="form-control" name="CPF_CNPJ">
						</div>

						<div class="form-group col-md-2">
						  <label for="campo3">Data de Nascimento</label>
						  <input type="date" class="form-control" name="nascimento">
						</div>
					  </div>
					  
					  <div class="row">
						<div class="form-group col-md-5">
						  <label for="campo1">Endereço</label>
						  <input type="text" class="form-control" name="endereco">
						</div>

						<div class="form-group col-md-3">
						  <label for="campo2">Bairro</label>
						  <input type="text" class="form-control" name="bairro">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo3">CEP</label>
						  <input type="text" class="form-control" name="cep">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo3">Data de Cadastro</label>
						  <input type="text" class="form-control" name="criacao" disabled>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="form-group col-md-3">
						  <label for="campo1">Município</label>
						  <input type="text" class="form-control" name="cidade">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo2">Telefone</label>
						  <input type="text" class="form-control" name="fone">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo3">Celular</label>
						  <input type="text" class="form-control" name="celular">
						</div>
						
						<div class="form-group col-md-1">
						  <label for="campo3">UF</label>
						  <input type="text" class="form-control" name="estado">
						</div>
						</div>
						

					  
					  <div class="row">
						<div class="col-md-6 form-group">
							<label for="campo3">Usuário</label>
						  <input type="text" class="form-control" name="usuario">
						</div>
						<div class="col-md-6 form-group">
							<label for="campo3">Senha</label>
						  <input type="password" class="form-control" name="senha">
						</div>
						</div>
					  
					  <div id="actions" class="row">
						<div class="col-md-12">
						  <button type="submit" class="site-btn">Salvar</button>
						  <a href="index.php" class="site-btn">Cancelar</a>
						</div>
					  </div>
					</form>
					
				</div>
			</div>
	</section>
=======
<?php require_once 'config.php'; ?>
<?php include(HEADER_CADASTRO); ?>
<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="container">
			<h2>Cadastro</h2>
				<nav class="site-breadcrumb">
					<a class="sb-item" href="#">Home</a>
					<span class="sb-item active">About us</span>
				</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- About Section end -->
	<section class="about-section spad">
		<div class="container">
		<h2> Cadastre-se </h2>
			<div class="row">
				<div class="col-md-12">
					<form action="processa.php" method="post">
					  <!-- area de campos do form -->
					  <hr />
					  <div class="row">
						<div class="col-md-7">
						  <label for="name">Nome / Razão Social</label>
						  <input type="text" class="form-control" name="nome">
						</div>

						<div class="form-group col-md-3">
						  <label for="campo2">CNPJ / CPF</label>
						  <input type="text" class="form-control" name="CPF_CNPJ">
						</div>

						<div class="form-group col-md-2">
						  <label for="campo3">Data de Nascimento</label>
						  <input type="date" class="form-control" name="nascimento">
						</div>
					  </div>
					  
					  <div class="row">
						<div class="form-group col-md-5">
						  <label for="campo1">Endereço</label>
						  <input type="text" class="form-control" name="endereco">
						</div>

						<div class="form-group col-md-3">
						  <label for="campo2">Bairro</label>
						  <input type="text" class="form-control" name="bairro">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo3">CEP</label>
						  <input type="text" class="form-control" name="cep">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo3">Data de Cadastro</label>
						  <input type="text" class="form-control" name="criacao" disabled>
						</div>
					  </div>
					  
					  <div class="row">
						<div class="form-group col-md-3">
						  <label for="campo1">Município</label>
						  <input type="text" class="form-control" name="cidade">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo2">Telefone</label>
						  <input type="text" class="form-control" name="fone">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo3">Celular</label>
						  <input type="text" class="form-control" name="celular">
						</div>
						
						<div class="form-group col-md-1">
						  <label for="campo3">UF</label>
						  <input type="text" class="form-control" name="estado">
						</div>
						</div>
						

					  
					  <div class="row">
						<div class="col-md-6 form-group">
							<label for="campo3">Usuário</label>
						  <input type="text" class="form-control" name="usuario">
						</div>
						<div class="col-md-6 form-group">
							<label for="campo3">Senha</label>
						  <input type="password" class="form-control" name="senha">
						</div>
						</div>
					  
					  <div id="actions" class="row">
						<div class="col-md-12">
						  <button type="submit" class="site-btn">Salvar</button>
						  <a href="index.php" class="site-btn">Cancelar</a>
						</div>
					  </div>
					</form>
					
				</div>
			</div>
	</section>
>>>>>>> 55d465aec2759ee4abfb8c5ef3ce68e700e1a43f
<?php include(FOOTER_SIMPlES); ?>