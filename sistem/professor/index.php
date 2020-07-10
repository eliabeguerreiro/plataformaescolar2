<?php
session_start();
//var_dump($_SESSION);
include("../conexao.php");
$sql = "SELECT * FROM `dados-professor` WHERE matricula = '" .$_SESSION['matricula']. "'";
//echo $sql;
$dadosProf = mysqli_fetch_array(mysqli_query($conn, $sql));
//var_dump($dadosAluno);
$pagina=isset($_GET['area'])? $_GET['area'] : 'turmas';
$professor = $_SESSION['matricula'];

if ($pagina == 'frequencia'){
    ?>
<div id="content">

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

    <body>
        <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
            style="background-color: #155592;">

            <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Professor
                <!-- link para index sem pagina --></a>

            <button type="button" class="btn btn-danger float-right"><a href='index.php'>Voltar</a></button>



            <div class="navbar-collapse offcanvas-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Professor Fulano<span class="sr-only">(current)</span></a>
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


        <div class="junbotron container">
            <!-- Organizar lista de links das disciplinas recursivo ao banco de dados setado pelo professor -->
            <h2>Sistema de frequencia:</h2>
            Formulario que irá gerar uma tabela de presença semanal
        </div>


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
        < script >
            var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
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
        $(document).ready(function() {
            console.log("document is ready");
            $('[data-toggle="offcanvas"], #navToggle').on('click', function() {
                $('.offcanvas-collapse').toggleClass('open')
            })
        });
        window.onload = function() {
            console.log("window is loaded");
        };
        </script>

    </html>
    <?php   
}

