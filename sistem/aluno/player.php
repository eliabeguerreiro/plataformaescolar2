<?php
include("../conexao.php");
session_start();


//?id=xx&pg==linkx
$pg = isset($_GET['pg'])? $_GET['pg'] : 'link1';
if(!$_GET['id']){
    var_dump($_SESSION);
    if(!$pg){
        //var_dump($_SESSION);
        //$_SESSION['msg'] = "Houve um mal funcionamento na plataforam informe seu Professor";
        //header("Location: player.php?area=painel-disciplina");
    }else{}
}else{
    //var_dump($_SESSION);
    $id = $_GET['id'];
    $sql = "SELECT video1, video2, video3, video4 FROM aulas WHERE id ='" .$id. "'";
    //echo$sql;
    $videos = mysqli_fetch_array(mysqli_query($conn, $sql));
    //var_dump($videos);
    $_SESSION['videos'] = $videos;
    //header("Location: player.php?pg=link1");
}

//preparar sistema de escolha de aulas
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
</body>
</html>
<?php