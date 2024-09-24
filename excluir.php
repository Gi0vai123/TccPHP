<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/estilo.css">
    <title>Document</title>
</head>
<body>
    
    <section class="spancaixota">
        <div class="deseja_ex">
            <?php

                $nome = $_GET['nome'];
                $codigo_aluno = $_GET['codigo'];

                echo "<h3>deseja escluir o perfil de $nome?</h3>"; 


            ?>
            
            <form action="deletando.php" method="get">
                <input type="hidden" name="codigo" value=<?php echo $codigo_aluno ?>>
                <input type="submit" value="Excluir">
                
            </form>
            <form action="alunos.php" method="post">
                <input type="submit" value="Não">
            </form>
        </div>
        
    </section>
        
        
</body>
</html>