if ($pagina == 'painel-sala' || $pagina == 'painel-sala-aula' || $pagina == 'painel-material' || $pagina == 'painel-atividade'){
    ?>
    <div id="content">

        <!DOCTYPE html>
        <html lang="pt">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Painel Professor</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
                crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
            <link rel="stylesheet" href="../../estilo-painel.css">
        </head>

        <body>
            <?php
            if ($pagina == 'painel-sala'){
                ?>

            <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
                style="background-color: #155592;">

                <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Professor
                    <!-- link para index sem pagina --></a>

                <button type="button" class="btn btn-danger float-right"><a href='index.php'>Voltar</a></button>



                <div class="navbar-collapse offcanvas-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Professor Fulano <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-sala-aula">Adicionar Aula</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-material">Adicionar Material</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-atividade">Adicionar Atividade</a>
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

            <h2>Painel das Salas de Aula</h2>
            tabela com codigo de turmas pra o prof n esquecer
            </br>



            <?php

            }

            if ($pagina == 'painel-sala-aula'){
                ?>
            <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
                style="background-color: #155592;">

                <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Professor
                    <!-- link para index sem pagina --></a>

                <button type="button" class="btn btn-danger float-right"><a
                        href='index.php?area=painel-sala'>Voltar</a></button>

                <div class="navbar-collapse offcanvas-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Professor Fulano <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-material">Adicionar Material</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-atividade">Adicionar Atividade</a>
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


            <h2>Adicionar Aula</h2>
            </br>


            <div class="junbotron container">
                <?php
                        
                        $btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
                        if($btnCadUsuario){
    
                            $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                            $erro = false;
                            $dados_st = array_map('strip_tags', $dados_rc);
                            $dados = array_map('trim', $dados_st);
                            //var_dump($dados);
                            if($dados['titulo'] == '' || $dados['disciplina'] == '' || $dados['video1'] == '' || $dados['turma'] == '' || $dados['detalhes'] == ''){
                                $erro = true;
                                $_SESSION['msg'] = "Necessário preencher os campos obrigatórios";
                            }
                            if(!$erro){
                                //só para testes
                                $_SESSION['nome'] = 'prof aleatorio';
                                $result_usuario = "INSERT INTO aulas VALUES (0,'" .$dados['titulo']. "','" .$dados['disciplina']. "','" .$dados['turma']. "','" .$_SESSION['nome']. "','" .$dados['video1']. "', '" .$dados['video2']. "','" .$dados['video3']. "','" .$dados['video4']. "','" .$dados['material']. "','" .$dados['atividade']. "','" .$dados['detalhes']. "','" .$dados['numero']. "')";
                                //echo $result_usuario;
                                $resultado_usario = mysqli_query($conn, $result_usuario);
                                //var_dump($resultado_usario);
                                if(mysqli_insert_id($conn)){
                                    $_SESSION['msg'] = "Aula cadastrada com sucesso";
                                }else{
                                    $_SESSION['msg'] = "Erro ao cadastrar a aula";
                                }
                            }
                        }
                        if(isset($_SESSION['msg'])){
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo$_SESSION['msg'];
                            echo"</div>";
                            unset($_SESSION['msg']);
                        }
                ?>
                <form method="POST" action="">
                    <label>Título da Aula:</label><br>
                    <input type="name" name="titulo" placeholder="Título"><br>
                    <label>Disciplina:</label><br>
                    <input type="name" name="disciplina" placeholder="Disciplina"><br>
                    <br><label>Turma:</label><br>
                    <input type="codigo" name="turma" placeholder="Código da turma">
                    <label>Videos:</label><br>
                    <input type="link" name="video1" placeholder="Código da url">
                    <input type="link" value="NULL" name="video2" placeholder="Código da url">
                    <input type="link" value="NULL" name="video4" placeholder="Código da url">
                    <input type="link" value="NULL" name="video3" placeholder="Código da url">
                    <br><label>Turma:</label><br>
                    <input type="codigo" name="turma" placeholder="Código da turma">
                    <br><label>Material de Apoio:</label><br>
                    <input type="link" value="NULL" name="material" placeholder="Link do material">
                    <br><label>Atividade:</label><br>
                    <input type="link" value="NULL" name="atividade" placeholder="Link da atividade">
                    <br><label>Descrição:</label><br>
                    <textarea type="text-box" name="detalhes" placeholder="Descrição da Aula" rows="4" cols="50">
                    </textarea>
                    <br><label>Numero da Aula:</label><br>
                    <input type="number" name="numero" placeholder="Número da Aula"><br>
                    <input class="mt-1" type="submit" name="btnCadUsuario" value="Adicionar"><br>
                </form>
            </div>

            <?php
            }

            if ($pagina == 'painel-material'){
                ?>
            <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
                style="background-color: #155592;">

                <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Professor
                    <!-- link para index sem pagina --></a>

                <button type="button" class="btn btn-danger float-right"><a
                        href='index.php?area=painel-sala'>Voltar</a></button>



                <div class="navbar-collapse offcanvas-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Professor Fulano <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-sala-aula">Adicionar Aula</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-atividade">Adicionar Atividade</a>
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



            <h2>Adicionar Material</h2>
            </br>
            <div class="junbotron container">
                <?php
                        

                        $btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
                        if($btnCadUsuario){
    
                            $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                            $erro = false;
                            $dados_st = array_map('strip_tags', $dados_rc);
                            $dados = array_map('trim', $dados_st);
                            //var_dump($dados);
                            if(in_array('',$dados)){
                                $erro = true;
                                $_SESSION['msg'] = "Necessário preencher os campos obrigatórios";
                            }
                            if(!$erro){
                                //só para testes
                                $_SESSION['nome'] = 'prof aleatorio';
                                $result_usuario = "INSERT INTO material VALUES (0,'" .$dados['titulo']. "','" .$dados['detalhes']. "','" .$dados['link']. "','" .$dados['turma']. "','" .$dados['disciplina']. "')";
                                //echo $result_usuario;
                                $resultado_usario = mysqli_query($conn, $result_usuario);
                                //var_dump($resultado_usario);
                                if(mysqli_insert_id($conn)){
                                    $_SESSION['msg'] = "Material cadastrado com sucesso";
                                }else{
                                    $_SESSION['msg'] = "Erro ao cadastrar o material";
                                }
                            }
                        }
                        if(isset($_SESSION['msg'])){
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo$_SESSION['msg'];
                            echo"</div>";
                            unset($_SESSION['msg']);
                        }
                ?>
                <form method="POST" action="">
                    <label>Título do Material:</label><br>
                    <input type="name" name="titulo" placeholder="Título"><br>
                    <label>Link:</label><br>
                    <input type="link" name="link" placeholder="Link do material">
                    <br><label>Turma:</label><br>
                    <input type="codigo" name="turma" placeholder="Código da turma">
                    <br><label>Disciplina:</label><br>
                    <input type="codigo" name="disciplina" placeholder="Disciplina">
                    <br><label>Descrição:</label><br>
                    <textarea type="text-box" name="detalhes" rows="4" cols="50">
                    </textarea><br>
                    <input class="mt-1" type="submit" name="btnCadUsuario" value="Adicionar"><br>
                </form>

            </div>
            <?php
            }

            if ($pagina == 'painel-atividade'){
                ?>
            <nav class="navbar navbar-expand-lg fixed-top shadow navbar-dark navbar-offcanvas"
                style="background-color: #155592;">

                <button class="navbar-toggler d-block float-left" type="button" id="navToggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Professor
                    <!-- link para index sem pagina --></a>

                <button type="button" class="btn btn-danger float-right"><a
                        href='index.php?area=painel-sala'>Voltar</a></button>



                <div class="navbar-collapse offcanvas-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="">Professor Fulano <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-sala-aula">Adicionar Aula</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?area=painel-material">Adicionar Material</a>
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


            <h2>Adicionar Atividade</h2>
            </br>
            <div class="junbotron container">
                <?php
                $btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
                        if($btnCadUsuario){
                            $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                            $erro = false;
                            $dados_st = array_map('strip_tags', $dados_rc);
                            $dados = array_map('trim', $dados_st);
                            //var_dump($dados);
                            if(in_array('',$dados)){
                                $erro = true;
                                $_SESSION['msg'] = "Necessário preencher os campos obrigatórios";
                            }
                            if(!$erro){
                                //só para testes
                                $_SESSION['nome'] = 'prof aleatorio';
                                $result_usuario = "INSERT INTO `atividade-prof` VALUES (0,'" .$dados['titulo']. "','" .$dados['detalhes']. "','" .$dados['link']. "','" .$dados['turma']. "','" .$dados['disciplina']."')";
                                //echo $result_usuario;
                                $resultado_usario = mysqli_query($conn, $result_usuario);
                                //var_dump($resultado_usario);
                                if(mysqli_insert_id($conn)){
                                    $_SESSION['msg'] = "Atividade cadastrado com sucesso";
                                }else{
                                    $_SESSION['msg'] = "Erro ao cadastrar a atividade";
                                }
                            }
                        }
                        if(isset($_SESSION['msg'])){
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo$_SESSION['msg'];
                            echo"</div>";
                            unset($_SESSION['msg']);
                        }
                ?>
                <form method="POST" action="">
                    <label>Título do Atividade:</label><br>
                    <input type="name" name="titulo" placeholder="Título"><br>
                    <label>Link:</label><br>
                    <input type="link" name="link" placeholder="Link da atividade">
                    <br><label>Turma:</label><br>
                    <input type="codigo" name="turma" placeholder="Código da turma">
                    <br><label>Disciplina:</label><br>
                    <input type="codigo" name="disciplina" placeholder="Disciplina">
                    <br><label>Descrição:</label><br>
                    <textarea type="text-box" name="detalhes" rows="4" cols="50">
                    </textarea><br>
                    <input class="mt-1" type="submit" name="btnCadUsuario" value="Adicionar"><br>
                </form>
            </div>
            <?php
            }

            ?>


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
                acc[i].addEventListener("click", function() {
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
            $(document).ready(function() {
                console.log("document is ready");
                $('[data-toggle="offcanvas"], #navToggle').on('click', function() {
                    $('.offcanvas-collapse').toggleClass('open')
                })
            });
            window.onload = function() {
                console.log("window is loaded");
            };
            </script>
    </div>

    </html>
    <?php   
}

if($pagina == 'turmas'){

    ?>
    <div id="content">

        <!DOCTYPE html>
        <html lang="pt">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Painel do Professor</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
                crossorigin="anonymous">
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
                <a class="navbar-brand ml-auto mr-auto text-center" href="#">Painel do Professor
                    <!-- link para index sem pagina --></a>

                <button type="button" class="btn btn-danger float-right"><a href='index.php'>Sair</a></button>



                <div class="navbar-collapse offcanvas-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="">
                                Prof fulano de tal<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='index.php?area=frequencia'>Frequencia das Turmas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='index.php?area=painel-sala'>Painel das Salas de Aulas</a>
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

            <div class="junbotrom">
                <!-- Organizar lista de links das turmas cadastradas a esse professor -->
                <h3>Aulas Onlines</h3>


                <div class="junbotron container">
                    <?php
                     $sql = "SELECT * FROM `aulas` WHERE disciplina = '" .$dadosProf['disciplina']. "'";
                     //echo $sql;
                     $rows = mysqli_num_rows(mysqli_query($conn, $sql));
                     //var_dump($rows);
                     $r = $rows;
                     while($r != 0){
                         //setar a turma e a disciplina
                         $sql = "SELECT * FROM `aulas` WHERE fila = " .$r. " AND disciplina = '" .$dadosProf['disciplina']. "'";
                         //echo $sql;
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         //RESOLVER PROBLEMA COMO CONTADOR
















                         if (mysqli_num_rows(mysqli_query($conn, $sql)) != 0){
                            $aulas = mysqli_fetch_array(mysqli_query($conn, $sql));       
                            ?>
                    <div class="card mb-1">
                        <div class="card-body">
                            
                            <?php
                            
                         echo("<a class = 'titulodaula' href='#'>".$aulas['titulo'].' | '.$aulas['turma']."</a>");
                         //var_dump($aulas);
                         ?>     
                         <!--Pensar em um jeito de mandar a aula pra outra pagina lá-->
                         <a href="apagar-aula.php?id=<?php echo$aulas['id'];?>" title="Apagar aula"><button
                                 type="button" class="btn btn-danger float-right"><svg width="1em" height="1em"
                                     viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd"
                                         d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                 </svg></button></a>
                         <a href="editar-aula.php?id=#" title="Editar aula"><button type="button"
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
                acc[i].addEventListener("click", function() {
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
            $(document).ready(function() {
                console.log("document is ready");
                $('[data-toggle="offcanvas"], #navToggle').on('click', function() {
                    $('.offcanvas-collapse').toggleClass('open')
                })
            });
            window.onload = function() {
                console.log("window is loaded");
            };
            </script>
        </body>
    </div>

    </html>
    <?php 
}