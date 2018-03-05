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

			<div class="img_accueil">
				<?php
				require "HeaderNonCo.html"
				?>
                <h3>Partagez</h3>
                <img src="#" alt="down_arrow">
            </div>

            <div class="container-fluid">
                <div class="row">
				<img class="logo" src="images/logo.png" alt="logo"/>
                <table>

                    <form action="#" method="POST">
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
                </table>
        	</div>
	</div>
</body>
</html>
