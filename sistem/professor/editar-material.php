<?php

include("../conexao.php");
session_start();
//var_dump($_POST);

$c = isset($_GET['c'])? $_GET['c'] : 'nao';

if($c == 'sim'){
    //var_dump($_POST);    
    $sql = "UPDATE `material` SET `titulo` = '" .$_POST['titulo']. "',
     `disciplina` = '" .$_POST['disciplina']. "', `turma` = '" .$_POST['turma']. "',
      `link` = '" .$_POST['link']. "', `texto` = '" .$_POST['detalhes']. "', `fila` = '" .$_POST['numero']. "' WHERE id = '" .$_SESSION['id']. "'";
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

            $sql = "SELECT * FROM material WHERE id = ".$pg."   ";
            //echo($sql);
            $material = mysqli_fetch_array(mysqli_query($conn, $sql));
            //var_dump($material);
 
        ?>

        <div class='alert alert-warning' role='alert'>
            Caso não queira editar um campo basta deixa-lo em branco!
        </div>





        <form method="POST" action="?c=sim">
                    <label>Título do Material:</label><br>
                    <input type="name" value = "<?php echo$material['titulo'];?>" name="turma" placeholder="<?php echo$material['titulo'];?>"><br>
                    <label>Link:</label><br>
                    <input type="link" value = "<?php echo$material['turma'];?>" name="turma" placeholder="<?php echo$material['link'];?>">
                    <br><label>Turma:</label><br>
                    <input type="codigo" value = "<?php echo$material['turma'];?>" name="turma" placeholder="<?php echo$material['turma'];?>">
                    <br><label>Disciplina:</label><br>
                    <input type="codigo" value = "<?php echo$material['disciplina'];?>" name="disciplina" placeholder="<?php echo$material['disciplina'];?>">
                    <br><label>Descrição:</label><br>
                    <textarea type="text-box" name="detalhes" rows="4" cols="50"></textarea><br>
                    <br><label>Numero da Aula:</label><br>
                    <input type="number" value="<?php echo$material['fila'];?>" name="numero" placeholder="<?php echo$material['fila'];?>"><br>
                    <input class="mt-1" type="submit" name="btnCadUsuario" value="Editar"><br>
                </form>






        <form method="POST" action="?c=sim">
            <label>Título da Aula:</label><br>
            <input type="name" value="<?php echo$material['titulo'];?>" name="titulo" placeholder="<?php echo$material['titulo'];?>"><br>
            <label>Disciplina:</label><br>
            <input type="name" value="<?php echo$material['disciplina'];?>" name="disciplina" placeholder="<?php echo$material['disciplina'];?>"><br>
            <br><label>Turma:</label><br>
            <input type="codigo" value="<?php echo$material['turma'];?>" name="turma" placeholder="<?php echo$material['turma'];?>"><br>
            <label>Videos:</label><br>
            <input type="link" value="<?php echo$material['video1'];?>" name="video1" placeholder="<?php echo$material['video1'];?>">
            <input type="link" value="<?php echo$material['video1'];?>" name="video2" placeholder="<?php echo$material['video2'];?>">
            <input type="link" value="<?php echo$material['video1'];?>" name="video3" placeholder="<?php echo$material['video3'];?>">
            <input type="link" value="<?php echo$material['video1'];?>" name="video4" placeholder="<?php echo$material['video4'];?>">
            <br><label>Material de Apoio:</label><br>
            <input type="link" value="<?php echo$material['video1'];?>" name="material" placeholder="<?php echo$material['video1'];?>">
            <br><label>Atividade:</label><br>
            <input type="link" value="<?php echo$material['atividade'];?>" name="atividade" placeholder="<?php echo$material['atividade'];?>">
            <br><label>Descrição:</label><br>
            <textarea type="text-box"  name="detalhes" placeholder="<?php echo$material['texto'];?>" rows="4" cols="50"><?php echo$material['texto'];?></textarea>
            <br><label>Numero da Aula:</label><br>
            <input type="number" value="<?php echo$material['fila'];?>" name="numero" placeholder="<?php echo$material['fila'];?>"><br>
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