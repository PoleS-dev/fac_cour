<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= ROOT ?>/asset/css/style.css" rel="stylesheet">


</head>

<body>


    <header>


        <nav class=" w-full">


            <ul class="flex gap-10 p-10 justify-center bg-red-400 w-1/2 m-auto">
                <li>
                    <a href="<?= ROOT ?>/home">home </a>
                </li>
                <li>
                    <a href="<?= ROOT ?>/profil">Profil</a>


                </li>
                <li>
                    <?php
                    if (empty($_SESSION)) {

                        echo '<button> <a href="' . ROOT . '/">connexion</a></button>';
                    } else {

                        echo '<button> <a href="' . ROOT . '/deconnexion">Déconnexion</a></button>';
                    }


                    ?>


                </li>

            </ul>


        </nav>

        <?php

        if (!empty($membre)) : ?>
            <h1 class=" text-6xl">Bonjour, <span class=" text-teal-700"><?= htmlspecialchars($membre["pseudo"]); ?></span> !</h1>
        <?php endif ?>

    </header>

    <hr>

    <main class="w-full flex justify-center bg-lime-200  " style="min-height: 80vh;">
        <div class="w-2/3">
            <div class="">