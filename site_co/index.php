<?php
session_start();
include('includes/connect_db.php');
include('includes/langues.php');
include('includes/entete.php'); 
include('includes/menu.php');
?>

?>
    <!-- /.container -->

<!-- Image Background Page Header -->




    
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
