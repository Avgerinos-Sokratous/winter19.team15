<?php
    session_start();
    if((!isset($_SESSION['authTrainer']))||(!isset($_SESSION['emailTrainer']))){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:https://www.ironsky-app.com/sign-in.php");
    }
    if(!$_SESSION['authTrainer']){
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location:https://www.ironsky-app.com/sign-in.php");
    }
    
?>