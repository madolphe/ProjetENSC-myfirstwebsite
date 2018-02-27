<?php
/**
 * Created by PhpStorm.
 * User: adolphemaxime
 * Date: 26/02/2018
 * Time: 22:11
 */?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PageCo</title>
</head>
<body>
	<?php
		require "HeaderNonCo.html"
	?>
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-6">
				<img id="acceuil" src="images/photoAcceuil.jpg" alt="GroupeeAcceuilPhoto"/>
			</div>

			<div class="col-md-6">
				<img class="logo" src="images/logo.png" alt="logo"/>
				<form action="#" method="POST">
                    <h1>Connexion</h1>
					<p>
                        <label for="login">Votre Login</label> :
                        <input type="text" name="login" id="login" />
                    </p>
                    <p>
                        <label for="password">Mot de passe</label> :
                        <input type="password" name="password" id="password" />
                    </p>
                    <p>
                        <input type="submit" name="go" id="go" value="GO!"/>
                    </p>
                    <p>
                        Pas encore inscrit?
                        <br/>
                        <a href="#"> Cliquez ici!</a>
                    </p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
