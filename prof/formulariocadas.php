<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
<header>
        <div>
            <p>Sistema de Cadastro de Professores</p>
        </div>
    </header>
    <nav class="naveg">
            <div>
                <p class="cnaveg"><a href="formulariocadas.php">Cadastrar professor</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="visualizar_cadastro.php">Visualizar cadastro</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="index.php">Página inicial</a></p>
            </div>
        </nav>
    <section class="sect">
    <div class="conteudo">
    <form id="formc" action="cadastrar_prof.php" method="post">
        <p class="p1"> Formulário de cadastro de professores </p>

        <label> Nome: <input name="nome" type="text" id="nomeprof"></label><br>
        <label> CPF: <input name="cpf" type="text" id="cpfprof"></label><br>
        <label> Email: <input name="email" type="text" id="emailprof"></label><br>
        <label> Telefone: <input name="tel" type="text" id="telprof"></label><br>
        <label> Instituição: <input name="inst" type="text" id="instprof"></label><br>
        
        <input name="cad" type="submit" id="cadprof" value="Cadastrar">
        <input name="limp" type="reset" id="limp" value="Limpar">
    </form>
    </div>
    </section>
    
</body>
</html>