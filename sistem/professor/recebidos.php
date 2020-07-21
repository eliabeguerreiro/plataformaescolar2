<?php
include("../conexao.php");
session_start();
error_reporting(E_ERROR | E_PARSE);
$sql = "SELECT * FROM `atividade-aluno`";

//echo $sql;
$atividade = mysqli_fetch_array(mysqli_query($conn, $sql));
//var_dump($atividade);

$r = 100;
while($r != 0){
$sql = "SELECT * FROM `atividade-aluno` WHERE fila = " .$r. " AND disciplina = '" .$_SESSION['disciplina']. "'";
//echo $sql;               
       
if (mysqli_num_rows(mysqli_query($conn, $sql)) != 0){
    $respostas = mysqli_fetch_array(mysqli_query($conn, $sql));
    //var_dump($respostas);
    echo('Atividade:'.$respostas['titulo'].' | Aluno:'.$respostas['aluno'].' | Disciplina'.$respostas['disciplina'].' | Turma:'.$$respostas['turma'].'<br><a href=');
    echo("'".$respostas['link']."'>Dowload</a><br>");
}
$r -=1;
//var_dump($rows);
//var_dump($r);
}
