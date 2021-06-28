s<?php
//Appel du fichier de connexion
require_once('./conn_db/conn_db.php');
//Récupération des données par post
$name=htmlentities($_POST['name']);

$email=htmlentities($_POST['email']);

$password=htmlentities(sha1($_POST['password'])); 

$conf_mdp=htmlentities(sha1($_POST['passConf'])); 


if ($password == $conf_mdp) {

$sql_ajout = "insert into users values (null,'$name','$email','$password')";

$query_ajout=mysqli_query($conn,$sql_ajout) or die(mysqli_error($conn));

mysqli_close($conn);

header("location:../pages/index.php");

session_destroy();//Suppression de toutes les variables session
}



?>