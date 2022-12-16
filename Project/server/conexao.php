<?php
class Pessoa
{

    private $pdo;

    public function __construct($dbname, $host, $user, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:port=7114;dbname=" . $dbname . ";host=" . $host, $user, $senha);
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

    public function casdastrarPessoa($nome, $email, $senha, $telefone, $idade, $cpf, $endereco)
    {
        print_r($endereco);
        print_r($nome);
        $cmd = $this->pdo->prepare("SELECT id from cliente WHERE email = :e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();
        if ($cmd->rowCount() > 0) {
            return false;
        } else {
            $cmd = $this->pdo->prepare("INSERT INTO cliente (nome, email, senha, telefone, idade, cpf, endereco) VALUES (:n, :e, :s, :t, :i, :c, :o)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":e", $email);
            $cmd->bindValue(":s", $senha);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":i", $idade);
            $cmd->bindValue(":c", $cpf);
            $cmd->bindValue(":o", $endereco);
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
    public function casdastrarProfissional($pro_nome, $pro_email, $pro_senha, $pro_telefone, $pro_idade, $pro_cpf, $pro_endereco)
{

    $cmd = $this->pdo->prepare("SELECT pro_id from profissional WHERE
    pro_email = :b");
    $cmd->bindValue(":b", $pro_email);
    $cmd->execute();
    if ($cmd->rowCount() > 0) {
        return false;
    } else {
        $cmd = $this->pdo->prepare("INSERT INTO profissional (pro_nome, pro_email, pro_senha, pro_telefone, pro_idade, pro_cpf, pro_endereco) VALUES (:a, :b, :z, :f, :u, :l, :p)");
        $cmd->bindValue(":a", $pro_nome);
        $cmd->bindValue(":b", $pro_email);
        $cmd->bindValue(":z", $pro_senha);
        $cmd->bindValue(":f", $pro_telefone);
        $cmd->bindValue(":u", $pro_idade);
        $cmd->bindValue(":l", $pro_cpf);
        $cmd->bindValue(":p", $pro_endereco);
        $cmd->execute();
        return true;
    }
}
}

