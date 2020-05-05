<?php
    session_start();
    if((!isset($_SESSION['auth']))||(!isset($_SESSION['email']))){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:https://www.ironsky-app.com/sign-in.php");
    }
    if(!$_SESSION['auth']){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:https://www.ironsky-app.com/sign-in.php");
    }
    
?>