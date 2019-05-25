<?php 

include("header.php");
include("conecta.php");
include("banco-produto.php");

$id = $_GET['id'];
removeProduto($conexao, $id);

header("Location: produto-lista.php?removido=true");
die();