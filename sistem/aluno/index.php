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
    <html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Painel do Aluno - Dados</h1>
        <a href='index.php'>voltar</a>
        <div class="junbotron">
            <!-- Organizar lista de links das disciplinas recursivo ao banco de dados setado pelo professor -->
            <h2>Dados do aluno:</h2>
            os dados aparecem aqui
        </div>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
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
        <html lang="pt">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Painel Aluno - Turmas</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <h1>Painel do Aluno - Disciplinas</h1>
            <a href='index.php?area=dados'>Dados do aluno</a>
            <br>
            <a href='#'>Sair</a>
            <div class="junbotron">
                <h2>Turmas:</h2>
                <!-- Achador de Disciplinas -->
                <a href='index.php?area=painel-turma'>Turma : x Periodo : ?:</a>
            </div>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
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
        <html lang="pt">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Painel - Disciplinas</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <h1>Disciplinas</h1><!-- link para index sem pagina -->
            <a href='index.php'>Voltar</a></br>
            <div class="junbotron">
            <!-- gerador de disciplinas -->
            <a href='index.php?area=painel-disciplina'>Disciplina X prof x periodo x </a></br>
            </div>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
            </script>
        </body>
    </div>        
    </html>
    <?php 
}

if ($pagina == 'painel-disciplina'){
    ?>

    <div id="content">
        <!DOCTYPE html>
        <html lang="pt">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Painel - Disciplina x</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
            <link rel="stylesheet" href="estilo-painel.css">
        </head>
        <body>
            <h1>Disciplina X Prof X Periodo X</h1><!-- link para index sem pagina -->
                <a href='index.php?area=painel-turma'>Voltar</a></br>
                <div class="junbotron container">
                    <?php
                        $sql = "SELECT * FROM `aulas` WHERE turma = '" .$dadosAluno['cod-turma']. "'";
                        //echo $sql;
                        $rows = mysqli_num_rows(mysqli_query($conn, $sql));
                        //var_dump($rows);
                        $r = $rows;
                        while($r != 0){
                            //setar a turma e a disciplina
                            $sql = "SELECT * FROM `aulas` WHERE fila = " .$r. " AND turma = '" .$dadosAluno['cod-turma']. "'";
                            //echo $sql;
                            $aulas = mysqli_fetch_array(mysqli_query($conn, $sql));
                            //var_dump($aulas);
                            ?>
                                <button class="accordion border"><h4><?php echo($aulas['titulo'])?></h4></button>
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
                            $r -=1;
                            //var_dump($rows);
                            //var_dump($r);
                            }   
                    ?>
                </div>
            
                
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
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </body>
       <?php
        }
        ?>
        