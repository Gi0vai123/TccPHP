<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Estilo/estilo.css">
    
    <title>Ocorrencias</title>
</head>
<body>

<header class="volt">

    <a href="alunos.php"><button> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/></svg> Voltar</button></a>

</header>


    <section class="spancaixota" >
        <div class="row">
            <div class="col tabela_cod">
                <?php
                    include('conexao.php');
                    $sql_info_cod = "SELECT `codigo`FROM `usuario`";
                    $slq_info_cod = mysqli_query($conexao ,$sql_info_cod) or die($conexao->error);
                    echo "<table style='width:100%;'>"; 
                    echo "<th>Codigo dos Alunos</th>";
                    while($row = mysqli_fetch_array($slq_info_cod, MYSQLI_ASSOC)){
                         
                        echo "<tr><td>$row[codigo]</td></tr>";  
                    }
                    
                    echo "</table>";
                ?>
                
            </div>
            <div class="ocorre col" >
                <h3 style="text-align: center; border-bottom: 1px solid ;">Ocorrência</h3>
                <form action="ocorrencia_select.php" method="get" class="needs-validation">
                    <label for="nome_ocorre" >Informe codigo do aluno do aluno</label>
                    <input type="number" name="nome_ocorre" id="nome_ocorre" required>
                    <label for="motivo_ocorre">Informe o motivo</label>
                    <input type="hidden" name="reset" id="reset" value="1">
                    <input type="text"  name="motivo_ocorre" id="motivo_ocorre" style=" padding-left: 40px; padding-right: 40px;" required>
                    <input type="submit" value="Registrar">
                    
                    
                </form>
            </div>
        </div>
        
        
        
    </section>
</body>
</html>