<?php

Class Usuario;
{ private $pdo;
  public $mgError = "";

public function conectar($nome, $host, $usuario, $senha)
{

global $pdo; }
try

{ 
    $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
}   catch (PDOException $e){
    $msgErro = $e->getMessage();

    }
}


  public function cadastrar($nome, $telefone, $email, $senha)
  {

    global $pdo;
    // verificar se o e-mail esta cadastrado
  
    $sql = pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
    $sql->bindValue(":e",$email);
    $sql->execute();
    if ($sql->rowCount() > 0);

    return false, // Usúario já cadastrado 

    // se não, cadastrar
  }


  public function logar($email, $senha){


  global $pdo;
}



?>