<?php session_start() ;

if(!isset($_POST['login'])){
	//TRAITEMENT ->UTILISATION DU FORMULAIRE DE CONNEXION 
}
else
{
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];
	
	//on se connecte a la base de données
	// si resultat positif 
		$_session['nom']=$bdd->nom;
		$_session['prenom']=$bdd->prenom;

}

