<?php
session_start();
include("../conexao.php");
$sql = "SELECT * FROM `dados-aluno` WHERE matricula = '" .$_SESSION['matricula']. "'";
//echo $sql;
$dadosAluno = mysqli_fetch_array(mysqli_query($conn, $sql));
$_SESSION['dados-aluno'] = $dadosAluno;
//var_dump($dadosAluno);
$pagina=isset($_GET['area'])? $_GET['area'] : 'painel';

if ($pagina == 'sair'){
    unset($_SESSION);
    header('Location: ../../index.php');
    echo('OXI');
}

if ($pagina == 'dados'){
    if(isset($_SESSION['msg'])){
        echo'<center>';
        echo "<div class='alert alert-danger' role='alert'>";
        echo($_SESSION['msg']);
        echo"</div>";
        unset($_SESSION['msg']);
        echo'</center>';
}
    ?>
<div id="content">

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="../../estilo-painel.css">
</head>

    </head>

    <body>

    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
        style="background-color: #155592;">
        
        <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Aluno - Dados</a>
        
        <a href="index.php"><button type="button" class="btn btn-danger float-right">Voltar</button></a>

        

        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Aluno fulano<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">Developer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="">Another action</a>
                        <a class="dropdown-item" href="">Something else here</a>
                    </div>
                </li>
            </ul>


        </div>
    </nav>



        <div class="junbotron">
                <div class="card">
                <div class="card-header">
                    <center>
                <h2>Dados do aluno</h2>
                    </center>
                </div>

                <div class="card-body w-100 p-3">                    
                    <div class="w-100 p-3 container">
                    <h5 class="card-title">Nome:</h5>
                        <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['nome']);?>
                        </div>
                    </div>

                    <div class="w-100 p-3 container">
                        <h5 class="card-title">CPF:</h5>
                        <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['cpf']);?>
                        </div>
                    </div>

                    <div class="w-100 p-3 container">
                    <h5 class="card-title">Nome da mãe:</h5>
                    <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['mae']);?>
                        </div>
                    </div>
                    <div class="w-100 p-3 container">
                    <h5 class="card-title">Telefone:</h5>
                        <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['telefone']);?>
                    </div>
                    </div>
                    <div class="w-100 p-3 container">
                    <h5 class="card-title">Email:</h5>
                        <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['email']);?>
                        </div>
                    </div>
                    <div class="w-100 p-3 container">
                    <h5 class="card-title">Rua:</h5>
                        <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['rua']);?>
                        </div>
                    </div>
                    <div class="w-100 p-3 container">
                        <h5 class="card-title">CEP:</h5>
                        <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['cep']);?>
                        </div>
                    </div>
                    <div class="w-100 p-3 container">
                        <h5 class="card-title">Cidade:</h5>
                        <div class="alert alert-info" role="alert">
                            <?php echo($_SESSION['dados-aluno']['cidade']);?>
                        </div>
                    </div>
                    <div class="w-100 p-3 container">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Editar dados</button>
                    </div>
                </div>
                </div>
                <?php
                    //var_dump($_SESSION);               
                ?> 
        
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">
                <form method="POST" action ="enviar-dados.php">
                <label>Nome:</label><br>
                <input type="text" value="<?php echo($_SESSION['dados-aluno']['nome']);?>" name="nome" placeholder="<?php echo($_SESSION['dados-aluno']['nome']);?>"><br>
                <label>CPF:</label><br>
                <input type="text" value="<?php echo($_SESSION['dados-aluno']['cpf']);?>" name="cpf" placeholder="<?php echo($_SESSION['dados-aluno']['cpf']);?>"><br>
                <br><label>Nome da Mãe:</label><br>
                <input type="text" value="<?php echo($_SESSION['dados-aluno']['mae']);?>" name="mae" placeholder="<?php echo($_SESSION['dados-aluno']['mae']);?>"><br>
                <label>Telefone:</label><br>
                <input type="fone" value="<?php echo($_SESSION['dados-aluno']['telefone']);?>" name="telefone" placeholder="<?php echo($_SESSION['dados-aluno']['telefone']);?>">
                <br><label>Email:</label><br>
                <input type="email" value="<?php echo($_SESSION['dados-aluno']['email']);?>" name="email" placeholder="<?php echo($_SESSION['dados-aluno']['email']);?>">
                <br><label>Rua:</label><br>
                <input type="text" value="<?php echo($_SESSION['dados-aluno']['rua']);?>" name="rua" placeholder="<?php echo($_SESSION['dados-aluno']['rua']);?>">
                <br><label>CEP:</label><br>
                <input type="text"  name="cep" placeholder="<?php echo($_SESSION['dados-aluno']['cep']);?>"><?php echo($_SESSION['dados-aluno']['cep']);?>
                <br><label>Cidade:</label><br>
                <input type="text" value="<?php echo($_SESSION['dados-aluno']['cidade']);?>" name="cidade" placeholder="<?php echo($_SESSION['dados-aluno']['cidade']);?>"><br>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
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
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            console.log("document is ready");
            $('[data-toggle="offcanvas"], #navToggle').on('click', function () {
                $('.offcanvas-collapse').toggleClass('open')
            })
        });
        window.onload = function () {
            console.log("window is loaded");
        };

    </script>
    </body>
