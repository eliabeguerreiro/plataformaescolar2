<?php
session_start();
include("../conexao.php");
$pagina=isset($_GET['area'])? $_GET['area'] : 'turmas';


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
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Painel do Professor</h1><!-- link para index sem pagina -->
        <a href='index.php'>voltar</a>
        <div class="junbotron container">
            <!-- Organizar lista de links das disciplinas recursivo ao banco de dados setado pelo professor -->
            <h2>Sistema de frequencia:</h2>
            Formulario que irá gerar uma tabela de presença semanal
        </div>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    </body>

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
            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <?php
            if ($pagina == 'painel-sala'){
                ?>
            <h1>Painel do Professor</h1><!-- link para index sem pagina -->
            <a href='index.php'>voltar</a>
            <h2>Painel das Salas de Aula</h2>
            </br>
            <div class="junbotron container">
                <a class="text-decoration-none text-reset" href="index.php?area=painel-sala-aula"><button type="button"
                        class="btn btn-primary">Adicionar Aula</button></a>
                <a class="text-decoration-none text-reset" href="index.php?area=painel-material"><button type="button"
                        class="btn btn-primary">Adicionar Material</button></a>
                <a class="text-decoration-none text-reset" href="index.php?area=painel-atividade"><button type="button"
                        class="btn btn-primary">Adicionar Atividade</button></a>
            </div>







            <?php
            }











































            if ($pagina == 'painel-sala-aula'){
                ?>
            <h1>Painel do Professor</h1><!-- link para index sem pagina -->
            <a href='index.php?area=painel-material'>Adicionar Material</a>
            <a href='index.php?area=painel-atividade'>Adicionar Atividade</a>
            <a href='index.php?area=painel-sala'>voltar</a>
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
                            var_dump($dados);
                            if($dados['titulo'] == '' || $dados['disciplina'] == '' || $dados['video1'] == '' || $dados['turma'] == ''){
                                $erro = true;
                                $_SESSION['msg'] = "Necessário preencher os campos obrigatórios";
                            }
                            if(!$erro){
                                //só para testes
                                $_SESSION['nome'] = 'prof aleatorio';
                                $result_usuario = "INSERT INTO aulas VALUES ('" .$dados['titulo']. "','" .$dados['disciplina']. "','" .$dados['turma']. "','" .$_SESSION['nome']. "','" .$dados['video1']. "', '" .$dados['video2']. "','" .$dados['video3']. "','" .$dados['video4']. "','" .$dados['material']. "','" .$dados['atividade']. "','" .$dados['detalhes']. "')";
                                $resultado_usario = mysqli_query($conn, $result_usuario);
                                if(mysqli_insert_id($conn)){
                                    $_SESSION['msg'] = "Video cadastrado com sucesso";
                                }else{
                                    $_SESSION['msg'] = "Erro ao cadastrar o video";
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
                    <label>Videos:</label><br>
                    <input type="link" name="video1" placeholder="Código da url">
                    <input type="link" name="video2" placeholder="Código da url">
                    <input type="link" name="video4" placeholder="Código da url">
                    <input type="link" name="video3" placeholder="Código da url">
                    <br><label>Turma:</label><br>
                    <input type="codigo" name="turma" placeholder="Código da turma">
                    <br><label>Material de Apoio:</label><br>
                    <input type="link" name="material" placeholder="Link do material">
                    <br><label>Atividade:</label><br>
                    <input type="link" name="atividade" placeholder="Link da atividade">
                    <br><label>Descrição:</label><br>
                    <textarea type="text-box" name="detalhes" placeholder="Descrição da Aula"  rows="4" cols="50">
                    </textarea><br>
                    <input class = "mt-1" type="submit" name="btnCadUsuario" value="Adicionar"><br>
                </form>
            </div>

            <?php
            }
            if ($pagina == 'painel-material'){
                ?>
            <h1>Painel do Professor</h1><!-- link para index sem pagina -->
            <a href='index.php?area=painel-sala-aula'>Adicionar Aula</a>
            <a href='index.php?area=painel-atividade'>Adicionar Atividade</a>
            <a href='index.php?area=painel-sala'>voltar</a>
            <h2>Adicionar Material</h2>
            </br>
            <div class="junbotron container">
                formulario de materiais aqui
            </div>    
            <?php
            }

            if ($pagina == 'painel-atividade'){
                ?>
                <h1>Painel do Professor</h1><!-- link para index sem pagina -->
                <a href='index.php?area=painel-sala-aula'>Adicionar Aula</a>
                <a href='index.php?area=painel-material'>Adicionar Material</a>
                <a href='index.php?area=painel-sala'>voltar</a>
                <h2>Adicionar Atividade</h2>
                </br>
                <div class="junbotron container">
                    formulario de atividades aqui
                </div>
                <?php
            }

            ?>


                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                        crossorigin="anonymous">
                    </script>
        </body>
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
            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <h1>Painel do Professor</h1><!-- link para index sem pagina -->
            <a href='index.php?area=frequencia'>Frequencia das Turmas</a>
            <br>
            <a href='index.php?area=painel-sala'>Painel das Salas de Aulas</a>
            <br>
            <a href='index.php?area=#'>Sair</a>

            <div class="junbotrom">
                <!-- Organizar lista de links das turmas cadastradas a esse professor -->
                <h2>Turmas:</h2>
                <h3><a href='#'>Turma x periodo x </a></h3>
                <!-- Seria interessante aparecer aqui a ultima aula/atividade setada -->
            </div>


            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                crossorigin="anonymous">
            </script>
        </body>
    </div>

    </html>
    <?php 
}