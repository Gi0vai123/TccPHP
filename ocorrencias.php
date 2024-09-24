<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Estilo/estilo.css">
    <title>Document</title>
</head>
<body>

<header class="volt">

    <a href="alunos.php"><button> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/></svg> Voltar</button></a>
        
</header>
    
<section class="ocorrencia" >
    <div class="row">
        
        <div  class="col1">
            <h2 style=" text-align: center; border-bottom: 1px solid;">Ocorrência</h2>
            
        </div>
        <div class="spancaixota oco" >
            <?php
                session_start();
                include_once('conexao.php');
                $sql_avisos = "SELECT `ocorrencia` FROM `ocorrencias` WHERE ocorrencias.cod_ocorrencia = $_SESSION[cod_perfil]";
                $slq_avisos = mysqli_query($conexao ,$sql_avisos) or die($conexao->error);
                if(mysqli_num_rows($slq_avisos) >= 1){
                    echo "<table style='display: inline-block;'>";
                    while($row = mysqli_fetch_array($slq_avisos, MYSQLI_ASSOC)){
                        
                        echo "<tr><td>$row[ocorrencia]</td></tr>";  
                    }
                    echo "</table>";
                } else {
                  echo  "<h3>Nenhuma ocorrência</h3>";
                }
                
            ?>
        </div>
        <div  class="col1">
            <h2 style=" text-align: center; border-bottom: 1px solid;">Faltas</h2>
            
        </div>
        <div class="spancaixota">
            <?php 
                include_once('conexao.php');
                $sql_faltas = "SELECT `cod_faltas`, materias.n_materia , `data_falta` FROM `faltas`, materias WHERE faltas.materia_falta = materias.cod_materia AND cod_faltas = $_SESSION[cod_perfil]";
                $slq_faltas = mysqli_query($conexao ,$sql_faltas) or die($conexao->error);
                if(mysqli_num_rows($slq_faltas) >= 1){
                    echo "<table>";
                    while($row = mysqli_fetch_array($slq_faltas, MYSQLI_ASSOC)){
                        
                        echo "<tr><td>$row[n_materia]</td><td>$row[data_falta]</td></tr>";  
                    }
                    echo "</table>";
                } else {
                  echo  "<h3>Nenhuma ocorrência</h3>";
                }
            ?>
        </div>
        
        
    </div>
    
</section>



</body>
</html>