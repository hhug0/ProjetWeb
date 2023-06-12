<?php 
    session_start(); // demarrage de la session
    session_unset(); // on unset la/les session(s)
    header('Location:index.php'); // On redirige
    die();