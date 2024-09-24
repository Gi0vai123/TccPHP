
<?php
    include('conexao.php');
    session_start();
    /*$codigo_aluno;
    $nome_aluno ;
    $idade_aluno ;
    $turma_aluno ;
    $ensino_aluno ;
    $status_aluno;*/
    
    $_SESSION['cod_alt'];
    


    $cod_alterado = $_POST['codigo_a'];
    $n_alterado = $_POST['nome_a'];
    $idade_alterado = $_POST['idade_a'];
    $turma_alterado = $_POST['turmas_a'];
    $ensino_alterado = $_POST['ensino_a'];
    $stts = $_POST['ativo_a'];
    
    $sql_msm_cod = "SELECT usuario.codigo FROM `usuario`";
    $slq_procura = "UPDATE usuario SET `codigo`='$cod_alterado',`nome`='$n_alterado',`idade`='$idade_alterado',`Turma_cod`='$turma_alterado',`codigo_ensi`='$ensino_alterado',`stts`='$stts',`codigo_tipo_usuario`='5' WHERE codigo = $_SESSION[cod_alt]";
    $slq_query = mysqli_query($conexao ,$slq_procura) or die($conexao->error);
    $slq_query_msm = mysqli_query($conexao ,$sql_msm_cod) or die($conexao->error);

    if($slq_query){
        
        header('Location: alunos.php');
    } else {
        session_start();    
        $_SESSION['msg_erro_adicionar'] = true;
        header('Location: adicionar.php',true,301);
    }
    
?>

