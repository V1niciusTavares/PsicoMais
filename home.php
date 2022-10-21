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
        echo '<h2>Bem-vindo, '.$_SESSION['login'].'</h2>';
        echo '<a href="?logout">Logout</a>';
        ?>
    </section>
</body>

</html>