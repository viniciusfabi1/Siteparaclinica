<?php   

    session_start();

    unset(
        $_session['usuario'],
        $_session['senha'],
    );

    header("Location: index.php");

    ?>