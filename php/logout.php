<?php
    session_start();
    $_SESSION = [];
    session_destroy();
    
    header("Location:https://www.ironsky-app.com/sign-in.php");
?>