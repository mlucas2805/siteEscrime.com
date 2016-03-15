<?php

include('includes/entete.php');
include('includes/menu.php');
?>
    <div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Mes charges pour le copropriété</div>
        <div class="panel-body">
            <div class="row">
                <p>Le tableau de récapitulatif de vos charges de copropriété vous permet d'organiser vos paiements. La colonne "dernier délai" vous indique la date à laquelle le solde de la charge doit être payé.<br />
                    La colonne "paiement" vous indique si oui ou non, la charge a été payé.<br />
                    Merci d'avance, Le syndicat.</p>
            </div>
        </div>
    </div>
    <table class="table">
    <thead>
    <tr>
        <th>Jour d'entrainement</th>
        <th>Type de charges</th>
        <th>Description</th>
        <th>Coût des charges</th>
        <th>Paiement</th>
    </tr>
    </thead>
    <tbody>
<?php
    $sql ="SELECT id_entrainement, day_entrainement, hour_debut_entrainement, hour_fin_entrainement, niveau_entrainement, armes_entrainement FROM entrainement_tbl ORDER BY hour_debut_entrainement ASC";
    //echo $sql;
    //$req = $bdd->query($sql);
    $req = $bdd->prepare($sql);
    //$req->bindParam('id_users', $idUsers, PDO::PARAM_INT, 1);
    $req->execute() or die(print_r($bdd->errorInfo()));
    //$req->execute() or die(print_r('impossible de se connecter'));
    //echo '<!-- remplissage à partir de la base de données -->';

    $i=1;

    while($ligne = $req->fetch(PDO::FETCH_OBJ))
    {
    if($i>3)
    {
    $i=1;
    }

    switch($i) // switch pour attribuer une class différente sur chaque ligne
    {
    case 1:
    $tr='success';
    break;
    case 2:
    $tr='danger';
    break;
    case 3:
    $tr='info';
    break;
    }

    $hourDebut      = $ligne->hour_debut_entrainement;
    $hourFin        = $ligne->hour_fin_entrainement;
    $Day            = $ligne-> day_entrainement;
    $niveau         = $ligne->niveau_entrainement;
    $armes    = $ligne->armes_entrainement;

    ?>
    <tr class="<?php echo $tr; ?>">
        <td><?php

            echo date("d/m/Y", strtotime($delaiDate));
            //echo $delaiDate;
            ?></td> <!-- strtotime affichage de la date en français et non américain comme le sort la base de données voir commentaires ci dessus-->
        <td><?php echo utf8_encode($Day); ?></td>
        <td><?php echo utf8_encode($hourDebut); ?></td>
        <td><?php echo utf8_encode($hourFin); ?></td>
        <td><?php echo utf8_encode($niveau) ; ?></td>
        <!--<td><?php echo utf8_encode($soldeCharge).'&euro;' ; ?></td>-->
        <td><?php // le traitement va nous permettre d'afficher autrement le résultat de la requete pour la colonne paiement
            if($paiement == 0)
                echo 'non';
            else
                echo'oui';
            // echo utf8_encode($paiement) ;
            ?></td>

    </tr>

<?php
$i++;
}
?>

    </tbody>
    </table>
    </div>

<?php
include('includes/footer.php');
?>