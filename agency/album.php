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
            <h1 class="highTitle">Voici l'album photos du club</h1>
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="public/image/edj3.jpg" alt="Escrime" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="public/image/escrimeNegative.jpg" alt="Escrime" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="public/image/fete_noel.jpg" alt="fete de Noel" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="public/image/escrime_bg_2.jpg" alt="escrime Negative" width="460" height="345">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <!-- Portfolio Grid Section -->
            <section id="portfolio" class="bg-light-gray">
                <div class="container">
                    <div class="row">
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
                    <p>C'est ici, que vous pourrez voir et revoir les photos prises durant les entrainements spéciaux, ou bien pendant les tournois. Nous vous rappelons qu'il sera demander à chacun un droit à l'image afin de pouvoir afficher les photos sur le site.</p>

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
                            <h3>Etoile de Vénus</h3>
                            <p class="item-intro text-muted">Rénovation complète du site</p>
                            <img class="img-responsive img-centered" src="" alt="Site etoiledevenus.com">
                            <p>Un site remis au goût du jour, grâce notamment, à la technologie du "Flat Design", du "Design Responsive"</p>
                            <p>Ce site a été refait lorsque j'étais chez Aabas Interactive, avec une équipe de deux autres développeurs Back & Front End.</p>
                            <br>
                            <img class="img-responsive img-centered" src="" alt="Site etoiledevenus.com">

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
                            <h2>Créations personnelles Design</h2>
                            <p class="item-intro text-muted">Photoshop, Illustrator, Premier Pro</p>
                            <img class="img-responsive img-centered" src="" alt="Création Design">
                            <img class="img-responsive img-centered" src="" alt="Création Design">

                            <p>Un moment artistique, un pointe d'absurdité mais surtout des créations originales et authentiques. Ci-dessous, les Faire-part ont été créé pour qu'ils puisse être par la suite, plier sous forme de cocotte en papier.</p>
                            <p>Merci de respecter le travail et les droits d'auteurs...</p>

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
                            <h2>Site associatif de Montigny-les-Cormeilles</h2>
                            <p class="item-intro text-muted">La clé, c'est la mode !</p>
                            <img class="img-responsive img-centered" src="" alt="Site associatif d'Escrime">
                            <p>C'est en formation que j'ai rencontré Dominique, l'un des gérants du club d'escrime de Montigny. C'est tout naturellement, que je lui ai proposé mon aide pour refaire son site qui était malheuresement figé dans les années 2000...</p>
                            <p>Redéfinition de l'aspect visuel du site, Mock-up sous illustrator, création de logos, création d'un back office... etc</p>

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