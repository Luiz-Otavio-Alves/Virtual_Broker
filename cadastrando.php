<?php

session_start();
   $_SESSION['cadastrado'] = true;
   
   header("Location: cadastrando.php");
   
 
?>