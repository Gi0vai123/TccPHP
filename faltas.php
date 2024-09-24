<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Estilo/estilo.css">
    <title>Faltas</title>
</head>
<body>

    <header class="volt">

        <a href="acoes/limpamsg.php" >
            
            <button>
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/></svg> Voltar
            </button>
        </a>
        
    </header>

    <section >
    
        
        <div class="formu_faltas">
            
            <form action="adc_faltas.php" method="get">
                <label for="aluno_f" style=" border-bottom: 1px solid; font-size: large; margin-right: 5px; margin-left: 5px;"> Escreva um dos Codigos </label>
                <input type="number" name="aluno_f" id="aluno_f" required>
                <label for="materia_f" style=" border-bottom: 1px solid; font-size: large; margin-right: 5px; margin-left: 5px;"> Materias</label>
                <select name="materia_f" id="materia_f" style="padding: 5px;">
                    <option value="0">Química</option>
                    <option value="1">Matemática</option>
                    <option value="2">Português</option>
                    <option value="3">Biologia</option>
                    <option value="4">Ed.Física</option>
                    <option value="5">Física</option>
                </select>
                
                <label for="data_f" style=" border-bottom: 1px solid; font-size: large; margin-right: 5px; margin-left: 5px;">Dia da falta</label>
                <input type="date"  name="data_f" id="data_f" style="padding: 5px;" placeholder="0000/00/00" required>

                <?php
                    session_start();
                    include_once("acoes/mensagens_err.php");
                    
                    include('conexao.php');
                    $sql_code_todos = "SELECT usuario.codigo, usuario.nome, usuario.idade, turmas.classe_n, ensino.ensino_n ,usuario.stts FROM `usuario`, turmas, ensino WHERE usuario.Turma_cod = turmas.classe_cod AND usuario.codigo_ensi = ensino.ensino_cod";
                    $slq_query_todos = $conexao->query($sql_code_todos) or die($conexao->error);

                    echo "<table  class='table table-striped table-hover'>";
                    echo "  <th>Codigo</th> <th>Nome</th> "; 
                    


                    while($row = mysqli_fetch_array($slq_query_todos, MYSQLI_ASSOC))
                    {
                        echo "<tr>";
                        
                        echo "<td>";
                        echo     $row['codigo'];
                        echo "</td>";
                        echo "<td>";
                        echo     $row['nome'];
                        echo "</td>";
                        
                       
                        echo "</tr>";
                    }
                        echo "</table>";
    

                ?>
                <input type="submit" value="Adicionar" class="bot_sub" style="padding-left: 100px; padding-right: 100px; padding: 10px;">
            </form>
            
        </div>
    </section>
    <section>
            
    </section>
</body>
</html>