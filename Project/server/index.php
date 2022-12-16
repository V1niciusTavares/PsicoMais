<?php
header('Access-Control-Allow-Origin: *'); // Permite que o front chame o back 
require_once 'conexao.php';
$pessoa = new Pessoa("railway", "containers-us-west-61.railway.app", "root", "qwu7bGHA6LzvFB5bxez1");
$profissional = new Pessoa("railway", "containers-us-west-61.railway.app", "root", "qwu7bGHA6LzvFB5bxez1");



$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];

$pro_nome = $_POST['nome'];
$pro_email = $_POST['email'];
$pro_senha = $_POST['senha'];
$pro_telefone = $_POST['telefone'];
$pro_idade = $_POST['idade'];
$pro_cpf = $_POST['cpf'];
$pro_endereco = $_POST['endereco'];

$pessoa->casdastrarPessoa($nome, $email, $senha, $telefone, $idade, $cpf, $endereco);
$profissional->casdastrarProfissional($pro_nome, $pro_email, $pro_senha, $pro_telefone, $pro_idade, $pro_cpf, $pro_endereco);

print_r($_POST);