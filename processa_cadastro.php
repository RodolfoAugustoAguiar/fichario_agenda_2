<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $profissao = $_POST["profissao"];
    $salario = $_POST["salario"];
    $experiencia = $_POST["experiencia"];
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Nome: <?= $nome ?></h3>
                <h3>Idade <?= $idade ?></h3>
                <h3>Profissão: <?= $profissao ?></h3>
                <h3>Salário: <?= $salario ?></h3>
                <h3>Experiência: <?= $experiencia ?></h3>
            </div>
        </div>
    </div>    
</body>
</html>








