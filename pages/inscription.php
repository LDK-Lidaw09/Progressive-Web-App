<!DOCTYPE html>
<html>

<head>
  <title>Inscription</title>
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" href="../css/loginPage.css">
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
  <header class="loginPage">
    <div class="container">
      <div class="d-flex">
        <a href="../index.php" class="app-logo app-logo-resize">Helay</a>
      </div>
      <div class="login-content">
        <form action="../Backend-Reservation/inscription.php" method="POST">
          <img src="../images/avatar.svg">
          <h2 class="title">Inscription</h2>
          <div class="input-div one">
            <div class="i"><i class="fas fa-user"></i></div>
            <div class="div">
              <input type="email" id="email" name="email" class="input" placeholder="Email" style="color:#FFF">
            </div>
          </div>
          <div class="input-div one">
            <div class="i"><i class="fas fa-user"></i></div>
            <div class="div">
              <input type="text" id="name" name="name" class="input" placeholder="Username" style="color:#FFF">
            </div>
          </div>
          <div class="input-div pass">
            <div class="i"><i class="fas fa-lock"></i></div>
            <div class="div">
              <input type="password" id="password" name="password" class="input" placeholder="Password">
            </div>
          </div>
          <div class="input-div pass">
            <div class="i"><i class="fas fa-lock"></i></div>
            <div class="div">
              <input type="password" name="passConf" class="input" placeholder="Confirm Password">
            </div>
          </div>
          <input type="submit" class="btn" value="Register">
        </form>
      </div>
    </div>
    </div>
  </header>
</body>

</html>