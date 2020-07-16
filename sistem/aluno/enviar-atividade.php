<?php
session_start();
include("../conexao.php");

var_dump($_POST);

if(isset($_GET['id'])? $_GET['id'] : '#'){}
$id = $_GET['id'];
$_SESSION['id'] = $id;


var_dump($_SESSION);