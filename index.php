<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psico+</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Psico+</h1>
    </header>

    <section>
        <?php
        if (!isset($_SESSION['login'])) {

            if (isset($_POST['entrar'])) {
                $login = 'admin';
                $senha = '123456';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if ($login == $loginForm && $senha == $senhaForm) {
                    // logado
                    $_SESSION['login'] = $login;
                    header('location: index.php');

                } else {
                    // deu errado
                    echo 'dados inválidos.';
                }
            }

            include('login.php');
        } else {
            if (isset($_GET['logout'])) {
                unset($_SESSION['login']);
                session_destroy();
                header('location: index.php');
            }
            include('home.php');
        }
        ?>

    </section>

    <footer>
        <p>&copy; LoremIpsumDolor</p>
    </footer>
</body>

</html>