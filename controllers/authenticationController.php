<?php
    
    require('../repository/baseRepository.php');
    session_start();
    $query = "select * from doacaobrasil.usuario where email='{0}' and senha='{1}'";


    $query = str_replace('{0}',$_POST["email"],$query);
    $query = str_replace('{1}',$_POST["password"],$query);
    $result = selectQuery($query);

    if($result->num_rows){
        $_SESSION["nomeUsuario"] = $result->fetch_array()["nome"];
        $_SESSION["tipoUsuario"] = $result->fetch_array()["tipoUsuario"];
        $nomeUsuario = $_SESSION["nomeUsuario"];
        $tipoUsuario = $_SESSION["tipoUsuario"];
        $idUsuario = $_SESSION["idUsuario"];
        require("../views/home.php");
    }
    else{
        echo "<script>alert('E-mail ou senha inválidos.');window.location.href='/doacaobrasil'</script>";
    }