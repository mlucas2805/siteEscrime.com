<?php
include('enteteAdmin.php');
?>
<div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            Gestion des utilisateurs</h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-user"></i> utilisateurs
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Utilisateurs du site</h3>
                            </div>
                            <div class="panel-body">
                                <!-- <form class="form-inline" role="form">
                               <div class="form-group">
                                   <label >Nom:</label>
                                   <input type="text" class="form-control" id="nom">
                               </div>
                               <div class="form-group">
                                   <label >Prenom:</label>
                                   <input type="text" class="form-control" id="prenom">
                               </div>
                               <div class="form-group">
                                   <label>catégories d'âges:</label>
                                   <select class="form-control">
                                       <option>Moustiques et Poussins1</option>
                                       <option>Poussins 2 et 3</option>
                                       <option>Pupilles </option>
                                       <option>Benjamins </option>
                                       <option>Minimes </option>
                                       <option>Cadets  </option>
                                       <option>Juniors  </option>
                                       <option>Séniors  </option>
                                       <option>Vétérans1  </option>
                                       <option>Vétérans 2 </option>
                                       <option>Vétérans 3 </option>
                                       <option>Vétérans 4 </option>
                                   </select>
                               </div>
                               <div class="form-group">
                                   <label>sexe:</label>
                                   <select class="form-control">
                                       <option>Femme</option><div id="example_length" class="dataTables_length">
                                       <option>Homme</option>
                                   </select>
                               </div>
                               <button type="submit" class="btn btn-default">Recherche</button>
                           </form>
                           <hr>-->
                                <button type="button" data-target="#Nouveau_Contact" data-toggle="modal" class="btn btn-primary btn-lg">
                                    <img src="media/images/signs.png" height="15">
                                    <img src="media/images/people.png" height="25"> nouvel Utilisateur
                                </button>
                                <div class="panel-body">
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Catégorie d'âge</th>
                                                <th>Sexe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <th>poussin</th>
                                                <th>Homme</th>
                                            </tr>
                                            <tr>
                                                <td>Row 2 Data 1</td>
                                                <td>Row 2 Data 2</td>
                                                <th>poussin</th>
                                                <th>Femme</th>
                                            </tr>
                                        </tbody>
                                        <hr>
                                        <tfoot>
                                            <tr>
                                                <th>Column 1</th>
                                                <th>Column 2</th>
                                                <th>poussin</th>
                                                <th>Femme</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <!-- modal-->
        <div class="modal fade" id="Nouveau_Contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content panel-heading">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h6 class="modal-title text-center" id="myModalLabel">Nouveau Contact</h6>
                    </div>
                    <div class="row">
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group form-group-sm">
                                    <div class="col-md-4">
                                        <img src="media/images/people_black_version.png" class="Modal-contact-img" />
                                    </div>
                                    <div class="col-md-8 form-group form-group-sm">
                                        <label class="col-md-4 control-label   align-left">NOM:</label>
                                        <div class="col-md-6">
                                            <input class="form-control modal-contact" type="text">
                                        </div>
                                        <label class="col-md-4 control-label   align-left">PRENOM:</label>
                                        <div class="col-md-6">
                                            <input class="form-control modal-contact" type="text">
                                           </div>

                                            <label class="col-md-4  control-label  align-left">CATEGORIE:</label>
                                            <div class="col-md-6">
                                                <select class="form-control modal-contact ">
                                                    <option>Moustiques et Poussins1   </option>

                                                <option>Poussins 2 et 3</option>
                                                <option>Pupilles </option>
                                                <option>Benjamins </option>
                                                <option>Minimes </option>
                                                <option>Cadets  </option>
                                                <option>Juniors  </option>
                                                <option>Séniors  </option>
                                                <option>Vétérans1  </option>
                                                <option>Vétérans 2 </option>
                                                <option>Vétérans 3 </option>
                                                <option>Vétérans 4 </option>
                                            </select>
                                        </div>
                                        <label class="col-md-4  control-label align-left ">SEXE:</label>
                                        <div class="col-md-6">
                                            <select class="form-control modal-contact ">
                                                <option value="">Homme</option>
                                                <option value="">Femme</option>
                                            </select>
                                        </div>
                                        <label class="col-md-4 control-label   align-left">Photo:</label>
                                        <div class="col-md-6">
                                            <input type="file">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg btn-validation">
                            Enregistrer
                            <img src="media/images/save.png" width="20px" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Morris Charts JavaScript -->
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
