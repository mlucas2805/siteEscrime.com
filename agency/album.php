<?php
//include('includes/connect_db.php');
include('includes/entete.php');
?>
    <meta name="description" content="Les photos des tournois ou entrainement sp&eacute;ciaux du club de Montigny-les-Cormeilles">
    <meta name="keywords" content="photos, album, club, escrime, val d'oise, Montigny-les-Cormeilles">
    <title>Albums photos du club de Montigny-les-Cormeilles</title>
<?php // ceci nous permet de pouvoir mettre un title différent pour chaque page et ainsi augmenter en référencement
include('includes/endHeadPage.php');
include('includes/menu.php');
include('includes/headerOthers.php');
?>

    <div class="container">
        <div class="row">
            <br>
            <h1 class="highTitle">Les photos :</h1>
<!--            <div id="myCarousel" class="carousel slide" data-ride="carousel">-->
<!--                <!-- Indicators -->
<!--                <ol class="carousel-indicators">-->
<!--                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--                    <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--                    <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--                    <li data-target="#myCarousel" data-slide-to="3"></li>-->
<!--                </ol>-->
<!---->
<!--                <!-- Wrapper for slides -->
<!--                <div class="carousel-inner" role="listbox">-->
<!--                    <div class="item active">-->
<!--                        <img src="public/image/edj3.jpg" alt="Escrime" width="460" height="345">-->
<!--                    </div>-->
<!---->
<!--                    <div class="item">-->
<!--                        <img src="public/image/escrimeNegative.jpg" alt="Escrime" width="460" height="345">-->
<!--                    </div>-->
<!---->
<!--                    <div class="item">-->
<!--                        <img src="public/image/fete_noel.jpg" alt="fete de Noel" width="460" height="345">-->
<!--                    </div>-->
<!---->
<!--                    <div class="item">-->
<!--                        <img src="public/image/escrime_bg_2.jpg" alt="escrime Negative" width="460" height="345">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <!-- Left and right controls -->
<!--                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Previous</span>-->
<!--                </a>-->
<!--                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Next</span>-->
<!--                </a>-->
<!--            </div>-->
            <!-- Portfolio Grid Section -->
            <section id="portfolio" class="bg-light-gray">
                <div class="container">
                    <div class="row">
                        <p>C'est ici, que vous pourrez voir et revoir les photos prises durant les entrainements spéciaux, ou bien pendant les tournois. Nous vous rappelons qu'il sera demander à chacun un droit à l'image afin de pouvoir afficher les photos sur le site.</p>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="public/image/edj3.jpg" class="img-responsive" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Les tournois des petits</h4>
                                <p class="text-muted">Photographie by</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="public/image/fete_noel.jpg" class="img-responsive" alt="Création Design">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Les fêtes de fin d'année au club</h4>
                                <p class="text-muted">Photographie by</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                            <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img src="public/image/escrimeNegative.jpg" class="img-responsive" alt="Site associatif d'Escrime Montigny-les-Cormeilles">
                            </a>
                            <div class="portfolio-caption">
                                <h4>Les entrainements spéciaux</h4>
                                <p class="text-muted">Photographie by</p>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
        </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h3>Le tournois des petits</h3>
                            <p class="item-intro text-muted">Les poussins</p>
                            <img class="img-responsive img-centered" src="public/image/edj3.jpg" alt="Site etoiledevenus.com">
                            <p>Notre photographe nous a suivi partout ce jour ci afin de vous offrir des photos de votre enfants durant le tournois inter-club.</p>
                            <p>N'hésitez pas à nous contacter pour obtenir les photos de votre enfants.</p>
                            <br>

                            <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>La fête de club de fin d'année</h2>
                            <p class="item-intro text-muted">Les déguisements</p>
                            <img class="img-responsive img-centered" src="public/image/fete_noel.jpg" alt="Création Design">
                            <p>Le combat des mousquetaires, le spectacle de fin d'année... Revenez vivre ces moments, grâce à nos photos !</p>
                            <p>N'hésitez pas à nous contacter pour obtenir les photos de votre enfants.</p>

                            <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Les entrainements spéciaux pous les adultes</h2>
                            <img class="img-responsive img-centered" src="public/image/escrimeNegative.jpg" alt="Site associatif d'Escrime">
                            <p>Les photos, il n'y en a pas que pour les petits... Voici les photos des entrainements spéciaux des adultes.</p>
                            <p>N'hésitez pas à nous contacter pour obtenir les photos.</p>

                            <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('includes/footer.php');
?>