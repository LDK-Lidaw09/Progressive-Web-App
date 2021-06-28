<?php 
header('Content-Type: application/json');
//connexion a la base de donnee
require "./conn_db/conn_db.php";

//requette pour la moyenne par matiere
$sql = "select * from users";
//executer la requette
$query = mysqli_query($conn,$sql);
//tableau pour recuperer
$json_utilisateur = [];
//traiter la reponse 
while ($utilisateur = mysqli_fetch_assoc($query)){
$json_utilisateur[] = $utilisateur;  
}
echo json_encode($json_utilisateur);
