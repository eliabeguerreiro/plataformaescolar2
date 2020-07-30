<?php 
session_start();
if ($_SESSION['cargo']!= 'admin'){
    header("Location: ../../index.php");
    $_SESSION['msg'] = 'Você não tem acesso a administração';
}

echo"aqui começa o trampo do ademiro";