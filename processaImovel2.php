<?php

session_start();
include_once './conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    //Receber os dados do formulário
    $nome_imagem = $_FILES['imagem']['name'];
	
	$id_Imovel = "SELECT AUTO_INCREMENT FROM information_schema.tables WHERE  table_name = 'imoveis' AND    table_schema = 'bd_corretorvirtual' ";
	
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $result_img = "INSERT INTO imagensImoveis (id_imovel, caminho, nome_imagem) VALUES ('$id_imovel', '/imagens', '$nome_imagem')";
    


    //Verificar se os dados foram inseridos com sucesso
    $insert_msg->execute();
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'imagens/' . $ultimo_id.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nome_imagem)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: cadastro_imovel.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
            header("Location: cadastro_imovel.php");
        }        
    }
 else {
    $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
    header("Location: cadastro_imovel.php");
}