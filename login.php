<?php

    include_once("conexao.php");
    session_start();
   # $img = $_POST['imagem'];
    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $botao = $_POST['confirmar'];  

    if(isset($botao)){
            if(empty($_POST['user']) || empty($_POST['senha'])){
                header('Location: http://localhost/tccphp/login_in.php',true,301);
                exit();
            }

            
            $sql_code = "SELECT codigo_usuario, nome, senha FROM usuario_senha where codigo_usuario = $user";
            $slq_query = mysqli_query($conexao, $sql_code);
            $row = mysqli_fetch_array($slq_query);
            if(mysqli_num_rows($slq_query) > 0){

                if (sha1($_POST['senha']) == $row['senha'] ){
                    
                    $_SESSION['usr'] = $row['nome'];
                    $_SESSION['status'] = true;
                    header('Location: http://localhost/tccphp/index.php',true,301);    
                } else
                {
                    
                    $_SESSION['status'] = false;
                    header('Location: http://localhost/tccphp/login_in.php',true,301);
                    
                }
                

            }
            else
            {
                $_SESSION['status'] = false;
                header('Location: http://localhost/tccphp/login_in.php',true,301);
                
            }

            mysqli_close($conexao);
    }


        

/*
                if(($_POST['senha']) == $row['senha'] && $_POST['user'] == $row['codigo_usuario']){
                    session_start();
                    $_SESSION['usr'] = $row['nome'];
                    header('Location: http://localhost/tccphp/index.php',true,301);

                } else {
                    header('Location: http://localhost/tccphp/login.html',true,301);
                    exit();

                } 
*/               
            


?>