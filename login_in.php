<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Estilo/estilo.css">
    <link rel="stylesheet" href="bootstrap/css/form-validation.css">
    <title>login</title>
</head>
<body>
    
    
   <section class="section-login">
        <div>
            <div class="login">
                <form action="login.php" method="post" class="needs-validation" novalidate>
                    
                    <input type="text" name="user" id="user" placeholder="Usuario" required>
                    
                    <input type="password" name="senha" id="senha" placeholder="senha" required>
                    <input type="submit"  id="confirmar" name="confirmar" value="confirmar">
                    <div class="invalid-feedback">
                        <h4 style="text-align: center; border-bottom: 1px solid;">Usuario ou senha não definidos</h4>
                    </div>
                    <?php
                        include_once("acoes/mensagens.php");
                    ?>
                </form>
            </div>
        </div>
        
   </section>
   <script src="bootstrap/js/form-validation.js"></script>
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>