<?php
session_start();
include("../conexao.php");
$sql = "SELECT * FROM `dados-aluno` WHERE matricula = '" .$_SESSION['matricula']. "'";
//echo $sql;
$dadosAluno = mysqli_fetch_array(mysqli_query($conn, $sql));
//var_dump($dadosAluno);
$pagina=isset($_GET['area'])? $_GET['area'] : 'painel';



if ($pagina == 'dados'){
    ?>
<div id="content">

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo sanfona</title>
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
        
        <button type="button" class="btn btn-danger float-right">Sair</button>

        

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
            <!-- Organizar lista de links das disciplinas recursivo ao banco de dados setado pelo professor -->
            <h2>Dados do aluno:</h2>
            os dados aparecem aqui
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
    ?>

<div id="content">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo sanfona</title>
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
        
        <button type="button" class="btn btn-danger float-right">Sair</button>

        

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
    ?>

<div id="content">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo sanfona</title>
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
    criar gerador de disciplinas
    <a href='index.php?area=painel-disciplina'>Disciplina Teste 01  X prof x periodo x </a></br>
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
    //o nome da disciplina tem que vir do link gerado na pagina anterior 
$disciplina = "disciplinateste01";
$_SESSION['disciplina'] =  $disciplina;
    ?>

<div id="content">
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo sanfona</title>
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
        <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Aluno - Disciplina teste 01</a>
        nome da disciplina tem que ser gerado 
        <a href="index.php?area=painel-turma"><button type="button" class="btn btn-danger float-right">Voltar</button></a>

    
        <div class="navbar-collapse offcanvas-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Aluno fulano <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="enviar-atividade.php?">Enviar Atividade</a>
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

            


    <h3>Aulas:</h3>
                </center>

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
                                    <a href="#player#">Videoaulas</a>
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
                            
                         ?>
                        <div class="card mb-1">
                            <div class="card-body ">
                                <h4 class="accordion border "><?php echo($atividade['titulo'].' | '.$atividade['turma'])?>
                                <div>
                                <a><button type="button" class="btn btn-warning float-rigth " id="btnup" title="Subir Respostas"  data-toggle="modal" data-target="#exampleModal">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                                                <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                                            </svg>
                                            </button>
                                            </a>
                                
                                </div>
                                </h4>
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
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Subir Respostas atividade x</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                criar formulario aqui 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Enviar</button>
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
        ?>