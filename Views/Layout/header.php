<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi videoteca</title>
</head>
<body>
<header>
    <p><a href="<?= e(url('peliculas')) ?>"><strong>Mi videoteca</strong></a></p>
    <nav>
        <ul>
            <li><a href="<?= e('peliculas') ?>">Catálogo</a></li>
            <li><a href="<?= e('peliculas/mias') ?>">Mis películas</a></li>
            <li><a href="<?= e('perfil') ?>">Perfil</a></li>
            <li><a href="<?= e('logout') ?>">Salir</a></li>
            <li><a href="<?= e('showLogin') ?>">Login</a></li>
        </ul>
    </nav>
</header>
<main>
