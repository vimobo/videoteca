<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi videoteca</title>
</head>
<body>
<header>
    <p><a href="<?='peliculas'?>"><strong>Mi videoteca</strong></a></p>
    <nav>
        <ul>
            <li><a href="<?= BASE_URL . ('peliculas') ?>">Catálogo</a></li>
            <li><a href="<?= BASE_URL . ('peliculas/mias') ?>">Mis películas</a></li>
            <li><a href="<?= BASE_URL . ('perfil') ?>">Perfil</a></li>
            <li><a href="<?= BASE_URL . ('logout') ?>">Salir</a></li>
        </ul>
    </nav>
</header>
<main>
