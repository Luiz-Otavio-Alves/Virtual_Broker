<?php require_once 'config.php'; ?>

<?php include(HEADER_LOGIN); ?>

<!--Importa bootstrap da minha pasta css-->
<!--Importa bootstrap da minha pasta css-->
<section class="div-login">
    <!--Acessar o arquivo logando.php após apertar o botão de login-->
    <div class="row">
        <div class="col-sm-4">
            <h3>Fazer login</h3><br>

            <form class="form-hero" action="logando.php" method="post">

                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário" required
                    value=<?php  if (isset($_COOKIE["id_usuario_c"])) {echo($_COOKIE["id_usuario_c"]);} else {echo "";}?>><br>
                <!--name=senha indica que o formulário tem uma variavel “senha”-->
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required
                    value=<?php if (isset($_COOKIE["senha_c"])) {echo($_COOKIE["senha_c"]);} else {echo "";}?>><br>
                <input type="checkbox" id="salvar_chave" name="salvar_chave" value="1"
                    <?php if (isset($_COOKIE["senha_c"])) {echo("checked");} else {echo "";}?>> Memorizar o usuário
                neste computador <br><br>
				<a href="#"><button class="site-btn">Login</button></a>
            </form>
        </div>
	

        <div class="col-sm-6" id="cadastrar-div">
            <h2>Não é cadastrado ainda?</h2><br>
            <h4>Faça seu seu cadastro para receber as nossas promoções</h4><br>
            <a href="cadastrar.php"><button class="site-btn">Cadastre-se</button></a>
        </div>
    </div>
</section>


<?php include(FOOTER_SIMPlES); ?>