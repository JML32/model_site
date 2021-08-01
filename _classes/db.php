<?php
/**
 * Created by PhpStorm
 *
 * User : Utilisateur
 *
 * Date : 01/08/2021
 *
 * Time : 21:06
 **/
/**
 * Class DB
 * Allows you to make requests easier than before by using PDO
 *
 * Created by Axel Paris (contact@axelparis.fr)
 */
class Db{
    private $db;
    /**
     * Connect to the database
     * @param $dbhost
     * @param $dbname
     * @param $dbuser
     * @param $dbpswd
     */
    public function __construct($dbhost, $dbname, $dbuser, $dbpswd){
        $this->db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser, $dbpswd);
    }

    /**
     * Define the fetchMode
     * @param int $fetchMode fetchMode
     */
    public function setFetchMode($fetchMode){
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, $fetchMode);
    }
}