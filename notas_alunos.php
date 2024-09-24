<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/estilo.css">
    
    <title>Notas</title>
</head>
<body>

    <header class="volt">

        <a href="alunos.php"><button> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/></svg> Voltar</button></a>
    
    </header>

    <section class="spancaixota">
        <div id="media" >
            <?php 
                include('conexao.php');
                session_start();
                
                $sql_media_p = "SELECT u.nome, numero_trab, nota_trabalho_aluno, n.cod_notas_aluno, n.p1, n.p2, n.p1 + n.p2 = n.media_p, n.soma_trabalhos
                FROM usuario u left join trabalhos t on u.codigo = t.trabalho_cod_aluno
                left join notas n on n.cod_notas_aluno = u.codigo
                WHERE u.codigo = $_SESSION[cod_perfil]";
                $slq_media_p = mysqli_query($conexao ,$sql_media_p) or die($conexao->error);
                

                echo "<table style='width: 60% ;'>";
                echo "<th class='subli'>Aluno</th>";
                
                echo "<tr>"; 
                echo "<td>"; 
                echo $_SESSION['nome_perfil'];
                echo "</td>";                        
                echo "</tr>";

                echo "<table style='width: 60% ;'>";
                echo "<th class='subli'>Trabalhos</th>"; 
                echo "</table>";

                if(mysqli_num_rows($slq_media_p) > 0){
                    while($row = mysqli_fetch_array($slq_media_p, MYSQLI_ASSOC))
                    {
                        echo "<table style='width: 60% ;'>";                          
                        echo "<tr>"; 
                        echo "<td>";
                        echo $row['numero_trab'];
                        echo "</td>";
                        echo "<td>"; 
                        echo $row['nota_trabalho_aluno'];
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td>";
                    echo  "<h3 id='nao_en'>Nenhum trabalho encontrado</h3>";
                    echo "</td>";
                    echo "</tr>";
                }
                
                echo "</table>";

                $codigo_nota_aluno = 0;                        
                echo "<table style='width: 60% ;'>";
                echo "<th class='subli'>P1</th> <th class='subli'>P2</th> <th class='subli'>Media de Provas</th>";
                $slq_media_p = mysqli_query($conexao ,$sql_media_p) or die($conexao->error);
                $_SESSION['tem_nota'] = false;
                while($row = mysqli_fetch_array($slq_media_p, MYSQLI_ASSOC))
                {   
                    if($codigo_nota_aluno != $row['cod_notas_aluno']){
                        $codigo_nota_aluno = $row['cod_notas_aluno'];
                        $_SESSION['tem_nota'] = true;
                        echo "<tr>"; 
                        echo "<td>"; 
                        echo $row['p1'];
                        echo "</td>";
                        echo "<td>"; 
                        echo $row['p2'];
                        echo "</td>";
                        echo "<td>"; 
                        echo $row['p1'] + $row['p2'];
                        echo "</td>";
                        echo "</tr>";
                    }                   
                    
                }
                    echo "</table>";               
           
                echo "</table>";
               
                

            ?>
            
                
            
        </div>
    </section>
    <section class="spancaixota ultimo_blo" >
        <div>
            <a href="adc_nota_trab.php"><button>Adicionar trabalho</button></a>
        </div>
        <div class="notas_t_alter">
            <h2 class="title_h">Adiciona/Altera Notas</h2>
            
            <form action="notas_alter_adc.php" method="post">
                
                <label for="tipo_nota"><h3 class="title_h">Tipo</h3></label>
                <select name="tipo_nota" id="tipo_nota">
                    <option value="0">P1</option>
                    <option value="1">P2</option>
                </select>
                <input type="hidden" name="" value="<?php ?>">
                <label for="trabalho_nota1"><h3 class="title_h">Nota</h3></label>
                <input type="number" name="trabalho_nota1" id="trabalho_nota1" placeholder="0-10" required>
                <label for="materia_nota"><h3 class="title_h">Matéria</h3></label>
                <select name="materia_nota" id="materia_nota">
                    <option value="0">Química</option>
                    <option value="1">Matemática</option>
                    <option value="2">Português</option>
                    <option value="3">Biologia</option>
                    <option value="4">Ed.Física</option>
                    <option value="5">Física</option>
                    
                </select>
                <label for="bim"><h3 class="title_h">Bimestre</h3></label>
                <select name="bim" id="bim">
                    <option value="1">Primeiro Bimestre</option>
                    <option value="2">Segundo Bimestre</option>
                    <option value="3">Terceiro Bimestre</option>
                    <option value="4">Quarto Bimestre</option>
                </select>
                <?php
                    if(isset($_SESSION['tem_nota']) && $_SESSION['tem_nota'] == true){
                        echo "<input type='hidden' name='funcao' value='alt'>";
                        echo "<button type='submit' style='background-color: white; cursor: pointer;'>Alterar</button>";
                    } else {
                        echo "<input type='hidden' name='funcao' value='inc'>";
                        echo "<button type='submit' style='background-color: white; cursor: pointer;'>Adicionar</button>";
                    }
                ?>
            </form>
        </div>
    </section>
</body>
</html>