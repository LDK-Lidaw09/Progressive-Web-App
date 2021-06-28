<?php
session_start();

if (isset($_SESSION['email'])) { //Si la variable session a ŽtŽ crŽee
  /*require_once("../Backend-Reservation/conn_db/conn_db.php");

// recuperer id
     
    $sql="SELECT * FROM voitures natural join reservation ";

    $requete=mysqli_query($conn,$sql) or die(mysqli_error($conn));*/

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
    <link rel="stylesheet" href="../css/location.css" />
    <link rel="manifest" href="../manifest.json" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Pacifico?query=pacifico">
    <title>Réservation de Voitures</title>
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
            <a href="#" class="navbar-brand text-uppercase font-weight-bold">
              <img src="../assets/pharma2.jpg" width="50px" alt="">
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Hotel <span class="sr-only"></span></a></li>


                <li class="nav-item"><a href="reservation.php" class="nav-link text-uppercase font-weight-bold">Reservation chambre</a></li>

                <li class="nav-item"><a href="taxi.php" class="nav-link text-uppercase font-weight-bold">Reservation de Taxi</a></li>

                <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Aide?</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    </main> <br> <br>

    <div class="container1">
      <h2 class="w3-jumbo w3-animate-top text-white text-center">Bienvenue sur Helay réservation</h2><br>
      <hr class="w3-border-grey" style="margin:auto;width:40%">
    </div> <br> <br> <br>

    <div id="booking" class="section">
      <div class="section-center">
        <div class="container">
          <div class="row">
            <div class="booking-form">
              <div class="form-header">
                <h1>Louez vos voitures ici!</h1>
              </div>
              <form action="../Backend-Reservation/location.php" method="POST">
                <div class="form-group">
                  <input class="form-control" type="text" id="name" name="name" placeholder="Nom, prenoms ..."> <span class="form-label">Nom</span>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="date" id="date_loc" name="date_loc" required> <span class="form-label">Date de reservation</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="date" id="date_rem" name="date_rem" required> <span class="form-label">Date de remise</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" type="time" id="heure_loc" name="heure_loc" required> <span class="form-label">Heure de loaction</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="form-control" type="time" id="heure_rem" name="heure_rem" required> <span class="form-label">Heure de remise</span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group"> <select id="car" class="form-control" name="voiture" required>
                        <option value="" selected hidden>Voitures</option>
                        <option>Audi 50000/jr</option>
                        <option>Fiat 100000/jr</option>
                        <option>Bentley 500000/jr</option>
                        <option>Porsche 400000/jr</option>
                      </select> <span class="select-arrow"></span> <span class="form-label">Enfants</span> </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group"> <input class="form-control" type="email" id="email" name="email" placeholder="Entrer votre E-mail"> <span class="form-label">Email</span> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group"> <input class="form-control" type="tel" id="tel" name="tel" placeholder="Entrer votre numero de telephone"> <span class="form-label">Phone</span> </div>
                    </div>
                  </div>
                  <div class="form-btn"> <button class="submit-btn">Louer</button> </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php
} else {
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
        body: "Le service de location vous offre une multitude de choix de voitures pour votre séjour.Reserver à votre guise",
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