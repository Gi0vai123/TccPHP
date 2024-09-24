<?php
    include('conexao.php');

    $n_aluno = $_GET['nome_ocorre'];
    $motivo = $_GET['motivo_ocorre'];

    $sql_faltas_adc = "INSERT INTO `ocorrencias`(`cod_ocorrencia`, `ocorrencia`) VALUES ('$n_aluno','$motivo')";
    $slq_faltas_adc = mysqli_query($conexao ,$sql_faltas_adc) or die($conexao->error) ;

    if($slq_faltas_adc){
        header('Location: alunos.php',true,301);
    } else {
        session_start();    
        $_SESSION['msg_erro_adicionar'] = "ERRO: O usuario não foi inserido com sucesso";
        header('Location: adc_ocorrencia.html',true,301);
    }

?>