<?php
include("../conexao.php");
session_start();
error_reporting(E_ERROR | E_PARSE);
$sql = "SELECT * FROM `atividade-aluno`";

//echo $sql;
$atividade = mysqli_fetch_array(mysqli_query($conn, $sql));
//var_dump($atividade);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Atividade</th>
      <th scope="col">Aluno</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Turma</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
<?php
$r = 100;
while($r != 0){
$sql = "SELECT * FROM `atividade-aluno` WHERE fila = " .$r. " AND disciplina = '" .$_SESSION['disciplina']. "'";
//echo $sql;               
       
if (mysqli_num_rows(mysqli_query($conn, $sql)) != 0){
    $respostas = mysqli_fetch_array(mysqli_query($conn, $sql));
    //var_dump($respostas);
    
?>
    <tr>
      <th scope="row"><?php
        echo $respostas['titulo'];
      ?></th>
      <td><?php
      ?></td>
      <td><?php
        echo $respostas['aluno'];
      ?></td>
      <td><?php
        echo $respostas['disciplina'];
      ?></td>
      <td><?php
        echo $respostas['turma'];
      ?></td>
      <td><?php
        echo '<a href='."'";
        echo $respostas['link'];
        echo "'".'>Dowload</a>';
      ?></td>
    </tr>
<?php
}
$r -=1;
//var_dump($rows);
//var_dump($r);
}
?>
</tbody>
</table>
<?php



