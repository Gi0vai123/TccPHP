<?php
    include('conexao.php');
    session_start();
    
    $trab_nota = $_POST['nots_trab'];

    $sql_veri = "SELECT `numero_trab` FROM `trabalhos` WHERE $_SESSION[cod_perfil]";
    $slq_veri = mysqli_query($conexao ,$sql_veri) or die($conexao->error);
    $row = mysqli_fetch_array($slq_veri, MYSQLI_ASSOC);

    $e = $row['numero_trab'] + 1;  
    
    $sql_trab = "INSERT INTO `trabalhos`(`trabalho_cod_aluno`, `numero_trab`, `nota_trabalho_aluno`) VALUES ('$_SESSION[cod_perfil]','$e','$trab_nota')";
    $slq_trab = mysqli_query($conexao ,$sql_trab) or die($conexao->error);
    
    if($slq_trab){
        header('Location: alunos.php',true,301);
    }
    
?>