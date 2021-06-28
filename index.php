<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="http://localhost/Projet_PWA_Design_backend/" >
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="css/app.css"/>
    <link rel="stylesheet" href="css/homePage.css"/>
    <link rel="manifest" href="manifest.json"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Pacifico?query=pacifico">
    <title>Hotellerie</title>
    <script src = "https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
    <script src="./serviceWorker.js"></script>
    <script src="/index.js" defer></script>
    <script src="/js/app.js" defer></script>
  </head>
  <body>
    <header class="homePage">
      <div class="homePage-container">
        <div>
        <a href="#" class="app-logo">Helay</a>
        </div>
        <div class="container">
         <div class="row text-white">
           <h1 class="homePage-text mt-5 mb-5">Welcome to Helay Reservation</h1>
           <div class="col-md-6 mb-5">
              <a class="btn btn-block btn-outline-success w-100 p-3" href="pages/connexion.php">Connectez vous pour reserver</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-block btn-outline-success w-100 p-3" href="pages/inscription.php">Crée un compte</a>        
           </div>
         </div>
       </div>
      </div>
    </header>
  </body>
</html>