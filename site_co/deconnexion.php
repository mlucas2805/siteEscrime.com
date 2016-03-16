<?php 	session_start();

		$_SESSION['users_lastname']			= '';
		$_SESSION['users_firstname']		= '';
		$_SESSION['users_sexe']				= '';
		$_SESSION['users_grade']			= '';
		$_SESSION['users_licence']			= '';
		$_SESSION['users_photo_profil']		= '';
		$_SESSION['users_profil']			= '';
		$_SESSION['users_email']			= '';
		
	
	session_destroy();
	header('location: index.php');
	?>

