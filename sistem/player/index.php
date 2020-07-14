<?php
include("../conexao.php");
session_start();
var_dump($_POST);

?>

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
    <center>

    <body>
        <?php 

            $sql = "SELECT * FROM `atividade-prof` WHERE id = ".$pg."   ";
            //echo($sql);
            $atividade = mysqli_fetch_array(mysqli_query($conn, $sql));
            //var_dump($atividade);
 
        ?>

        <div class='alert alert-warning' role='alert'>
            Caso não queira editar um campo basta deixa-lo em branco!
        </div>

        <form method="POST" action="?c=sim">
                    <label>Título do atividade:</label><br>
                    <input type="name" value = "<?php echo$atividade['titulo'];?>" name="turma" placeholder="<?php echo$atividade['titulo'];?>"><br>
                    <label>Link:</label><br>
                    <input type="link" value = "<?php echo$atividade['turma'];?>" name="turma" placeholder="<?php echo$atividade['link'];?>">
                    <br><label>Turma:</label><br>
                    <input type="codigo" value = "<?php echo$atividade['turma'];?>" name="turma" placeholder="<?php echo$atividade['turma'];?>">
                    <br><label>Disciplina:</label><br>
                    <input type="codigo" value = "<?php echo$atividade['disciplina'];?>" name="disciplina" placeholder="<?php echo$atividade['disciplina'];?>">
                    <br><label>Descrição:</label><br>
                    <textarea type="text-box" name="detalhes" rows="4" cols="50"></textarea><br>
                    <br><label>Numero da Aula:</label><br>
                    <input type="number" value="<?php echo$atividade['fila'];?>" name="numero" placeholder="<?php echo$atividade['fila'];?>"><br>
                    <input class="mt-1" type="submit" name="btnCadUsuario" value="Editar"><br>
                </form>
        
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
        </center>
    </body> 
</html>
<?php