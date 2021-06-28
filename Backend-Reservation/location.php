<?php
//Appel du fichier de connexion
require_once('./conn_db/conn_db.php');
//Récupération des données par post
$name=htmlentities($_POST['name']);

$date_loc=htmlentities($_POST['date_loc']);

$date_rem=htmlentities($_POST['date_rem']);

$heure_loc=htmlentities($_POST['heure_loc']);

$heure_rem=htmlentities($_POST['heure_rem']);

$voiture=htmlentities($_POST['voiture']);

$email=htmlentities($_POST['email']);

$tel=htmlentities($_POST['tel']);

//SQL
$sql_ajout = "insert into location values (null,'$name','$date_loc','$date_rem','$heure_loc','$heure_rem','$voiture','$email','$tel')";

$query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));

mysqli_close($conn);

header("location:../pages/location.php");

session_destroy();//Suppression de toutes les variables session



?>