<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Estilo/estilo.css">
    <title>Document</title>
</head>
<body>
   

    <section class="container">
        <div>
            <?php
                include('conexao.php');

                $materia = ['materia_f'];
                $data = ['data_f'];
                $aluno = ['aluno_f'];

                $sql_existe = "SELECT usuario.codigo FROM `usuario` WHERE usuario.codigo = $aluno";
                $slq_verificar = mysqli_query($conexao ,$sql_existe);
                if(mysqli_num_rows($slq_verificar) >= 1){
                    $sql_faltas_adc = "INSERT INTO `faltas`(`cod_faltas`, `materia_falta`, `data_falta`) VALUES ('$aluno','$materia','$data')";
                    $slq_faltas_adc = mysqli_query($conexao ,$sql_faltas_adc) or die($conexao->error) ;
                    if($slq_faltas_adc){
                    header('Location: alunos.php',true,301);
                    } else {
                        session_start();
                        $_SESSION['Nao_adicionado'] = true;
                        header('Location: faltas.php',true,301);
                    }
                } else {
                    session_start();
                    $_SESSION['Nao_adicionado'] = true;
                    header('Location: faltas.php',true,301);
                }
                
                
                
                

            ?>  
        </div>
    </section>
</body>
</html>