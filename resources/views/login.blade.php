<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<form >
		<h1>Se connecter</h1>
		{{--<div class="social_media">
			<p><i class="fas fa-paper-plane"></i></p>
			<p><i class="fab fa-facebook"></i></p>
			<p><i class="fab fa-instagram"></i></p>
			<p><i class="fab fa-youtube"></i></p>
			<p><i class="fab fa-twitter"></i></p>
		</div>--}}
		<p class="choose-email">Entrez votre <span>email </span> et votre <span>mot de passe</span></p>
		<div class="inputs">
			<input type="text" class="login_input" autocomplete="off" placeholder="Nom d'utilisateur/ Email">
			<i class="login_icon fas fa-user"></i>
			<input type="password" class="login_input" autocomplete="off" placeholder="Mot de passe" >
			<i class="login_icon fas fa-lock"></i>
		</div>
			
		<div align="center">
			<button type="submit">Connexion</button>
		</div>
		<div  class="checkbox">
		<input type="checkbox">
		<span>Se souvenir de moi</span>
		</div>
		<h4> Trans Mobile <span><i class="fas fa-bus-simple"></i></span></h4>
	</form>
</body>
</html>