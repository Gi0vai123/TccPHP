<?php
    session_start();
    include('conexao.php');
    $tipo_av = $_POST['tipo_nota'];
    $notas_t = $_POST['trabalho_nota1'];
    $mat_tab = $_POST['materia_nota'];
    $funcao = $_POST['funcao'];
    $bim = $_POST['bim'];




    if($funcao == "alt"){
        if($tipo_av == 0){
            $sql_p1 = "UPDATE notas SET `p1`= $notas_t WHERE notas.cod_notas_aluno = $_SESSION[cod_perfil]";
            $slq_p1 = mysqli_query($conexao ,$sql_p1) or die($conexao->error);

            if($slq_p1){
                header('Location: http://localhost/tccphp/notas_alunos.php');
            }
        } else if ($tipo_av == 1){
            $sql_p2 = "UPDATE notas SET `p2`= $notas_t WHERE notas.cod_notas_aluno = $_SESSION[cod_perfil]";
            $slq_p2 = mysqli_query($conexao ,$sql_p2) or die($conexao->error);
            if($slq_p2){
                header('Location: http://localhost/tccphp/notas_alunos.php');
            }
        } 

    }else {
        if($tipo_av == 0){
            $sql_p1 = "INSERT INTO notas(cod_notas_aluno, cod_notas_materias,notas_bim ,p1 )VALUES ($_SESSION[cod_perfil], $mat_tab,$bim, $notas_t)";
            $slq_p1 = mysqli_query($conexao ,$sql_p1) or die($conexao->error);

            if($slq_p1){
                header('Location: http://localhost/tccphp/notas_alunos.php');
            }
        } else if ($tipo_av == 1){
            $sql_p2 = "INSERT INTO notas(cod_notas_aluno, cod_notas_materias,notas_bim ,p2 )VALUES ($_SESSION[cod_perfil], $mat_tab,$bim, $notas_t)";
            $slq_p2 = mysqli_query($conexao ,$sql_p2) or die($conexao->error);
            if($slq_p2){
                header('Location: http://localhost/tccphp/notas_alunos.php');
            }
        } 
    }
    
    



?>