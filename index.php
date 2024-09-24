<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo/estilo.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Home</title>
</head>
<body>
    <?php
        include_once("acoes/mensagens.php");


    ?>
<header >
    
    <div >
        <div class="ani">
            <?php
                
                echo"<div id='bem_vindo'><h3>Bem Vindo {$_SESSION['usr']}</h3></div>" 
                

            ?>
        </div>
        <div id="linkzada">
            <a href="faltas.php" class="a-ani" id="linkE">Faltas</a>

            <a href="alunos.php" class="a-ani" id="linkE">Alunos</a>

            <a href="index.php" id="linkC">Home</a>


            <a href="encerrando.php" class="a-ani" id="linkD">Login</a>

            <a href="adc_ocorrencia.php" class="a-ani" id="linkD" >Ocorrência</a>

        </div>
    </div>

</header>

<section class="spancaixota">
    <div>
        <h1 style="color: red;" >Atenção: Esse é um sistema experimental de gestão escolar!</h1>
    </div>
</section>

<script src="bootstrap/js/form-validation.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>