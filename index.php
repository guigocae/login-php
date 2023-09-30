<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php 
        session_start();
        if($_SESSION["logado"] == 's' && isset($_SESSION["logado"])){?>
        
    <?php
        }
    ?>
</body>
</html>