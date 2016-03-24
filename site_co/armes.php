<?php
include('includes/entete.php');
include('includes/menu.php');
include('includes/headerOthers.php');
?>

    <div class="container">
        <div class="row">
            <div class="circle col-sm-4">

                <!-- normal -->
                <div class="ih-item circle effect1"><a href="#">
                        <div class="spinner"></div>
                        <div class="img">
                            <img class="img-responsive" src="public/image/epee_escrime.jpg" alt="img">
                        </div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Epée</h3>
                                <p>Zone de toucher : tout le corps</p>
                            </div>
                        </div></a></div>
                <!-- end normal -->

            </div>

            <div class="circle col-sm-4">

                <!-- colored -->
                <div class="ih-item circle colored effect1"><a href="#">
                        <div class="spinner"></div>
                        <div class="img">
                            <img class="img-responsive" src="public/image/sabre_escrime.jpg" alt="img">
                        </div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Sabre</h3>
                                <p>Zone de toucher : au dessus de la taille (à l'exception des mains)</p>
                            </div>
                        </div></a></div>
                <!-- end colored -->

            </div>

            <div class="circle col-sm-4">

                <!-- colored -->
                <div class="ih-item circle colored effect1"><a href="#">
                        <div class="spinner"></div>
                        <div class="img">
                            <img class="img-responsive" src="public/image/fleuret_escrime.jpg" alt="img">
                        </div>
                        <div class="info">
                            <div class="info-back">
                                <h3>Fleuret</h3>
                                <p class="textCircleHover">Zone de toucher : toute la surfacce du tronc</p>
                            </div>
                        </div></a></div>
                <!-- end colored -->

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="text">
                <div class="col-lg-4">
                    <h1>L'Epée</h1>
                    <p>
                        A l'épée on ne touche que de la pointe, la surface valable à l'épée est sur tout le corps. C'est le 1er qui touche qui marque le point (possibilité de touches doubles).
                    </p>
                </div>
                <div class="col-lg-4">
                    <h1>Le Sabre</h1>
                    <p>
                        Le sabre est une arme conventionnelle, les coups sont portés avec la pointe et aussi avec le tranchant de l'arme, les touches ne sont valables qu'au dessus de la ceinture.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h1>Le Fleuret</h1>
                    <p>
                        Au fleuret, on ne touche que de la pointe. C'est une arme conventionnelle qui donne priorité à l'attaque et les échanges se font alternativement.
                    </p>
                </div>
            </div>
        </div>
    </div>



<?php
include('includes/footer.php');
?>