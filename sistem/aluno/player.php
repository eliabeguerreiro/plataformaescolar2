<?php
include_once("../conexao.php");
include_once("../funcoes.php");
session_start();
//var_dump($_SESSION);
if (!$_SESSION['videos']){
    $id = $_GET['id'];
    $_SESSION['videos'] = Aulas($id);
    header("Location: player.php");
}
$videos = $_SESSION['videos'];
//?id=xx&pg==linkx
$pg = isset($_GET['pg'])? $_GET['pg'] : 'link1';
echo($pg).'<br>';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Player</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="estilo-painel.css">
</head>
<body >
<!-- class="bg-dark" -->
       <?php 

if ($pg === 'link1' ){
    echo ($videos['video1']);
}elseif ($pg === 'link2' ){
    echo ($videos['video2']);
}elseif ($pg === 'link3' ){
    echo ($videos['video3']);
}elseif ($pg === 'link4' ){
    echo ($videos['video4']);
} 
?>

<a href="?pg=link1">video 1</a>
<a href="?pg=link2">video 2</a>
<a href="?pg=link3">video 3</a>
<a href="?pg=link4">video 4</a>
</body>
</html>
<?php