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
            <form action="trabalho_adc.php" method="post">
                <div>
                    <label for="nots_trab" style=" border-bottom: 1px solid; font-size: large; margin-right: 5px; margin-left: 5px;">Nota do Trabalho</label> <br>
                    <input type="text" name="nots_trab" class="unputers" id="nots_trab" placeholder="0-10" required maxlength="10">
                </div>

                <button type="submit" class="teusbuttom">Adicionar</button>
            </form>
        </div>   
    </section>
    
</body>
</html>