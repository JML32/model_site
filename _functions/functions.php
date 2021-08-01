<?php
/**
 * Created by PhpStorm
 *
 * User : Utilisateur
 *
 * Date : 01/08/2021
 *
 * Time : 21:04
 **/

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}