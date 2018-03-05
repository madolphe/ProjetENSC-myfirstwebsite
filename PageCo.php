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
				<?php require "HeaderNonCo.html" ?>
                <h3>Bienvenue sur GROUPEE !</h3>
                <h4>GROUPEE :
                    Gather Rapidly On Ur Private Exchange Environment<h4/>
                    <h4>Ici, pas de profil public, GROUPEE est une application qui vous permet de partager vos photos, notes et planning à travers des channels privés, à vos proches et amis !</h4>
                    <a href="#down_page"><img src="images/down-arrow.png" alt="down_arrow" id="downarrow"></a>
            </div>

            <div class="container" id="down_page">
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
