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


        $sql = 'SELECT membres_syndic_tbl.id_membre_syndic,membres_syndic_tbl.id_user,nom,prenom,users_tbl.id_photo,url,users_tbl.id_user, taches_tbl.id_tache,nom_tache,description_tache , membres_syndic_tbl.id_tache
                FROM membres_syndic_tbl
                LEFT JOIN users_tbl ON users_tbl.id_user = membres_syndic_tbl.id_user
                LEFT JOIN taches_tbl ON taches_tbl.id_tache = membres_syndic_tbl.id_tache
                LEFT JOIN photo_tbl ON photo_tbl.id_photo = users_tbl.id_photo';

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


    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>

<?php
include('includes/footer.php')
?>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/scriptperso.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>

</body>

</html>
