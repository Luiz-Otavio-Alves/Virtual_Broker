<?php
require_once('config.php');
include(HEADER_TEMPLATE);
/*require_once('functions.php');
verifica_login();*/
function add() {
  if (!empty($_POST['nome'])) { 
    $hoje = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	$database = new mysqli("localhost","root","","bd_corretorvirtual");
	mysqli_set_charset($database, "utf8");
	$nome=utf8_decode($_POST['nome']);
	$CPF_CNPJ=utf8_decode($_POST['CPF_CNPJ']);
	$nascimento=utf8_decode($_POST['nascimento']);
	$endereco=utf8_decode($_POST['endereco']);
	$bairro=utf8_decode($_POST['bairro']);
	$cep=utf8_decode($_POST['cep']);
	$cidade=utf8_decode($_POST['cidade']);
	$fone=utf8_decode($_POST['fone']);
	$celular=utf8_decode($_POST['celular']);
	$estado=utf8_decode($_POST['estado']);
	$criacao=$hoje->format("Y-m-d H:i:s");
	$modificado=$hoje->format("Y-m-d H:i:s");
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	
	$sql="UPDATE clientes SET nome = '$nome', CPF_CNPJ = '$CPF_CNPJ', nascimento = '$nascimento', endereco = '$endereco', bairro = '$bairro', cep = '$cep', cidade = '$cidade', fone = '$fone', modificado = '$modificado', usuario = '$usuario', senha = '$senha', WHERE nome = '$nome'";
	
	
	$_SESSION['message'] = $sql."<BR>".'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
    $database->query($sql);    	
    mysqli_close($database);	
    header('location: index.php');
  }
}
add();

?>
    <section class="page-top-section set-bg" data-setbg="img/about.png">
        <div class="container">
            <h2>Bem vindo ao site</h2>
            <nav class="site-breadcrumb">
                
                <span class="sb-item active">Sobre Nós</span>
            </nav>
        </div>
    </section>
<div class="container">

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="nome" value="<?php echo $nome?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="CPF_CNPJ">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="nascimento">
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
    <div class="form-group col-md-4">
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
    
    <div class="form-group col-md-2">
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
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
  </div>
</form>

<!-- importacao do Footer da pagina-->
<?php include(FOOTER_TEMPLATE); ?>