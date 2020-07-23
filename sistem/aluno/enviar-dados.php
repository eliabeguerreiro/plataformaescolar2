<?php
session_start();
include("../conexao.php");
//var_dump($_POST);
//var_dump($_SESSION);
//UPDATE `plataformaescolar2`.`dados-aluno` SET `cpf` = 'teste' WHERE (`id` = '1');
//conexão funcional e tal mas tem que mudar ai em baixo pra update


$sql = "UPDATE `plataformaescolar2`.`dados-aluno` SET `nome` = '" .$_POST['nome']. "', `cpf` =  '" .$_POST['cpf']. "', `mae` =  '" .$_POST['mae']. "', `cep` =  '" .$_POST['cep']. "', `rua` = '" .$_POST['rua']. "', `cidade` =  '" .$_POST['cidade']. "', `email` =  '" .$_POST['email']. "', `telefone` = '" .$_POST['telefone']. "' WHERE (`matricula` = '" .$_SESSION['matricula']. "')";
//echo $sql;

if (mysqli_query($conn, $sql)){
    $_SESSION['msg']='Dados Alterados com Sucesso';
    header("Location: index.php?area=dados");
    
}else{
    $_SESSION['msg']='Falha ao Alterar Dados';
    header("Location: index.php?area=dados");
}
