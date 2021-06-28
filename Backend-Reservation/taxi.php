<?php
//Appel du fichier de connexion
require_once('./conn_db/conn_db.php');
//Récupération des données par post
$name=htmlentities($_POST['name']);

$date_res=htmlentities($_POST['date_res']);

$heure_res=htmlentities($_POST['heure_res']);

$add_dep=htmlentities($_POST['depart']);

$add_des=htmlentities($_POST['destination']);

$taxi=htmlentities($_POST['taxi']);

$email=htmlentities($_POST['email']);

$tel=htmlentities($_POST['tel']);

//SQL
$sql_ajout = "insert into  taxis values (null,'$name','$date_res','$heure_res','$add_dep','$add_des','$taxi','$email','$tel')";

$query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));

mysqli_close($conn);

header("location:../pages/taxi.php");

session_destroy();//Suppression de toutes les variables session



?>