<?php
    include('conexao.php');
    $codigo_aluno = $_GET['codigo'];
    $code_sql = "DELETE FROM usuario WHERE usuario.codigo = $codigo_aluno AND usuario.codigo = 0";
    $slq_query = $conexao->query($code_sql) or die($conexao->error);

    if($slq_query){
        header('Location: alunos.php',true,301);
    }

?>