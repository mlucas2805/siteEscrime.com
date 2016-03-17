<?php

include('includes/entete.php');
include('includes/menu.php');
?>
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">Cours d'entrainement d'escrime dans la semaine</div>
            <div class="panel-body">
                <div class="row">
                    <p>Vous trouverez ci dessous, un tableau récapitulatif des horaires de cours d'escrime disponible en semaine pour chaque niveau.</p>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Jour d'entrainement</th>
                <th>Heure de début</th>
                <th>Heure de fin</th>
                <th>Niveau</th>
                <th>Armes</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql ="SELECT id_entrainement, day_entrainement, hour_debut_entrainement, hour_fin_entrainement, niveau_entrainement, armes_entrainement FROM entrainement_tbl WHERE id_entrainement = ? ORDER BY hour_debut_entrainement ASC";
            $req = $bdd->prepare($sql);
            $req->bindParam('id_entrainement', $idEntrainement, PDO::PARAM_INT, 1);
            $req->execute() or die(print_r($bdd->errorInfo()));

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
                $armes          = $ligne->armes_entrainement;

                ?>
                <tr class="<?php echo $tr; ?>">
                    <td><?php echo utf8_encode($Day); ?></td>
                    <td><?php echo utf8_encode($hourDebut); ?></td>
                    <td><?php echo utf8_encode($hourFin); ?></td>
                    <td><?php echo utf8_encode($niveau) ; ?></td>
                    <td><?php echo utf8_encode($armes) ; ?></td>
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