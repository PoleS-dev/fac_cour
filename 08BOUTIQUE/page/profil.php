<?php

if (!isset($_SESSION['membre'])) {
    header("Location: " . ROOT . "/"); // 🚀 Redirection vers connexion
    exit();
}


$membre=$_SESSION["membre"];

debug($membre);

