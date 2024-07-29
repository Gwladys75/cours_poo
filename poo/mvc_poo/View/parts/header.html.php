<!doctype html>
<html lang="en">

<head>
    <title>Mon super site</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">

        <nav class="nav justify-content-center">
            <a class="nav-link" href="<?= url('home') ?>">Accueil</a>
            <a class="nav-link" href="<?= url('about') ?>">A propos</a>
            <a class="nav-link" href="<?= url('afficher-livres') ?>">Tous les livres</a>
            <a class="nav-link" href="<?= url('afficher-abonnes') ?>">Tous les abonnés</a>
        </nav>