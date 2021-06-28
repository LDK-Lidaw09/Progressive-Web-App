<?php
session_start();
if(isset($_SESSION['email'])){//Si la variable session a ŽtŽ crŽee
    header("location:../pages/index.php");
     exit();
 }

if(isset($_POST['Bconn'])){//SI on clique sur le bouton connexion
    //Appel du fichier de connexion la bd
    require_once('conn_db/conn_db.php');
    //RŽcupŽration des donnŽes par la méthode POST
    $email_client=$_POST['login'];
    $mdp_client=$_POST['password'];
    
    //DŽfinition de la requte de selection
    $sql_auth = "SELECT * FROM users WHERE email = '$email_client' AND password= '$mdp_client' ";
    $query_auth=mysqli_query($conn,$sql_auth) or die(mysqli_error($conn));
    $auth=mysqli_fetch_array($query_auth,MYSQLI_ASSOC);
    
    if(isset($auth['id'])){//Si l'authentification est correcte
        //CrŽation d'une variable session
        $_SESSION['email']=$email_client;
        $_SESSION['login']= $_POST['login'];
        $_SESSION['id'] = $auth['id'];
        header("location:../pages/index.php");
       
        exit();
    }

  else{
      echo 'Vos identifiants sont incorrects';
  }
}

?>
