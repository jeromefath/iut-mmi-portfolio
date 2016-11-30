<?php

//si composer n'est pas utilisé, il faudra inclure l'ensemble des fichiers ajoutés dans src/
//si composer est utilisé, inclure l'autoloader pour charger les classes déclarées dans src/ et les dépendances
include '../vendor/autoload.php';

//déclaration des variables nécessaires aux scripts php
global $database;
global $authentication;

$database = new Database();
$authentication = new Authentication();

/*
on récupère la valeur de la page, par défaut la page "à propos" sera affichée

http://localhost/portfolio/web/index.php?page=contact
http://localhost/portfolio/web/index.php?page=admin/dashboard
*/
$page = 'about';
if( isset($_GET['page']) ) {
    $page = $_GET['page'];
}

//on determine le fichier à inclure
$file = '../pages/' . $page . '.php';

//si le fichier n'existe pas = 404
if(!file_exists($file)) {
    http_response_code(404);
    include '../errors/404.html';
    exit;
}
//si page du backoffice et utilisateur n'est pas "admin" = 403
else if(false !== strpos($page, 'admin/') && !$authentication->isAdmin()) {
    http_response_code(403);
    include '../errors/403.html';
    exit;
}

//inclusion du fichier php
include $file;
