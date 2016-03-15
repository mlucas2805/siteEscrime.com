<?php
session_start();//on démarre la session
include('includes/connect_db.php');


                          /*traitement email ne fonctionne que sur serveur distant*/
 /*  
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
    $to = 'gejugo@gmail.com'; // Insérer votre adresse email ICI
    $subject = 'Message envoyé par ' . htmlspecialchars($_POST['name']) . '  Sujet du message '. htmlspecialchars($_POST['membre']) .'  - <i>' . htmlspecialchars($_POST['email']) .'</i>';
    $message_content = '
  <table>
  <tr>
  <td><b>Emetteur du message:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>Contenu du message:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';  */

                        /* Insertion du message dans la Base de donner */


    //echo $_POST['name'];
    //echo "INSERT INTO email_tbl (nom,nom_membre_syndic) VALUES ('".$_POST['name']."','".$_POST['membre']."')";
    
    $sql="INSERT INTO email_tbl  (nom,prenom,email,adresse,code_postal,pays,nom_membre_syndic,message)
     VALUES ('".$_POST['name']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['adresse']."','".$_POST['codepostal']."','".$_POST['pays']."','".$_POST['membre']."','".$_POST['message']."')";

   $requete= $bdd->prepare($sql);
   $requete->execute();
   header('Location: index.php?message=1728');








//name,lastname,email,adresse,codepostal,pays,membre,message

    /* Envoie du mail */

    //mail($to, $subject, $message_content, $headers);

                      /* redirige sur l'accueil*/

    //header('Location: index.php');



/*contenue formulaire 
syndicat liste 
Nom prénom email adresse code postal pays 
message 

table email

email_tbl
  id_email
  nom
  prenom
  email
  adresse
  code_postal
  pays
  nom_membre_syndic
  email_membre_syndic

*/