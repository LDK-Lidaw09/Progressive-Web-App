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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="manifest" href="../manifest.json" />
  <link rel="stylesheet" href="https://fonts.google.com/specimen/Pacifico?query=pacifico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Réservation de chambre</title>
  <script src="../js/jquery-3.5.1.js"></script>
  
  <script>
    window.addEventListener('load', () => {
      if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register('../serviceWorker.js')
      }
    })
  </script>
</head>

<body>
  <main>
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Hotel <span class="sr-only"></span></a></li>


                <li class="nav-item"><a href="location.php" class="nav-link text-uppercase font-weight-bold">Location Voiture</a></li>

                <li class="nav-item"><a href="taxi.php" class="nav-link text-uppercase font-weight-bold">Reservation de Taxi</a></li>


                <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Aide?</a></li>
              </ul>
            </div>
        </div>
    </nav>
</header> <br> <br> <br>
    <h2 class="w3-jumbo w3-animate-top text-white text-center">Bienvenue sur Helay Réservation</h2><br> <br>
    <hr class="w3-border-grey" style="margin:auto;width:40%"> 

  </main>
  <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Reservez ici!</h1>
            </div>
            <form action="../Backend-Reservation/reservation.php" method="POST">
              <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="Nom, prenoms ..."> <span
                  class="form-label">Nom</span>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group"> 
                    <input class="form-control" type="date" id="date_arr" name="date_arr"
                      required> <span class="form-label">Date d'arrivée</span> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"> 
                    <input class="form-control" type="date" id="date_dep" name="date_dep"
                      required> <span class="form-label">Date de depart</span> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group"> 
                    <select id="chambre" class="form-control" name="chambre" required>
                      <option value="" selected hidden>Nombres de chambres</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select> <span class="select-arrow"></span> <span class="form-label">Chambres</span> </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group" >
                     <select id="adulte" class="form-control" name="adulte" required>
                      <option value="" selected hidden>Nombres d'adultes</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select> <span class="select-arrow"></span> <span class="form-label">Adultes</span> </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group" > <select id="enfant" class="form-control" name="enfant" required>
                      <option value="" selected hidden>Nombre d'enfants</option>
                      <option>0</option>
                      <option>1</option>
                      <option>2</option>
                    </select> <span class="select-arrow"></span> <span class="form-label">Enfants</span> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group"> <input class="form-control" type="email" id="email" name="email"
                      placeholder="Entrer votre E-mail"> <span class="form-label">Email</span> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"> <input class="form-control" type="tel" id="tel" name="tel"
                      placeholder="Entrer votre numero de telephone"> <span class="form-label">Phone</span> </div>
                </div>
              </div>
              <div class="form-btn"> <button class="submit-btn">Résever</button> </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
}
else{
    echo 'connectez-vous
    <a href="connexion.php" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Appuyer ici pour vous connecter</span>
                        </a>';
}
?> 
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
    <script>
    function showNotification() {
      const notification = new Notification("New message from Helay Reservation!", {
        body: "Le service de reservation des chambres vous offre une multitude de chambres pour votre séjour.Reserver à votre guise",
        icon:"http://localhost/Projet_PWA_Design_backend/images/hotel.jpg",
      });
    }

    if (Notification.permission === "granted") {
      showNotification();


    } else if (Notification.permission !== "denied") {
      Notification.requestPermission().then(permission => {
        if (permission === 'granted') {
          showNotification();
        }

      });
    }
  </script>
</body>

</html>