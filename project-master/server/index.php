<?php
header('Access-Control-Allow-Origin: *'); // Permite que o front chame o back 
require_once 'conexao.php';
$pessoa = new Pessoa("railway", "containers-us-west-22.railway.app", "root", "vAlVNh3Gkj8Iw3swtPuO");



$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$endreco = $_POST['endereco'];

$pessoa->casdastrarPessoa($nome, $email, $telefone, $idade, $cpf, $endereco);

print_r($_POST);