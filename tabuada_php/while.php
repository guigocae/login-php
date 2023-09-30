<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada While</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        session_start();
        if($_SESSION["logado"] == 's' && isset($_SESSION["logado"])){
            echo "<div class='logado'>Olá ".$_SESSION['usuario']." !</div>";
        }
    ?>
    <h1>Tabuada While</h1>
    <form action="while.php" method="get" class="form">
        <div class="numero">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" max="100" min="1" required id="numero">
        </div>
        <input type="submit" value="Enviar" id="enviar">
    </form>
    <div class="tabuada">
        <?php
            error_reporting(0);

            $numero = $_GET["numero"];
            $potencia = 1;
            $resultado = 0;
            if($numero == null){?>
                <span class="texto">Envie um número e veja sua tabuada</span>
            <?php    
            } else{
                while($potencia <= 10){
                    $resultado = $potencia*$numero;
                    echo "$potencia X $numero = $resultado<br>";
                    $potencia++;
                }
            }
        ?>
    </div>
</body>
</html>