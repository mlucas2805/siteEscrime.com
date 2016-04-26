<?php
include('enteteAdmin.php');
?>

<div id="page-wrapper" class="">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            Gestion des photos</h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-user"></i> Photo
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Photo</h3>
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
                                       <option>Femme</option>
                                       <option>Homme</option>
                                   </select>
                               </div>
                               <button type="submit" class="btn btn-default">Recherche</button>
                           </form>
                           <hr>-->
                                <button type="button" data-target="#Nouveau_Contact" data-toggle="modal" class="btn btn-success btn-lg">
                                    <img src="media/images/signs.png" height="15">
                                    <i class="fa fa-camera"></i>&nbsp;Ajouter de photos
                                </button>
                                <div class="panel-body">
                                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>url</th>
                                                <th>date</th>
                                                <th>manifestation</th>
                                                <th>rubrique</th>
                                                <th>détails</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>24/04/2016</td>
                                                <th>poussin</th>
                                                <th>Homme</th>
                                                <th>détails</th>
                                            </tr>
                                            <tr>
                                                <td>Row 2 Data 1</td>
                                                <td>14/03/2014</td>
                                                <th>poussin</th>
                                                <th>Femme</th>
                                                <th>détails</th>
                                            </tr>
                                        </tbody>
                                        <hr>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
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
                                        <img src="media/images/technology.png " class="Modal-contact-img img-responsive" />
                                    </div>
                                    <div class="col-md-8 form-group form-group-sm">
                                        <label class="col-md-4 control-label   align-left">DATE:</label>
                                        <div class="col-md-6">
                                            <input class="form-control modal-contact" type="DATE">
                                        </div>

                                        <label class="col-md-4  control-label  align-left">MANIFESTATION:</label>
                                        <div class="col-md-6">
                                            <select class="form-control modal-contact ">
                                                <option>Moustiques et Poussins1   </option>
                                                <option>Poussins 2 et 3</option>
                                                >
                                            </select>
                                        </div>
                                        <label class="col-md-4  control-label align-left ">Rubrique:</label>
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
                                        <label class="col-md-4 control-label   align-left">Détail:</label>
                                        <div class="col-md-6"><textarea rows="4" cols="30" name="comment">entrer une description</textarea></div>
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
