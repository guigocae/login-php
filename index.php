<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION["logado"]) && $_SESSION["logado"] == 's'){
            echo "<div class='logado'>Olá ".$_SESSION['usuario']." !</div>";?>
            <h2>Projetos</h2>
            <div class="links">
                <a href="./tabuada_php/for.php">Tabuada For</a>
                <a href="./tabuada_php/while.php">Tabuada While</a>
                <a href="./php/logout.php">Sair</a>
            </div>

    <?php        
        } else {?>
            <h2>Login</h2>
            <form action="./php/login.php" method="POST">
                <div class="nome">
                    <label for="nome">Usuário ou E-mail:</label>
                    <input type="text" maxlength="20" name="nome" id="nome" required>
                </div>
                <div class="nome">
                    <label for="nome">Senha:</label>
                    <input type="password" maxlength="20" name="senha" id="senha" required>
                </div>
                <input type="submit" value="Enviar" id="envio">
            </form>
    <?php
        }
        if(isset($_SESSION["erro"]) && $_SESSION["erro"] != ""){
            echo $_SESSION["erro"];
        }
        error_reporting(0);
    ?>
</body>
</html>