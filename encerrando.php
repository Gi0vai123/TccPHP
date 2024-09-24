<?php

    session_start();
    session_reset();
    session_destroy();

    header('Location: http://localhost/tccphp/login_in.php');


?>