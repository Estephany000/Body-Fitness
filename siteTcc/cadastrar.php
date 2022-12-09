<?php
require("acoes/conexao.php");

class Cadastrar{
    private $nome;
    private $desc;
    private $valor;
    private $file;
    private $conn;

    public function __construct($nome, $desc, $valor, $file)
    {
        $this->nome = $nome;
        $this->desc = $desc;
        $this->valor = $valor;
        $this->file = $file;
        $this->conn = new Conexao();
    }

    public function cadastrarProduto(){
        $extenso = strtolower(substr($this->file['name'], -4));
        $novoName = md5(time()).$extenso;
        $diretorio = "uploads/";
        $data = date('Y-m-d H:i:s');
        move_uploaded_file($this->file['tmp_name'], $diretorio.$novoName);
   
        $query = $this->conn->conectar()->prepare("INSERT INTO produtos (nome, descricao, preco, arquivo, data) VALUES (?, ?, ?, ?, ?);");
        $query->execute(array($this->nome, $this->desc, $this->valor, $novoName, $data));
    }
    
}
?>