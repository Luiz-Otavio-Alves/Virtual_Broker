<?php
/*inicialização da sessão (função session_start)*/
session_start();

$conn = new mysqli("mysql18-farm76.kinghost.net", "testesluizotav", "Luizao2019", "testesluizotav");
$sql = "select * from clientes where usuario='" .$_POST['usuario']."' and senha='".$_POST['senha']."'";

$result = $conn->query($sql);

/*verifico as variáveis de usuario e senha passadas pelo formulario */
if ($result->num_rows > 0) {
	$result = $result->fetch_all(MYSQLI_ASSOC);        
   /*define a variavel de sessão logado como true (verdadeiro) */
   $_SESSION['logado'] = true;  
   $_SESSION['nome']=$result[0]['nome'];
   $_SESSION['id']=$result[0]['id'];
   header("location:alteracao.php");
   if ((isset($_POST['salvar_chave'])) && ($_POST['salvar_chave']==1)) {
	    /*setcookie define um cookie - o tempo é definido em segundos*/
		setcookie("id_usuario_c", $_POST['usuario'] , time()+(60*60*24*365));
		setcookie("senha_c", $_POST['senha'], time()+(60*60*24*365));
   } else {
		echo("teste");
		setcookie ("id_usuario_c", "", time() - 3600);
		setcookie ("senha_c", "", time() - 3600);
		//reseta cookie(navegador)
		//unset($_COOKIE["user"]); -- não funciona direito - ver por quê.
		// destrói cookie(servidor)		
   }
	   
}
/*se nao aparece usuários e senha incorretos*/
else
{
   echo 'Usuário e/ou Senha incorretos <BR>';   
} 
?>