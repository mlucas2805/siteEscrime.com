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
    </div>
</div>
<?php
include('includes/footer.php');
?>