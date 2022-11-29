<?php
class Pessoa
{

    private $pdo;

    public function __construct($dbname, $host, $user, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:port=5609;dbname=" . $dbname . ";host=" . $host, $user, $senha);
        } catch (PDOException $e) {
            echo "erro com banco de dados: " . $e->getMessage();
            exit();
        } catch (PDOException $e) {
            echo "erro generico: " . $e->getMessage();
            exit();
        }
    }


    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM cliente ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function casdastrarPessoa($nome, $email, $telefone, $idade, $cpf, $endereco)
    {

        $cmd = $this->pdo->prepare("SELECT id from cliente WHERE
        email = :e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();
        if ($cmd->rowCount() > 0) {
            return false;
        } else {
            $cmd = $this->pdo->prepare("INSERT INTO cliente (nome, email, telefone, idade, cpf, endereco) VALUES (:n, :e, :t, :i, :c, :en)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":e", $email);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":i", $idade);
            $cmd->bindValue(":c", $cpf);
            $cmd->bindValue(":en", $endereco);
            $cmd->execute();
            return true;
        }
    }

    public function excluirPessoa($id)
    {

        $cmd = $this->pdo->prepare("DELETE FROM cliente WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    public function buscarDadosPessoa($id)
    {

        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM cliente WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    // public function atualizarDados($id, $nome, $telefone, $email)
    // {

    //     $cmd = $this->pdo->prepare("UPDATE cliente SET nome = :n, telefone = :t, email = :e WHERE id = :id");
    //     $cmd->bindValue(":n", $nome);
    //     $cmd->bindValue(":t", $telefone);
    //     $cmd->bindValue(":e", $email);
    //     $cmd->bindValue(":id", $id);
    //     $cmd->execute();
    // }
}
