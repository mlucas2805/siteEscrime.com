<?php
session_start();
//include('includes/connect_db.php');// J'ai mis en commentaire cette ligne pour travailler le FRONT END du site sans avoir à insérer la base de données
include('includes/langues.php');
include('includes/entete.php');
include('includes/menu.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <!-- normal -->
                <div class="ih-item circle effect1"><a href="#">
                        <div class="spinner"></div>
                        <div class="img">
                            <img class="img-responsive" src="image/epee_escrime.jpg" alt="img">
                        </div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Epée</h3>
                                <p>Zone de toucher : tout le corps</p>
                            </div>
                        </div></a></div>
                <!-- end normal -->

            </div>

            <div class="col-sm-4">

                <!-- colored -->
                <div class="ih-item circle colored effect1"><a href="#">
                        <div class="spinner"></div>
                        <div class="img">
                            <img class="img-responsive" src="image/sabre_escrime.jpg" alt="img">
                        </div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Sabre</h3>
                                <p>Zone de toucher : au dessus de la taille (à l'exception des mains)</p>
                            </div>
                        </div></a></div>
                <!-- end colored -->

            </div>

            <div class="col-sm-4">

                <!-- colored -->
                <div class="ih-item circle colored effect1"><a href="#">
                        <div class="spinner"></div>
                        <div class="img">
                            <img class="img-responsive" src="image/fleuret_escrime.jpg" alt="img">
                        </div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Fleuret</h3>
                                <p>Zone de toucher : toute la surfacce du tronc</p>
                            </div>
                        </div></a></div>
                <!-- end colored -->

            </div>
        </div>
    </div>
    <hr class="separation">
    <div class="container">
        <div class="row">
            <h1>L'Epée</h1>
            <p>
                A l'épée on ne touche que de la pointe, la surface valable à l'épée est sur tout le corps. C'est le 1er qui touche qui marque le point (possibilité de touches doubles).
            </p>
            <h1>Le Sabre</h1>
            <p>
                Au sabre on touche de la pointe et du tranchant de la lame, les touches ne sont valables qu'au dessus de la ceinture.
            </p>
            <h1>Le Fleuret</h1>
            <p>
                Au fleuret, on ne touche que de la pointe. Au bout de la lame, il y a une pointe munie d'un ressort, il faut une pression de 500 g pour toucher sur la cuirasse métallique de l'adversaire, une lampe rouge ou verte s'allume il y a touche (point), par contre si la pointe touche une partie du corps sans cuirasse, une lampe blanche s'allume il y a touche non valable (pas de point).
            </p>
        </div>
    </div>



<?php
include('includes/footer.php');
?>