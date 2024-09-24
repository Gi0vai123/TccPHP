<?php

    session_start();
    unset($_SESSION['Nao_adicionado']);
    unset($_SESSION['nao_encontrado']);
    unset($_SESSION['msg_erro_adicionar']);
    header('Location: http://localhost/tccphp/alunos.php', true,301);


?>