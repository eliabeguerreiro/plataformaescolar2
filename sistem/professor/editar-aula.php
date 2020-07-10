<?php

include("../conexao.php");
session_start();
//var_dump($_POST);

$c = isset($_GET['c'])? $_GET['c'] : 'nao';

if($c == 'sim'){
    //var_dump($_POST);    
    $sql = "UPDATE `aulas` SET `titulo` = '" .$_POST['titulo']. "',
     `disciplina` = '" .$_POST['disciplina']. "', `turma` = '" .$_POST['turma']. "',
      `video1` = '" .$_POST['video1']. "', `video2` = '" .$_POST['video2']. "',
       `video3` = '" .$_POST['video3']. "', `video4` = '" .$_POST['video4']. "', `material` = '" .$_POST['material']. "', `atividade` = '" .$_POST['atividade']. "',
        `texto` = '" .$_POST['detalhes']. "', `fila` = '" .$_POST['numero']. "' WHERE id = '" .$_SESSION['id']. "'";
    mysqli_query($conn, $sql);
    echo $sql;
    header("Location: index.php");

}
if(isset($_GET['id'])? $_GET['id'] : '#'){}
$pg = $_GET['id'];
$_SESSION['id'] = $pg;
//var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Professor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="../../estilo-painel.css">
    </head>
    <center>

    <body>
        <?php 

            $sql = "SELECT * FROM aulas WHERE id = ".$pg."   ";
            //echo($sql);
            $aula = mysqli_fetch_array(mysqli_query($conn, $sql));
            //var_dump($aula);
 
        ?>

        <div class='alert alert-warning' role='alert'>
            Caso não queira editar um campo basta deixa-lo em branco!
        </div>

        <form method="POST" action="?c=sim">
            <label>Título da Aula:</label><br>
            <input type="name" value="<?php echo$aula['titulo'];?>" name="titulo" placeholder="<?php echo$aula['titulo'];?>"><br>
            <label>Disciplina:</label><br>
            <input type="name" value="<?php echo$aula['disciplina'];?>" name="disciplina" placeholder="<?php echo$aula['disciplina'];?>"><br>
            <br><label>Turma:</label><br>
            <input type="codigo" value="<?php echo$aula['turma'];?>" name="turma" placeholder="<?php echo$aula['turma'];?>"><br>
            <label>Videos:</label><br>
            <input type="link" value="<?php echo$aula['video1'];?>" name="video1" placeholder="<?php echo$aula['video1'];?>">
            <input type="link" value="<?php echo$aula['video1'];?>" name="video2" placeholder="<?php echo$aula['video2'];?>">
            <input type="link" value="<?php echo$aula['video1'];?>" name="video3" placeholder="<?php echo$aula['video3'];?>">
            <input type="link" value="<?php echo$aula['video1'];?>" name="video4" placeholder="<?php echo$aula['video4'];?>">
            <br><label>Material de Apoio:</label><br>
            <input type="link" value="<?php echo$aula['video1'];?>" name="material" placeholder="<?php echo$aula['video1'];?>">
            <br><label>Atividade:</label><br>
            <input type="link" value="<?php echo$aula['atividade'];?>" name="atividade" placeholder="<?php echo$aula['atividade'];?>">
            <br><label>Descrição:</label><br>
            <textarea type="text-box"  name="detalhes" placeholder="<?php echo$aula['texto'];?>" rows="4" cols="50"><?php echo$aula['texto'];?></textarea>
            <br><label>Numero da Aula:</label><br>
            <input type="number" value="<?php echo$aula['fila'];?>" name="numero" placeholder="<?php echo$aula['fila'];?>"><br>
            <input class="mt-1" type="submit" name="btnCadUsuario" value="Editar"><br>
        </form>





        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <script>
        </center>
    </body> 
</html>
<?php