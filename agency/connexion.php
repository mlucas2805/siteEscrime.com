
	<script>
		function control(){
			var a = document.getElementById('login');
			var b = document.getElementById('mdp');
			if(a.val == ''){
				alert('Attention le champ login doit être renseigné !');
				a.focus();
				return false;
			}
			if(b.val == ''){
				alert('Attention le champ mot de passe doit être renseigné !');
				b.focus();
				return false;
			}

			return true;
		}
	</script>



<?php if(!isset($_POST['login'])){ ?>


	<li class="dropdown " id="menuLogin">
		<a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Accès Admin</a>
		<div class="dropdown-menu">
			<form class="form" name="connexion" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return control();">
				<input name="login" id="login" placeholder="Email" type="text">
				<input name="mdp" id="mdp" placeholder="Mot de passe" type="password"><br>
				<button type="submit" id="btnLogin" class="btn hvr-rectangle-out" value="envoyer">Se connecter</button>
			</form>
		</div>
	</li>



<?php }
	else{
	$login = $_POST['login'];
	$mdp  = $_POST['mdp'];
	// echo 'indentifiant = '.$login;

	/* 	on va se connecter à la base de données et vérifier que les 
	 	variables correspondent à un utilisateur enregistré
		base de données = copropriete, la table user_tbl
	*/

	$sql ="SELECT id_users, users_sexe, users_lastname, users_firstname,users_licence, users_email, users_grade, users_photo_profil, users_profil	FROM users_tbl WHERE users_email ='".$login."' AND users_mdp = '".$mdp."'";

	//$req = $bdd->query($sql);
	$req = $bdd->prepare($sql);
	$req->execute() or die (print_r ($req->errorInfo(), TRUE));

	//echo '<!-- remplissage à partir de la base de données -->';
	while($ligne = $req->fetch(pdo::FETCH_OBJ))
	{
		//$nom = $ligne->nom;
		
		$_SESSION['users_lastname']       = $ligne->users_lastname;
		$_SESSION['users_firstname']    = $ligne->users_firstname;

		if($ligne->users_sexe == 1)
		{
			$genre ='madame';
		}
		else
		{
			$genre ='monsieur';
		}

		$_SESSION['users_sexe']    = $genre;
		$_SESSION['users_email']		= $ligne->users_email;
		$_SESSION['users_grade']    = $ligne->users_grade;
		$_SESSION['users_licence']     = $ligne->users_licence;
		$_SESSION['users_photo_profil']     = $ligne->users_photo_profil;
		$_SESSION['profil']     = $ligne->users_profil;

		
		header('location: index1.php');
	}

	if (!isset($_SESSION['users_firstname']))
	{

		header('location: erreur_mdp.html');

	}

	//echo ucfirst($_SESSION['genre']).' '.$_SESSION['prenom'].', vous etes connecté';

	 //attention 1727-> connexion
}
?>

