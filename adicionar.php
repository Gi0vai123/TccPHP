<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <section class="spancaixota">
        
        <div class="formu">
            <?php
                if (empty($_POST['reset'])){
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
                     
                    
                
                       
            ?>
            <form action="adicionando.php" method="post" >
                <div>
                    <input type="hidden" name="reset0" id="reset0" value="<?php ?>">
                    <input type="number" name="cod" class="unputers" id="cod" placeholder="ID" required>
                </div>
                <div>
                    <input type="text" name="nomes" class="unputers" id="nomes" placeholder="Nome" required>
                </div>
                <div>
                    <input type="number"  name="idade" class="unputers" id="idade" placeholder="idade" required>
                </div>
                
                <div>
                    <select name="ut" id="ut" class="unputers">
                        <option value="0">Turma A 2º</option>
                        <option value="1">Turma B 2º</option>
                        <option value="2">Turma A 1º</option>
                        <option value="3">Turma B 1º</option>
                        <option value="4">Turma B 3º</option>
                        <option value="5">Turma B 3º</option>
                    </select>
                </div>
                <div>
                    <select name="ensino_add" id="ensino_add" class="unputers">
                        <option value="1">Ensino Medio</option>
                        <option value="2">Fundamental 1</option>
                        <option value="3">Fundamental 2</option>
                    </select>
                </div>

                <button type="submit" class="teusbuttom">Adicionar</button>
            </form>
        </div>   
    </section>
    
</body>
</html>