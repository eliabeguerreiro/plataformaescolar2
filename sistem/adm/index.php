<?php 
session_start();
if ($_SESSION['cargo']!= 'admin'){
    header("Location: ../../index.php");
    $_SESSION['msg'] = 'Você não tem acesso a administração';
}
$pagina=isset($_GET['pg'])? $_GET['pg'] : 'null';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
                crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
            <link rel="stylesheet" href="../../estilo-painel.css">
    
</head>

<body>
    <center>
        <div class='jumbotron  container'>
            <h1>Painel de controle</h1>
            </br>
            <a class="text-decoration-none text-reset" href="?pg=cadalun"><button type="button"
                    class="btn btn-primary">Cadastrar Aluno</button></a>
            <a class="text-decoration-none text-reset" href="?pg=excalun"><button type="button"
                    class="btn btn-primary">Excluir Aluno</button></a>
            <a class="text-decoration-none text-reset" href="?pg=cadprof"><button type="button"
                    class="btn btn-primary">Cadastrar Professor</button></a>
            <a class="text-decoration-none text-reset" href="?pg=excprof"><button type="button"
                    class="btn btn-primary">Excluir Professor</button></a>
            
            <a class="text-decoration-none text-reset" href="?pg=caddis"><button type="button"
                    class="btn btn-primary">Adicionar Disciplina</button></a>
            <a class="text-decoration-none text-reset" href="?pg=excdis"><button type="button"
                    class="btn btn-primary">Excluir Disciplina</button></a>
            <br>
            <br>
            
            <a class="text-decoration-none text-reset" href="../professor/"><button type="button"
                    class="btn btn-warning">Painel Professor</button></a>
            <a class="text-decoration-none text-reset" href="../aluno/"><button type="button"
                    class="btn btn-warning">Painel Aluno</button></a>
            <a class="text-decoration-none text-reset" href="?pg=sair"><button type="button"
                    class="btn btn-danger">Sair</button></a>
        </div>
    </center>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous">
    </script>
    </body>




</html>
<?php


if ($pagina == 'null'){
    echo'nadica';
}

if ($pagina == 'cadalun'){
    echo'cadastra aluno';
}

if ($pagina == 'excalun'){
    echo'excluir aluno';
}

if ($pagina == 'cadprof'){
    echo'cadastrar professor';
}

if ($pagina == 'excprof'){
    echo'excluir professor';
}

if ($pagina == 'caddis'){
    echo'cadastrar disciplina';
}

if ($pagina == 'excdis'){
    echo'excluir disciplina';
}

if ($pagina == 'sair'){
    unset($_SESSION);
    header('Location: ../../index.php');
    echo('OXI');
}