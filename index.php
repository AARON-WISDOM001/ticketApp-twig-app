<?php
require_once 'vendor/autoload.php';

// Set up Twig loader
$loader = new \Twig\Loader\FilesystemLoader('templates');

// Create Twig environment
$twig = new \Twig\Environment($loader, [
    'cache' => false, // disable cache for development
]);

// Render template
echo $twig->render('home.html.twig', [
    'name' => 'Aaron de wizard',
]);
