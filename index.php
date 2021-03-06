<?php
/**
 * Created by PhpStorm
 *
 * User : Utilisateur
 *
 * Date : 01/08/2021
 *
 * Time : 20:44
 **/



// paramétrage nouveau projet/site
// penser à mettre à jour la base de données dans _config /config.php partie base de données
// créer les pages .php dans les dossiers views, models et controllers

// Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_functions/functions.php';


// Définition de la page courante

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}


// Tableau contenant toutes les pages
$allPages = scandir('controllers/');

// Vérification de l'existence de la page
if (in_array($page.'_controller.php', $allPages)) {

    // Connexion à la base de données
    include_once '_config/db.php';

    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';

} else {

    // Inclusion de la page erreur
    include_once 'models/error_model.php';
    include_once 'controllers/error_controller.php';
    include_once 'views/error_view.php';

}