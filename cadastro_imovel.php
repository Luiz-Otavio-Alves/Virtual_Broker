<?php require_once 'config.php'; ?>
<?php include(HEADER_ABOUT); ?>
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="container">
			<h2>Cadastro</h2>
				<nav class="site-breadcrumb">
					<a class="sb-item" href="#">Home</a>
					<span class="sb-item active">About us</span>
				</nav>
		</div>
	</section>
		
	
		<section class="about-section spad">
		<div class="container">
		<h2> Cadastre-se </h2>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
			<div class="row">
				<div class="col-md-12">
					<form action="processaImovel2.php" method="post" enctype="multipart/form-data">
					  <!-- area de campos do form -->
					  <hr />
					  <div class="row">
						<div class="col-md-7">
						  <label for="name">Endereço/Lougradouro com Nº</label>
						  <input type="text" class="form-control" name="endereco_imovel">
						</div>

						<div class="form-group col-md-3">
						  <label for="campo2">Bairro</label>
						  <input type="text" class="form-control" name="bairro_imovel">
						</div>

						<div class="form-group col-md-2">
						  <label for="campo3">Área do Imóvel</label>
						  <input type="text" class="form-control" name="tamanho_imovel">
						</div>
					  </div>
					  
					  <div class="row">
						<div class="form-group col-md-2">
						  <label for="campo1">Valor Imóvel</label>
						  <input type="text" class="form-control" name="preco_imovel">
						</div>
						
						<div class="form-group col-md-2">
						  <label for="campo3">Operação do Imóvel</label>
						 
						  <select id="op" onChange="update()"	>
							  <option value="venda">Venda</option>
							  <option value="locacao">Locação</option>
							</select>
							 <input type="hidden" id="value" >
							 <input type="hidden" id="text" name="tipo_imovel">
						</div>
							<script type="text/javascript">
								function update() {
									var select = document.getElementById('op');
									var option = select.options[select.selectedIndex];

									document.getElementById('value').value = option.value;
									document.getElementById('text').value = option.text;
								}

								update();
							</script>
						
						<div class="form-group col-md-4">
						  <label for="imagem">Imagem</label>
						  <input type="file" name="nome_imagem">
						</div>
						
						<div class="form-group col-md-4">
						  <label for="campo2">Descrição do Imóvel</label>
						  <textarea type="text" class="form-control" name="descricao_imovel"></textarea>
						</div>
						
					  
					  <div id="actions" class="row">
						<div class="col-md-12">
						  <button name="SendCadImg" type="submit" class="site-btn">Salvar</button>
						  <a href="index.php" class="site-btn">Cancelar</a>
						</div>
					  </div>
					</form>
					
				</div>
			</div>
	</section>
<?php include(FOOTER_TEMPLATE); ?>