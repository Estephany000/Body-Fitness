<?php 
require("acoes/conexao.php");

class Atualizar{
    private $id;
    private $nome;
    private $desc;
    private $valor;
    private $file;
    private $conn;

    public function __construct($id, $nome, $desc, $valor, $file)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->desc = $desc;
        $this->valor = $valor;
        $this->file = $file;
        $this->conn = new Conexao();
    }

    public function atualizar(){
        $extenso = strtolower(substr($this->file['name'], -4));
        $novoName = md5(time()).$extenso;
        $diretorio = "uploads/";
        $data = date('Y-m-d H:i:s');
        move_uploaded_file($this->file['tmp_name'], $diretorio.$novoName);

        $query = $this->conn->conectar()->prepare("UPDATE produtos SET nome = ?, descricao = ?, preco = ?, arquivo = ?, data = ? WHERE id = ?;");
        $query->execute(array($this->nome, $this->desc, $this->valor, $novoName, $data, $this->id));
    }

    public function deletar(){
        $query = $this->conn->conectar()->prepare("DELETE FROM produtos WHERE id = ?;");
        $query->execute(array($this->id));
    }
    
}
?>