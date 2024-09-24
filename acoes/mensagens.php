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
    <?php
        session_start();
        
        if(isset($_SESSION['status'])){
            if( $_SESSION['status'] == true ){
                

                echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong><h2>Ação concluida com sucesso</h2></strong> 
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
                } 
            else {
                echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong><h2>Ação não concluida</h2></strong> 
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                
            } 
            if(isset($_SESSION['status'])){
                unset($_SESSION['status']);
            }
        } 


        
        
        
        




    ?>
    

</body>
</html>
    