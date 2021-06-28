
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="/css/styleco.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" href="../css/app.css">
	<link rel="stylesheet" href="../css/loginPage.css">
</head>
<body>
	<header class="loginPage">
		  <div class="container">
			<div class="d-flex">
				<a href="../index.php" class="app-logo app-logo-resize">Helay</a>
			</div>
			<div class="login-content">
				<form action="../Backend-Reservation/connexion.php" method="POST">
					<img src="../images/avatar.svg">
					<h2 class="title">Connexion</h2>
					   <div class="input-div one">
						  <div class="i"><i class="fas fa-user"></i></div>
						  <div class="div">
							
							<input type="text" required id="login" name="login" class="input" placeholder="E-mail" style="color:#FFF">
						  </div>
					   </div>
					   <div class="input-div pass">
						  <div class="i"><i class="fas fa-lock"></i></div>
						  <div class="div">
							
							<input type="password" required id="password" name="password" class="input" placeholder="Password" style="color:#FFF" onclick="SwitchPass()" >
					   </div>
					</div>
					<a href="#">Forgot Password?</a>
					<input type="submit" name="Bconn" class="btn" value="Login">
				</form>
			</div>
		  </div>
		</div>
	  </header>
</body>
</html>

