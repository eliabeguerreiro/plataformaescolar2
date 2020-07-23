<?php
session_start();
include("../conexao.php");
var_dump($_POST);
var_dump($_SESSION);
//UPDATE `plataformaescolar2`.`dados-aluno` SET `cpf` = 'teste' WHERE (`id` = '1');
//conexão funcional e tal mas tem que mudar ai em baixo pra update
$sql = "INSERT INTO `dados-aluno`(`nome`,`cpf`,`mae`,`cep`,`rua`,`cidade`,`email`,`telefone`) VALUES ('" .$_POST['nome']. "', '" .$_POST['cpf']. "', '" .$_POST['mae']. "', '" .$_POST['telefone']. "', '" .$_POST['email']. "', '" .$_POST['rua']. "', '" .$_POST['cep']. "', '" .$_POST['cidade']. "')";
echo $sql;
if (mysqli_query($conn, $sql)){
    $_SESSION['msg']='Enviado com Sucesso';
    //header("Location: index.php?area=dados");
    echo'<br>'."deu certo pae";
}else{
    echo'<br>'."deu negado";
}
