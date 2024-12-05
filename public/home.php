<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?= $title; ?></title>
</head>
<body>
    <h1>Home</h1>
    <h2>Bem Vindo, <?= $firstName ?>!</h2>
    <hr>
    <h2>Infos: </h2>
    <h5>Nome Completo:</h5>
    <p><?= $firstName.' '.$lastName ?></p>
    <h5>Sexo:</h5>
    <p><?= $sex ?></p>
    <h5>Data de Nascimento:</h5>
    <p><?= $born ?></p>
    <h5>Bio:</h5>
    <p><?= $bio ?></p>

</body>
</html>