</div>

</html>
<?php   
}


if($pagina == 'painel'){
    if(isset($_SESSION['msg'])){
        echo "<div class='alert alert-danger' role='alert'>";
        echo($_SESSION['msg']);
        echo"</div>";
        unset($_SESSION['msg']);
}
    ?>

<div id="content">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno x</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="../../estilo-painel.css">
</head>

    </head>

    <body>

    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
        style="background-color: #155592;">
        
        <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Aluno - Disciplinas</a>
        
        <a href="?area=sair"><button type="button" class="btn btn-danger float-right">Sair</button></a>

        

        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Aluno fulano<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?area=dados">Dados Pessoais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">Developer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="">Another action</a>
                        <a class="dropdown-item" href="">Something else here</a>
                    </div>
                </li>
            </ul>


        </div>
    </nav>

        <div class="junbotron">
            <h2>Turmas:</h2>
            <!-- Achador de Disciplinas -->
            <a href='index.php?area=painel-turma'>Turma : x Periodo : ?:</a>
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
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            console.log("document is ready");
            $('[data-toggle="offcanvas"], #navToggle').on('click', function () {
                $('.offcanvas-collapse').toggleClass('open')
            })
        });
        window.onload = function () {
            console.log("window is loaded");
        };

    </script>
    </body>
</div>

</html>
<?php 
}

if ($pagina == 'painel-turma'){
    unset($_SESSION['disciplina']);
    if(isset($_SESSION['msg'])){
        echo "<div class='alert alert-danger' role='alert'>";
        echo($_SESSION['msg']);
        echo"</div>";
        unset($_SESSION['msg']);
}
    ?>

<div id="content">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma x</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="../../estilo-painel.css">
</head>


    <body>
        <div class="junbotron">
            <!-- gerador de disciplinas -->
            <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
        style="background-color: #155592;">
        
        <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Aluno - Turma</a>
        
        <a href="index.php"><button type="button" class="btn btn-danger float-right">Voltar</button></a>

        

        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Aluno fulano<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">Developer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="">Another action</a>
                        <a class="dropdown-item" href="">Something else here</a>
                    </div>
                </li>
            </ul>


        </div>
    </nav>
    <br>
    <h1>Disciplinas:</h1><br>
    

    <?php
        //limite de disciplinas abaixo
        $c = 0;
        while( $c != 10){
            $disci = "SELECT * FROM disciplina WHERE id = '".$c."' AND `cod-turma` =  '" .$_SESSION['dados-aluno']['cod-turma']. "'";
            //echo $disci.'<br>';
            $disciplina = mysqli_fetch_array(mysqli_query($conn, $disci));
            if($disciplina !=0){ 
                //var_dump($disciplina);
                ?>
                <div class="card mb-1 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <center>
                        <a href='index.php?area=painel-disciplina&d=<?php echo($disciplina['codname']); ?>'><h4><?php echo($disciplina['codname']); ?></h4></a></br>
                        </center>
                    </div>
                </div>
                <?php
            }  
            $c+=1;
} 


    ?>
    
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
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            console.log("document is ready");
            $('[data-toggle="offcanvas"], #navToggle').on('click', function () {
                $('.offcanvas-collapse').toggleClass('open')
            })
        });
        window.onload = function () {
            console.log("window is loaded");
        };

    </script>
    </body>
