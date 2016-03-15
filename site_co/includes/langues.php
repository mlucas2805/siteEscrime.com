<?php

//ON A 4 façon pour récupérer la langue 
/*

la variable serveur pour la langueaccepté par le navigateur  $_SERVER['HTTP_ACCEPT_LANGUAGE']
la session langue 
la variable $_get['langue'] lors du changement de languela langue par défaut


*/
		if(isset($_GET['langue'])){
			$langue = $_GET['langue'];
			$_SESSION['langue']=$langue;
			
		}elseif(isset($_SESSION['langue'])){
			$langue= $_SESSION['langue'];
			$_SESSION['langue'] = $langue;
			
		}else{
			$langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
			$_SESSION['langue']= $langue;
		}
			//echo $langue;
			
			include('langue_'.$langue.'.php');


?>