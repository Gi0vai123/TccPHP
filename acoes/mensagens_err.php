<?php



    if(isset($_SESSION['msg_erro_adicionar']) && $_SESSION['msg_erro_adicionar'] = true){
        echo  " <h3 id='msg_err'>ERRO: O usuario não foi inserido com sucesso</h3>";

    }else{
        $_SESSION['msg_erro_adicionar'] = null;
    }

    if(isset($_SESSION['nao_encontrado']) && $_SESSION['nao_encontrado'] = true){
      echo  $_SESSION['nao_encontrado'] = "<h3 id='nao_en'>Nenhum resultado encontrado</h3>";
    }else{
        echo   $_SESSION['nao_encontrado'] = null;
    }

    if(isset($_SESSION['Nao_adicionado']) && $_SESSION['Nao_adicionado'] = true){
        echo  $_SESSION['Nao_adicionado'] = "<h3 id='n_adc'>Ação mal sucedida </h3>";
        
    }else{
        echo  $_SESSION['Nao_adicionado'] = null;
    }
    
?>