<?php
session_start();
include("../conexao.php");
var_dump($_POST);
var_dump($_SESSION);

$mac =  "SELECT titulo FROM `atividade-prof` WHERE id = '" .$_POST['atividade']. "'";
$mach = mysqli_fetch_array(mysqli_query($conn, $mac));
//var_dump($mach);


$fil =  "SELECT max(fila) FROM `atividade-aluno`";
$fila = mysqli_fetch_array(mysqli_query($conn, $fil));
var_dump($fila);
$fila['max(fila)'] +=1;


$sql = "INSERT INTO `atividade-aluno` VALUES ('" .$mach['titulo']. "', '" .$_POST['link']. "', '" .$_SESSION['dados-aluno']['cod-turma']. "', '" .$_SESSION['nome']. "', '" .$_SESSION['disciplina']. "', '" .$fila['max(fila)']. "')";
echo $sql;
if (mysqli_query($conn, $sql)){
    $_SESSION['msg']='Enviado com Sucesso';
    header("Location: index.php?area=painel-disciplina");
}else{
    echo"deu negado";
}