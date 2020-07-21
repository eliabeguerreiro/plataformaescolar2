<?php

// Criar organizadores 

include("../conexao.php");
session_start();
error_reporting(E_ERROR | E_PARSE);
$sql = "SELECT * FROM `atividade-aluno`";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Rebidos Professor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="estilo-painel.css">
</head>
<body>
    <div class="junbotron container w-75 p-3">
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
        
    ?>
        <tr>
        <th scope="row"><?php
            echo $respostas['titulo'];
        ?></th>
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>

</body>
</html>
<?php



