<?php
    
    require('../repository/baseRepository.php');
    session_start();
    $query = "select u.id, u.nome, t.descricao from doacaobrasil.usuario u, tipoUsuario t where email='{0}' and senha='{1}' and t.id = u.idTipoUsuario";


    $query = str_replace('{0}',$_POST["email"],$query);
    $query = str_replace('{1}',$_POST["password"],$query);
    $result = selectQuery($query);

    if($result->num_rows){
        $_SESSION["usuario"] = $result->fetch_array();
        // print_r ($_SESSION["usuario"]['id']);
        // return;
        require("../views/home.php");
    }
    else{
        echo "<script>alert('E-mail ou senha inválidos.');window.location.href='/doacaobrasil'</script>";
    }