<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    include('conexao.php');
    
    

    $codigo = $_POST['cod'];
    $nome = $_POST['nomes'];
    $idade = $_POST['idade'];
    $turma = $_POST['ut'];
    $ensino = $_POST['ensino_add'];
    


    $code_adicionar = "INSERT INTO usuario (codigo, nome, idade, Turma_cod ,codigo_ensi ,stts, codigo_tipo_usuario) VALUES ('$codigo', '$nome', '$idade', '$turma', '$ensino', 1, 5)";

    $slq_query = mysqli_query($conexao,$code_adicionar); 
    

    if($slq_query){
        header('Location: alunos.php',true,301);
    } else if(empty($codigo) && empty($nome) && empty($idade)) {
        session_start();    
        $_SESSION['msg_erro_adicionar'];
        header('Location: adicionar.php',true,301);
    } else {
        session_start();    
        $_SESSION['msg_erro_adicionar'];
        header('Location: adicionar.php',true,301);
    }
    
   



?>
</body>
</html>
