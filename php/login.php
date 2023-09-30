<?php 
    session_start();
    $login = $_POST["nome"];
    $senha = $_POST["senha"];

    if($login === "Guilherme" && $senha === "311095"){
        $_SESSION["usuario"] = $login;
        $_SESSION["logado"] = 's';
        $_SESSION["erro"] = "";
    } else {
        $_SESSION["erro"] = "<span class='incorreto'>Usuário ou senha incorretos</span>";
    }
    header("Location: ../index.php");
?>