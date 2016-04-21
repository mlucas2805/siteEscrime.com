<?php
include('entete.php');
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="header_bar" role="navigation">
    <!--<nav class="navbar navbar-default navbar-custom navbar-fixed-top">-->
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php">Accueil</a></li>
                <li><a href="presentation.php">Présentation de l'Escrime</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Le Club<b class="caret"></b></a>
                    <ul class="dropdown-menu menu">
                        <li><a href="entrainement.php">Entrainements & Calendriers</a></li>
                        <li><a href="">Rencontres Région</a></li>
                        <li><a href="armes.php">Armes & Maîtres d'armes</a></li>
                        <li><a href="regle&coti.php">Règlement & Cotisations</a></li>
                        <li><a href="album.php">Album photos</a></li>
                        <li><a href="">Inscriptions au club</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <?php if(!isset($_SESSION['prenom'])){ // si aucune session n'est ouverte
                   include('connexion.php');}?>
            </ul>
            <?php if(isset($_SESSION['prenom'])){ // si une session admin est ouverte?>


                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->
                <!-- PARTIE ADMIN -->




                <li><a href="contact.php">Contact</a></li>
                <li id="logout"><a href="deconnexion.php">' .DECONNECT.'</a></li>
            <?php } ?>

        </div>
    </div>
</nav>
