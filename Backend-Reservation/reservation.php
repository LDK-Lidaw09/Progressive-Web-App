<?php
//Appel du fichier de connexion
require_once('./conn_db/conn_db.php');
//Récupération des données par post
$name=htmlentities($_POST['name']);

$date_arr=htmlentities($_POST['date_arr']);

$date_dep=htmlentities($_POST['date_dep']);

$chambre=htmlentities($_POST['chambre']);

$adulte=htmlentities($_POST['adulte']);

$enfant=htmlentities($_POST['enfant']);

$email=htmlentities($_POST['email']);

$tel=htmlentities($_POST['tel']);

//SQL
$sql_ajout = "insert into reservation values (null,'$name','$date_arr','$date_dep','$chambre','$adulte','$enfant','$email','$tel')";

$query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));

mysqli_close($conn);

header("location:../pages/reservation.php");

session_destroy();//Suppression de toutes les variables session



?>