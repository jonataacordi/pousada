<?php

$link = mysqli_connect("sql305.infinityfree.com", "epiz_32105617", "PCPeritoFederal", "epiz_32105617_controle");
//$link = mysqli_connect("localhost", "root", "", "controle");
if(!$link){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  
?>