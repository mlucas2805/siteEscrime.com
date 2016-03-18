<?php
session_start();
//include('includes/connect_db.php');// J'ai mis en commentaire cette ligne pour travailler le FRONT END du site sans avoir à insérer la base de données
include('includes/langues.php');
include('includes/entete.php');
include('includes/menu.php');
?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('image/escrime-bg_opacity.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Club Escrime</h1>
                        <h2>Montigny les Cormeilles (Val d'oise 95)</h2>
                        <hr class="small">
                        <span class="subheading">LA RIPOSTE IGNYMONTAINE</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img class="img-responsive logoEscrime" src="image/logo-escrime_300px.jpg">
            </div>
            <div class="col-lg-8">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Le club La Riposte Ignymontaine, vous accueille, à l'Espace Léonard de Vinci...
                            </h2>
                            <h3 class="post-subtitle">
                                Situé à Montigny-les-Cormeilles, dans le val d'oise(95).
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="entrainement.php">
                            <h2 class="post-title">
                                Pour la pratique de l'escrime en loisirs et en compétition.
                            </h2>
                            <h3 class="post-subtitle">
                                Des entrainements adaptés à tous les niveaux et à tous âges.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="armes.php">
                            <h2 class="post-title">
                                Proposant les trois armes de l'escrime : le FLEURET, l'EPEE, et le SABRE.
                            </h2>
                            <h3 class="post-subtitle">
                                Le seul club du 95, à proposer toutes les armes.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                    </div>
                    <hr>
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Older Posts &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <img class="img-responsive logoEscrime" src="image/logo-escrime_300px.jpg">
            </div>
        </div>
    </div>

<?php
include('includes/footer.php');
?>