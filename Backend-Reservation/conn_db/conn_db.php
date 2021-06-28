<?php
//Adresse du server
$server = 'localhost';
//Nom de l'utilisateur de la base de donnée
$user = 'root';
//Mot de passe de l'utilisateur
$pwd = '';
//Nom de la base de donnee
$db = 'reservation';
//Connexion au serveur MySQL et a la base de donnée
$conn = mysqli_connect($server,$user,$pwd,$db) or die('echec'.mysqli_connect_error());
