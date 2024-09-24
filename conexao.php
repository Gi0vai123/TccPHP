<?php
    $servidor = "localhost";
    $BDD = "gest-escolar";
    $usuario = "Gi0vai123";
    $senha = "lC6/8PLFJW/!aL-)";


    try{
        $conexao = new mysqli($servidor, $usuario, $senha, $BDD);
        
    }catch(Exception $e){
        die("erro na conexão: ".$e->getMessage());
    }

    
    


?>