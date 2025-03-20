<?php 


if(!empty($_SESSION)){


    session_unset();
    session_destroy();

//     setcookie('speudo', '', time() - 3600, "/");
// setcookie('mdp', '', time() - 3600, "/");

    // Redirection vers la page de connexion
    header("Location:".ROOT."/");
    exit();

}