

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Estilo/estilo.css">
    <title>Alunos</title>
</head>
<body>
    

<header >
    
    <div >
        <div class="ani">
            <?php
                session_start();
                echo"<div id='bem_vindo'><h3>Bem Vindo {$_SESSION['usr']}</h3></div>" 


            ?>
        </div>
        <div id="linkzada">
                <a href="alunos.php" class="a-ani" id="linkE">Alunos</a>

                <a href="index.php" id="linkC">Home</a>


                <a href="encerrando.php" class="a-ani" id="linkD">Login</a>

        </div>
    </div>

</header>


<section class="caixa">
        <section class="pesquisa">
            <div>
                <form action="alunos.php" method="get" >
                    <select name="category" id="category">
                        <option value="0">Todos</option>
                        <option value="1">Turma A Ensino Medio</option>
                        <option value="2">Turma B Ensino Medio</option>
                    </select>
                    <input type="submit" value="Filtrar" >
                </form>
            </div>
        
        
            <div id="barra-pes">
                <form action="procura_barra_pes.php" method="post">
                    <input type="text" placeholder="Procurar Por Nome"  name="alunos" id="alunos">
                </form> 
            </div>      
       
        
                <div class="interar" >

                    <form action="adicionar.php" method="post">
                        <input type="hidden" name="tipo_usuario" value="<?php $_POST['category'] ?>">
                        <input type="submit" value="Adicionar" id="alterar">
                    </form>

                </div>
                <div class="interar" >
                    <form action="pag_opc_excluir.php" method="post">
                        

                        <input type="submit" value="Excluir" name="excluir" id="excluir">
                    </form>
                    
                </div>
                <div class="interar" >
                    <form action="pag_opc_alterar.php" method="post">
                        

                        <input type="submit" value="Alterar" name="alterar" id="adicionar">
                    </form>
                    
                </div>
                
    </section>


<section class="caixa">

    <div class="resultado">
        <?php
            include('conexao.php');
            $procura = $_POST['alunos'];

            $sql_procura = "SELECT * FROM `usuario` WHERE nome LIKE '%$procura%'";
            $slq_query = mysqli_query( $conexao,$sql_procura) or die($conexao->error);

            if ($sql_procura){
                echo "<table>";
                echo " <th>Codigo</th> <th>Nome</th> <th>idade</th> <th>Status</th> <th>Função</th>"; 
                
                while($row = mysqli_fetch_array($slq_query, MYSQLI_ASSOC))
                {
                    echo "<tr>";

                    echo "<td>";
                    echo     $row['codigo'];
                    echo "</td>";
                    echo "<td>";
                    echo     $row['nome'];
                    echo "</td>";
                    echo "<td>";
                    echo     $row['idade'];
                    echo "</td>";
                    echo "<td>";
                    echo     $row['stts'] == 1 ? "ativo":"inativo";
                    echo "</td>";
                    echo "<td>";
                    echo    $row['codigo_tipo_usuario'];
                    echo "</td>";

                    echo "</tr>";
                }
                    echo "</table>";
            } else {
                $_SESSION['nao_encontrado'];
            }
        ?>
    </div>

</section>


</body>
</html>