</div>

</html>
<?php 
}

if ($pagina == 'painel-disciplina'){
    if(isset($_SESSION['msg'])){
        echo "<div class='alert alert-danger' role='alert'>";
        echo($_SESSION['msg']);
        echo"</div>";
        unset($_SESSION['msg']);
}

$disciplina=isset($_GET['d'])? $_GET['d'] : 'false';
if ($disciplina == 'false'){
    $_SESSION['msg']= 'Erro com o sistema de disciplinas'; 
    header("Location: index.php?area=painel-turma");
}
$_SESSION['disciplina'] =  $disciplina;

?>

<div id="content">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplina x</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="../../estilo-painel.css">
</head>


    <body>
        <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
        style="background-color: #155592;">
        
        <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Aluno - <?php echo($disciplina); ?> </a>
        <!--Nome da diciplina GERAR -->
        <a href="index.php?area=painel-turma"><button type="button" class="btn btn-danger float-right">Voltar</button></a>

    
        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Aluno fulano <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Enviar Atividade</button>


                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">Developer</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="">Action</a>
                        <a class="dropdown-item" href="">Another action</a>
                        <a class="dropdown-item" href="">Something else here</a>
                    </div>
                </li>
            </ul>


        </div>
    </nav>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enviar respostas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">
                <form method="POST" action ="enviar-atividade.php">
                <div class="form-group">
                    <label for="atividade" class="col-form-label">Atividade:</label>
                    <select name="atividade">
                    <option value="">Escolha a atividade</option>
                    <?php
                    $atv = "SELECT id FROM `atividade-prof`";
                    //echo($atv);
                    $num = mysqli_num_rows(mysqli_query($conn,$atv));
                    $ati = mysqli_fetch_array(mysqli_query($conn, $atv));
                    //var_dump($ati);
                    //var_dump($num);
                    $n = $num;
                    $n += 20;
                    while($n != 0){                   
                        $query = "SELECT id, titulo FROM `atividade-prof` WHERE turma = '" .$dadosAluno['cod-turma']. "' AND disciplina = '" .$disciplina. "' AND fila = '" .$n. "'";
                        //echo $sql;
                        $ativ = mysqli_fetch_array(mysqli_query($conn, $query));
                        var_dump($ativ);
                        if ($ativ != NULL){
                            echo("<option value=");
                            echo("'".$ativ['id']."'");
                            echo('>');
                            echo$ativ['titulo'];
                            echo("</option>");
                        }
                    $n -=1;
                    //var_dump($rows);
                    //var_dump($n);
                    } 
                    ?>
                    
                </select>
                </div>
                <div class="form-group">
                    <label for="link" class="col-form-label">Link:</label>
                    <textarea class="form-control" name="link" ></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div>

        <center>
        <h3>Aulas:</h3>
                

                <div class="junbotron container">
                    <?php
                     $sql = "SELECT * FROM `aulas` WHERE turma = '" .$dadosAluno['cod-turma']. "' AND disciplina = '" .$disciplina. "'";
                     //echo $sql;
                     $rows = mysqli_num_rows(mysqli_query($conn, $sql));
                     //var_dump($rows);
                     $r = $rows;
                     $r += 100;
                     while($r != 0){
                         
                         $sql = "SELECT * FROM `aulas` WHERE turma = '" .$dadosAluno['cod-turma']. "' AND disciplina = '" .$disciplina. "' AND fila = '" .$r. "'";
                         //echo $sql;
                         $aulas = mysqli_fetch_array(mysqli_query($conn, $sql));
                         //var_dump($aulas);
                         if ($aulas != NULL){
                            ?>
                            <div class="card mb-1">
                            <div class="card-body ">
                            <button class="accordion border">
                                <h4><?php echo($aulas['titulo'].' | '.$aulas['turma'])?></h4>
                            </button>
                            <div class="panel">
                                <h5 class="border-bottom">
                                    <a href="player.php?id=<?php echo$aulas['id'];?>">Videoaulas</a>
                                </h5>
                                <h5 class="border-bottom">
                                    <a href="<?php echo($aulas['material'])?>">Material auxiliar</a>
                                </h5>
                                <h5 class="border-bottom">
                                    <a href="<?php echo($aulas['atividade'])?>">Exercicios</a>
                                </h5>
                                <div class="border-bottom">
                                    <h5>Descrição</h5>
                                    <p><?php echo($aulas['texto'])?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        <?php
                        }
                         $r -=1;
                         //var_dump($rows);
                         //var_dump($r);
                         }   
                 ?>
     </div>

            <center>
            <h3>Materiais:</h3>
            </center>

                <div class="junbotron container">
                    <?php
                     $sql = "SELECT * FROM `material` WHERE disciplina = '" .$disciplina. "' AND  turma = '" .$dadosAluno['cod-turma']. "'";
                     //echo $sql;
                     $rows = mysqli_num_rows(mysqli_query($conn, $sql));
                     //var_dump($rows);
                     $r = $rows;
                     
                     //isso é provisório..
                     $r +=100;
                     while($r != 0){
                         //setar a turma e a disciplina
                         $sql = "SELECT * FROM `material` WHERE disciplina = '" .$disciplina. "' AND  turma = '" .$dadosAluno['cod-turma']. "' AND fila = '" .$r. "'";
                         //echo $sql;                  
        
                         if (mysqli_num_rows(mysqli_query($conn, $sql)) != 0){
                            $material = mysqli_fetch_array(mysqli_query($conn, $sql));       
                           // var_dump($material);
                            
                            ?>
                            <div class="card mb-1">
                            <div class="card-body ">
                            <button class="accordion border">
                                <h4><?php echo($material['titulo'].' | '.$material['turma'])?></h4>
                            </button>
                            <div class="panel">
                                <h5 class="border-bottom">
                                    <a href="<?php echo($material['link'])?>">Baixe aqui os arquivos</a>
                                </h5>
                                <div class="border-bottom">
                                    <h5>Descrição</h5>
                                    <p><?php echo($material['titulo'].' | '.$material['turma'])?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <?php
                        }
                         $r -=1;
                         //var_dump($rows);
                         //var_dump($r);
                     }   
                    ?>
                </div>

            <center>
            <h3>Atividades:</h3>
            </center>

                <div class="junbotron container">
                    <?php
                     $sql = "SELECT * FROM `atividade-prof` WHERE disciplina = '" .$disciplina. "' AND  turma = '" .$dadosAluno['cod-turma']. "'";
                     //echo $sql;
                     $rows = mysqli_num_rows(mysqli_query($conn, $sql));
                     //var_dump($rows);
                     $r = $rows;
                     
                     //isso é provisório..
                     $r +=100;
                     while($r != 0){
                         //setar a turma e a disciplina
                         $sql = "SELECT * FROM `atividade-prof` WHERE disciplina = '" .$disciplina. "' AND  turma = '" .$dadosAluno['cod-turma']. "' AND fila = '" .$r. "'";
                         //echo $sql;               
        
                         if (mysqli_num_rows(mysqli_query($conn, $sql)) != 0){
                            $atividade = mysqli_fetch_array(mysqli_query($conn, $sql)); 
                            
                            $id=$atividade['id'];      
                            
                         ?>
                        <div class="card mb-1">
                            <div class="card-body ">
                                <h4 class="accordion border "><?php echo($atividade['titulo'].' | '.$atividade['turma'])?></h4>
                                <div class="panel">
                                    <h5 class="border-bottom">
                                        <a href="<?php echo($atividade['link'])?>">Baixe aqui os arquivos</a>
                                    </h5>
                                    <div class="border-bottom">
                                        <h5>Descrição</h5>
                                        <p><?php echo($atividade['texto'])?></p>
                                        <a href="index.php?area=painel-turma" title="Enviar respostas">
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <?php
                        
                        }
                         $r -=1;
                         //var_dump($rows);
                         //var_dump($r);
                     } 
                ?>
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
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            console.log("document is ready");
            $('[data-toggle="offcanvas"], #navToggle').on('click', function () {
                $('.offcanvas-collapse').toggleClass('open')
            })
        });
        window.onload = function () {
            console.log("window is loaded");
        };

    </script>
    <script type="text/javascript">
            $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text()
        modal.find('.modal-body input').val(recipient)
        })
    </script>
    </body>
    <?php
        }