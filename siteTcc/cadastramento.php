<?php 
require("cadastrar.php");

$nome = $_POST["nome"];
$desc = $_POST["desc"];
$preco = $_POST["preco"];
$file = $_FILES['imagem'];

$cadastrar = new Cadastrar($nome, $desc, $preco, $file);
$cadastrar->cadastrarProduto();

header('Location: dashboard.php')
?>