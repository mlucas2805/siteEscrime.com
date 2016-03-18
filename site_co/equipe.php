<?php
session_start();
include('includes/connect_db.php');
include('includes/langues.php');
if(isset($_GET['message'])){
    $message = $_GET['message'];
    switch($message){
        case 1727:
            $message = ucfirst($_SESSION['genre']).' '.$_SESSION['prenom'].' '.$_SESSION['nom'].', '.BVEP;
            break;
    }
}
?>
<?php include('includes/entete.php'); ?>
<!-- /.container -->


<!-- Note: The background image is set within the business-casual.css file. -->




<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-5" id="cadre">
            <h1 class="tagline">Les membres du syndicat</h1>
        </div>

    </div>
    <!-- /.row -->
    <hr>


    <div class="row">

        <?php


        $sql = 'SELECT id_users, users_sexe, users_lastname, users_firstname, users_mdp, users_email, users_licence, users_grade, users_photo_profil, users_profil
                FROM users_tbl WHERE users_grade = ? ';

        $requete= $bdd->prepare($sql);
        $requete->execute();
        //echo $sql;
        while($ligne = $requete->fetch(PDO::FETCH_OBJ)){
            echo '<!-- images -->'."\n";
            echo '<div class="col-sm-4">';
            echo '<img class="img-circle img-responsive img-center" src="image/'.$ligne->url.'" alt="">';
            echo'<h2 style="text-align: center">'.utf8_encode($ligne->nom).'</h2>';
            echo'<p style="text-align: center">'.utf8_encode($ligne->description_tache).'</p>
                </div>';
        }?>
    </div>

    <?php
    include('includes/footer.php');
    ?>
