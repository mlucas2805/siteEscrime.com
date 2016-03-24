
<?php
session_start();
//include('includes/connect_db.php');
include('includes/langues.php');

include('includes/entete.php');
include('includes/menu.php');
include('includes/headerIndex.php');

?>
<!-- /.container -->


<!-- Note: The background image is set within the business-casual.css file. -->

<div class="container">

    <div>
        <h2>Contacter le club Escrime de Montigny-les-Cormeilles</h2>
    </div>

    <!-- /.row -->
    <hr class="separation">
    <div class="col-lg-2">
        <img class="img-responsive logoEscrime" src="public/image/logo-escrime_300px.jpg">
    </div>

    <div class="col-lg-8">
        <?php if(array_key_exists('errors',$_SESSION)): ?>
            <div class="alert alert-danger">
                <?php implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif; ?>
        <?php if(array_key_exists('success',$_SESSION)): ?>
            <div class="alert alert-success">
                Votre email à bien été transmis !
            </div>
        <?php endif; ?>
        <form action="phpfile.php"  method="post" class="contact" style="margin-top: 10px">
            <fieldset class="contact-inner" style="padding-bottom: 45px">
                <p class="contact-input">
                    <input required type="text" id="inputname" name="name" class="form-control" placeholder="Votre Nom *" autofocus value="">
                </p>
                <p class="contact-input">
                    <input required type="text" id="inputlastname" name="lastname" class="form-control" placeholder="Votre Prénom *" autofocus value="">
                </p>
                <p class="contact-input">
                    <input required type="email" name="email" class="form-control" id="inputemail" value="" placeholder="Votre Email *" autofocus>
                </p>
                <p class="contact-input">
                    <input required type="text" id="inputAdresse" name="adresse" class="form-control" placeholder="Votre Adresse *" autofocus value="">
                </p>
                <p class="contact-input">
                    <input   id="inputCodePostal" pattern="[0-9]{5}" type="text" name="codepostal" class="form-control" placeholder="Code Postal *" autofocus value="">
                </p>
                <p class="contact-input">
                    <textarea required id="inputmessage" name="message" class="form-control" placeholder="Votre message juste ici *"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                </p>
                <button type="submit"  class="btn btn-default">Envoyer</button>
            </fieldset>
        </form>
        <hr>
    </div>
    <div class="col-lg-2">
        <img class="img-responsive logoEscrime" src="public/image/logo-escrime_300px.jpg">
    </div>
</div>

<?php
include('includes/footer.php');
?>