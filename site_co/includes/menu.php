<?php
include('entete.php');
?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="header_bar" role="navigation">
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

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse menu navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#">Règlement du club</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Autres<b class="caret"></b></a>
                        <ul class="dropdown-menu menu">
                            <li><a href="inscription.php">Inscription au club</a></li>
                            <li><a href="equipe.php">Equipe du club</a></li>
                            <li><a href="entrainement.php">Entrainements</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                    <?php
                    if(!isset($_SESSION['prenom'])){ // si aucune session n'est ouverte
                    ?>
                </ul>
                <!--<a href=""><img class="english img-responsive" src="images/drapeau-anglais.jpg"></a>
                <a href=""><img class="french img-responsive" src="images/drapeau-francais.jpg"></a>-->
                <!--<a href="connexion.php" ><button type="button" class="login btn btn-primary btn-lg"><span class="glyphicon glyphicon-log-in"></span> Connexion</button></a>-->
                <?php include('connexion.php');}?>

                <?php
                if(isset($_SESSION['prenom'])){ // si une session users est ouverte
                    ?>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Le Club<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="inscription.php">Inscription au club</a></li>
                            <li><a href="equipe.php">Equipe du club</a></li>
                            <li><a href="entrainement.php">Entrainements</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Manifestations<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="entrainement_spe.php">Entrainement spécial</a></li>
                            <li><a href="tournois.php">Tournois Escrime</a></li>
                            <li><a href="informations.php">Informations</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Blog<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="news.php">News</a></li>
                            <li><a href="matos_a_vendre.php">Matériels à vendre</a></li>
                        </ul>
                    </li>
                    <li id="logout"><a href="deconnexion.php">' .DECONNECT.'</a></li>
                <?php
                }
                ?>

            </div>
        </div>
    </nav>

<?php
include('footer.php');
?>