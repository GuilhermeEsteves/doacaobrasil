<?php
    require('../repository/baseRepository.php');

    $result = selectQuery("select * from tb_cidades where estado=".$_GET["UF"]);
    if($result){
        echo "<option value=''>Selecione uma cidade</option>";
        while ($row = $result->fetch_array()){
            echo '<option value="'.$row["id"].'">'.$row["nome"].'</option>';
        }
    }


