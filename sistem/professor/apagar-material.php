<?php
include("../conexao.php");
session_start();

$c = isset($_GET['c'])? $_GET['c'] : 'nao';

if($c == 'sim'){
    //var_dump($_SESSION);    
    $sql = "DELETE FROM `material` WHERE id =  '" .$_SESSION['id']. "'";
    mysqli_query($conn, $sql);
    //echo $sql;
    header("Location: index.php");
}

if(isset($_GET['id'])? $_GET['id'] : '#'){}
$pg = $_GET['id'];
$_SESSION['id'] = $pg;

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

        <div class='alert alert-danger' role='alert'>
            Esta ação não pode ser desfeita!
        </div>
        <?php

            $sql = "SELECT * FROM material WHERE id = '" .$pg. "'";
            //echo($sql);
            $material = mysqli_fetch_array(mysqli_query($conn, $sql));
            //var_dump($aula);

        ?>


        <div class='alert alert-danger' role='alert'>
            Tem certeza que você que apagar o material: <?php echo$material['titulo']; ?> ?
        </div>
        <a href='?c=sim'><button type='button' class='btn btn-danger'>Apagar</button></a>
        <a href='index.php'><button type='button' class='btn btn-info'>Voltar</button></a>
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