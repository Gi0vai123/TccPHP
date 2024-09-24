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
<section class="spancaixota" >
        
    <div class="resultado" >
        <div id="pergunta">
            <?php
                
                $codigo_aluno = $_GET['codigo'];
                $nome_aluno = $_GET['nome'];
                $idade_aluno = $_GET['idade'];
                $turma_aluno = $_GET['turma'];
                $ensino_aluno = $_GET['ensino'];
                $status_aluno = $_GET['stat'];

                $_SESSION['cod_alt'] = $codigo_aluno;

            
               /*if (empty($_POST['reset'])){
                    $reset = 0;
                    
                } else {
                    $reset = 1;
                }
                    
                if ($reset == 1)
                {
                    $_SESSION['msg_erro_adicionar']="";
                } else if ($reset == 0){
                    echo $_SESSION['msg_erro_adicionar'];
                }
                */
                
               echo "Você vai alterar o aluno $nome_aluno do codigo $codigo_aluno da $turma_aluno $ensino_aluno";
               include_once("acoes/mensagens_err.php");
            ?>
        </div>
        <div>
                <table style="display: inline-block;">
                    <th>Codigo</th> <th>Nome</th> <th>idade</th> 
                    
                       <tr>
                            <form action="alterando.php" method="post">
                                <div>
                                    <tr>
                                        <div>
                                            <td>
                                                <div >
                                                    <input type="number" name="codigo_a" id="codigo_a" class="tabela-input" placeholder="codigo" required>
                                                </div>
                                                
                                            </td>
                                            <td>
                                                <div >
                                                    <input type="text" name="nome_a" id="nome_a" class="tabela-input" placeholder="Nome" required>
                                                </div>
                                                
                                            </td>
                                            <td>
                                                <div >
                                                    <input type="number" name="idade_a" id="idade_a" class="tabela-input" placeholder="idade" required>
                                                </div>
                                                
                                            </td>
                                        </div>
                                    </tr>
                                        <th>Turmas</th> <th>Ensino</th> <th>Status</th>
                                    <tr>
                                                    <div >
                                                        <td>
                                                            <div >
                                                                <select name="turmas_a" id="turmas_a">
                                                                <option value="0">Turma A 2º</option>
                                                                <option value="1">Turma B 2º</option>
                                                                <option value="2">Turma A 1º</option>
                                                                <option value="3">Turma B 1º</option>
                                                                <option value="4">Turma A 3º</option>
                                                                <option value="5">Turma B 3º</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </td>
                                                        <td>
                                                            <div >
                                                                <select name="ensino_a" id="ensino_a">
                                                                    <option value="1">Ensino Medio</option>
                                                                    <option value="2">Fundamental 1</option>
                                                                    <option value="3">Fundamental 2</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </td>
                                                        
                                                        <td>
                                                            <div >
                                                                <select name="ativo_a" id="ativo_a">
                                                                    <option value="0">Desativado</option>
                                                                    <option value="1">Ativo</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </td>
                                                        
                                                        <input type="hidden" name="aluno_cod" id="aluno_cod" value=<?php $codigo_aluno ?>>
                                                        <div id="but_alterar">
                                                            <input type="submit" name="alterar_a" id="alterar_a" value="Alterar" style=" margin: 3px;   background-color: yellow; border-color: rgb(194, 194, 1); cursor:pointer; padding: 10px; width: 100px;">
                                                            <a href="pag_opc_alterar.php"><button type="button" style="cursor:pointer;  padding: 10px; width: 100px; margin: 3px; justify-content: flex-end;" >Voltar</button></a>

                                                        </div>
                                                    </div>
                                                
                                                
                                            </div>
                                                
                                                
                                            
                                        
                                            
                                            
                                            
                                        
                                    </tr>
                            </form>           
                                    
                                        
                       </tr>
                        
                        
                    


                </table>
        </div>
    </div>
        
</section>


    
</body>
</html>