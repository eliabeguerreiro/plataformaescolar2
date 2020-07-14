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
$disciplina = "disciplinateste01";
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
                            <button class="accordion border">
                                <h4><?php echo($aulas['titulo'])?></h4>
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
                     $sql = "SELECT * FROM `material` WHERE disciplina = '" .$dadosAluno['cod-turma']. "'";
                     //echo $sql;
                     $rows = mysqli_num_rows(mysqli_query($conn, $sql));
                     //var_dump($rows);
                     $r = $rows;
                     
                     //isso é provisório..
                     $r +=100;
                     while($r != 0){
                         //setar a turma e a disciplina
                         $sql = "SELECT * FROM `material` WHERE fila = " .$r. " AND disciplina = '" .$dadosAluno['cod-turma']. "'";
                         //echo $sql;               
        
                         if (mysqli_num_rows(mysqli_query($conn, $sql)) != 0){
                            $material = mysqli_fetch_array(mysqli_query($conn, $sql));       
                            ?>
                    <div class="card mb-1">
                        <div class="card-body">
                            
                            <?php
                            
                         echo("<a href='#'>".$material['titulo'].' | '.$material['turma']."</a>");
                         //var_dump($aulas);
                         ?>     
                         <!--Pensar em um jeito de mandar a aula pra outra pagina lá-->
                         <a href="apagar-material.php?id=<?php echo$material['id'];?>" title="Apagar aula"><button
                                 type="button" class="btn btn-danger float-right"><svg width="1em" height="1em"
                                     viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd"
                                         d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                 </svg></button></a>
                         <a href="editar-material.php?id=<?php echo$material['id'];?>" title="Editar aula"><button type="button"
                                 class="btn btn-warning float-right "><svg width="1em" height="1em"
                                     viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd"
                                         d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" />
                                     <path fill-rule="evenodd"
                                         d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z" />
                                 </svg></button></a>

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
                     $sql = "SELECT * FROM `atividade-prof` WHERE disciplina = '" .$dadosAluno['cod-turma']. "'";
                     //echo $sql;
                     $rows = mysqli_num_rows(mysqli_query($conn, $sql));
                     //var_dump($rows);
                     $r = $rows;
                     
                     //isso é provisório..
                     $r +=100;
                     while($r != 0){
                         //setar a turma e a disciplina
                         $sql = "SELECT * FROM `atividade-prof` WHERE fila = " .$r. " AND disciplina = '" .$dadosAluno['cod-turma']. "'";
                         //echo $sql;               
        
                         if (mysqli_num_rows(mysqli_query($conn, $sql)) != 0){
                            $atividade = mysqli_fetch_array(mysqli_query($conn, $sql));       
                            ?>
                    <div class="card mb-1">
                        <div class="card-body">
                            
                            <?php
                            
                         echo("<a href='#'>".$atividade['titulo'].' | '.$atividade['turma']."</a>");
                         //var_dump($aulas);
                         ?>     
                         
                         <a href="apagar-atividade.php?id=<?php echo$atividade['id'];?>" title="Apagar aula"><button
                                 type="button" class="btn btn-danger float-right"><svg width="1em" height="1em"
                                     viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd"
                                         d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                 </svg></button></a>
                         <a href="editar-atividade.php?id=<?php echo$atividade['id'];?>" title="Editar aula"><button type="button"
                                 class="btn btn-warning float-right "><svg width="1em" height="1em"
                                     viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd"
                                         d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" />
                                     <path fill-rule="evenodd"
                                         d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z" />
                                 </svg></button></a>

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
    </body>
    <?php
        }
        ?>