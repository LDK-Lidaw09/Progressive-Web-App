<?php
session_start();

if(isset($_SESSION['email'])){//Si la variable session a ŽtŽ crŽee
  
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="manifest" href="../manifest.json" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Pacifico?query=pacifico">
    <title>Accueil</title>
    <script>
      window.addEventListener('load', () => {
        if("serviceWorker" in navigator){
          navigator.serviceWorker.register('../serviceWorker.js')
        }
      })
    </script>
    <script src="/index.js" defer></script>
  </head>
  <body>
    <!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a href="#" class="navbar-brand text-uppercase font-weight-bold">
                <img src="../images/hotel.jpg" width="50px" alt="">
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Hotel <span class="sr-only"></span></a></li>

                <li class="nav-item"><a href="reservation.php" class="nav-link text-uppercase font-weight-bold">Reservation de Chambres</a></li>

                <li class="nav-item"><a href="location.php" class="nav-link text-uppercase font-weight-bold">Location Voiture</a></li>

                <li class="nav-item"><a href="taxi.php" class="nav-link text-uppercase font-weight-bold">Reservation de Taxi</a></li>

                <li class="nav-item"><a href="../Backend-Reservation/deconn_client.php" class="nav-link text-uppercase font-weight-bold">Deconnexion</a></li>

                <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Aide?</a></li>
              </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Affichage à propos-->
<div class="container" >
    
    <div class="pt-5" style="margin-top: 150px">
    <div class="row">
        <div class="container">
            <h1 class="text-uppercase" style="margin-left: 40%">Helay reservation</h1>
            <div class="container-fluid">
                <p>
                    BIENVENUE/WELCOME sur la plateforme en ligne de notre hôtel Helay reservation !!<br> Cette plateforme vous offre une miltitude de choix qui passent par la reservation de chambres, voitures et autres ;
                   durant sejour . <br> Un accès garantie, une bonne experience utilisateur et une sécurité à toutes épreuves ; sans pour autant oublier une disponibilité h24 ainsi que sa disponibilité sur téléphone pour une expérience magnifique. 
                    Profitez de ce site!! Merci.

                </p>
            </div>


            <hr class="my-5">
        </div>
    </div>
        <div class="col-lg-11 mx-auto">
            <div class="row">
                <h1 class="text-uppercase" style="margin-left: 40%">Nos offres</h1>
            </div>
        <!-- Body ===================================-->
        <div class="row py-5">
            <div class="col-lg-4 mb-1">
            <figure class="rounded p-3 bg-white shadow-sm">
                <img src="../images/telo.jpg" alt="" class="w-100 card-img-top">
                <figcaption class="p-4 card-img-bottom">
                <h2 class="h5 font-weight-bold mb-2 font-italic">Reservation de chambres</h2>
                <p class="mb-0 text-small text-muted font-italic">Cher client nous vous souhaitons la bienvenue. Helay vous offre une multitude d'offres de chambres qui on l'espère seront vous satisfaire. Appuyer sur le boutton ci-dessous pour faire votre choix. </p>
                </figcaption> 
                <div style="margin-left: 80px" class="container-fluid">
                    <a href="reservation.php" class="btn btn-primary">Basculer</a>
                </div>

            </figure>
            </div>
            <div class=" col-lg-4 ">
            <figure class="rounded p-3 bg-white shadow-sm">
                <img src="../images/mustang.jpg" alt="" class="w-100 card-img-top">
                <figcaption class="p-4 card-img-bottom">
                <h2 class="h5 font-weight-bold mb-2 font-italic">Location Voitures</h2>
                <p class="mb-0 text-small text-muted font-italic">Cher Client, vous êtes desireux d'avoir une voiture personnelle durant votre séjour? Helay met à votre disposition des voitures de haute gammes à des prix abordables. <br> Cliquez sur le boutton ci-dessous pour acceder au pannel.</p>
                </figcaption>
                <div style="margin-left: 80px" class="container-fluid">
                <a href="location.php" class="btn btn-primary">Basculer</a>
                </div>
            </figure>
            </div>
            <div class="col-lg-4">
            <figure class="rounded p-3 bg-white shadow-sm">
                <img src="../images/taxi1.jpg" alt="" class="w-100 card-img-top">
                <figcaption class="p-4 card-img-bottom">
                <h2 class="h5 font-weight-bold mb-2 font-italic">Reservation de Taxis</h2>
                <p class="mb-0 text-small text-muted font-italic">A la recherche de taxis pour faciliter vos deplacements? Vôtre hôtel vous met à disposition des taxis aux prix très raisonables. Cliquez sur ce boutton pour en reserver.</p>
                </figcaption>
                <div style="margin-left: 80px" class="container-fluid">
                    <a href="taxi.php" class="btn btn-primary">Basculer</a>
                </div>
            </figure>
            </div>
        </div>

 
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 10 ) {
                    $('.navbar').addClass('active');
                } else {
                    $('.navbar').removeClass('active');
                }
            });
        });
    </script>
    <?php 
}
else{
    echo 'connectez-vous
    <a href="connexion.php" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Appuyer ici pour vous connecter</span>
                        </a>';
}
?>   
  </body>
</html>