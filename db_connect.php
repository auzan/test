<?php
/**
 * insérer ce fichier s'il faut se connecter à la BDD
 * **/
include_once 'sql-config.php';
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
$mysqli -> query("SET CHARACTER SET utf8");

//message d'erreur en cas d'échec
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}