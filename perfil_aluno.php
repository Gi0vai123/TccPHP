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
<header class="volt">

    <a href="alunos.php"><button> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5ZM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5Z"/></svg> Voltar</button></a>
        
</header>
    <?php 
        $codigo_aluno_notas = $_GET['codigo'];
        $nome_aluno_notas = $_GET['nome'];
        $idade_aluno_notas = $_GET['idade'];
        $turma_aluno_notas = $_GET['turma'];
        $ensino_aluno_notas = $_GET['ensino'];
        $status_aluno_notas = $_GET['stat'];
            
        
    ?>
    <section class="caixa_notas" id="perfil_notas">
        
    
        
        
        <div class="perfil">
            <?php
                session_start();
                

                $codigo_aluno = $_GET['codigo'];
                $nome_aluno = $_GET['nome'];
                $idade_aluno = $_GET['idade'];
                $turma_aluno = $_GET['turma'];
                $ensino_aluno = $_GET['ensino'];
                $status_aluno = $_GET['stat'];

                $_SESSION['cod_perfil'] = $codigo_aluno;
                $_SESSION['nome_perfil'] = $nome_aluno;

                echo "<img src='imagens/user.png' alt='Aluno' style='border: 1px solid black;'>";

                echo "<table style='border: 1px solid black;'>";


                    
                echo "<tr><th>Codigo</th> <td>$codigo_aluno</td></tr>";
                echo "<tr><th>Nome</th>   <td>$nome_aluno</td></tr>";
                echo "<tr><th>Turma</th><td>$turma_aluno|$ensino_aluno </td></tr>"; 

                echo "<tr>";
                echo "<th>status</th>";
                echo "<td>";
                echo $status_aluno == 1 ? "ativo":"inativo";
                echo "</td>";
                echo "</table>";    
                echo "</tr>";
                    
            ?>
            
            
        </div>
        <div id="botoes_perfil">
            <div class="img_grupo">
                <h1>Notas</h1>
                <a href="notas_alunos.php"><img src="imagens/Notas.png" alt=""></a>
            </div>
            <div class="img_grupo">
                <h1>Ocorrências</h1>
                <a href="ocorrencias.php"><img src="imagens/ocorrência.png" alt=""></a>
            </div>
        </div>
        
        
    </section>
    
    <!-- <section class="spancaixota">

        <h2>Notas do Aluno</h2>

        <div class="perfil2">
            <table>
                <tr>
                    <th>media</th>
                    <td>media</td>
                </tr>
            </table>

            <table>
                
                
                <th>Primeiro Bimestre</th> <th>Segundo Bimestre</th> <th>Terceiro Bimestre</th>
                <tr>
                    <th>biologia</th> <th>Quimica</th> <th>Matematica</th>
                    <td>nota</td> <td>nota</td> <td>nota</td> 
                </tr>
            </table>
        </div>

        <h2></h2>
        
    </section>
    -->

    
</body>
</html>