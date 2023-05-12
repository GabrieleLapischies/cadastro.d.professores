<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once 'conecta.php';

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $inst = $_POST['inst'];

    $sql = "insert into tb_cadasprof (nome, cpf, email, telefone, instituicao) values ('$nome', '$cpf', '$email', '$tel', '$inst')";

    $res = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    ?>
</body>
</html>