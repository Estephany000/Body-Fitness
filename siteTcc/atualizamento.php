<?php 
require("atualizar.php");

$id    = $_POST["id"];
$nome  = $_POST["nome"];
$desc  = $_POST["desc"];
$valor = $_POST["preco"];
$file  = $_FILES['imagem'];

$atualizar = new Atualizar($id, $nome, $desc, $valor, $file);
$atualizar->atualizar();

if(isset($_POST['deletar'])){
    $atualizar = new Atualizar($id, $nome, $desc, $valor, $file);
    $atualizar->deletar();
}

header('Location: dashboard.php')
?>
