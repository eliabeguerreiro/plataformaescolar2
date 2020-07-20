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
//echo($pg).'<br>';
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
<body class="bg-dark">
<center>
       <?php 

if ($pg === 'link1' ){
    echo (Video($videos['video1']));
}elseif ($pg === 'link2' ){
    echo (Video($videos['video2']));
}elseif ($pg === 'link3' ){
    echo (Video($videos['video3']));
}elseif ($pg === 'link4' ){
    echo (Video($videos['video4']));
} 
?>
<div id='ytplayer' class='col-10 mt-1'></div>
<br>

<div class="btn-group-lg">
<a href="#"><buttontype="button" class="btn btn-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
  <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></button></a>
<a href="?pg=link1"><buttontype="button" class="btn btn-primary">Vídeo 1</button></a>
<a href="?pg=link3"><buttontype="button" class="btn btn-primary">Vídeo 2</button></a>
<a href="?pg=link4"><buttontype="button" class="btn btn-primary">Vídeo 3</button></a>
<a href="?pg=link2"><buttontype="button" class="btn btn-primary">Vídeo 4</button></a>
<a href="#"><buttontype="button" class="btn btn-warning">Registrar Presença</button></a>
</div>
</center>
</body>
</html>
<?php