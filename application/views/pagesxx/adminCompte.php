<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Personnel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" style="border-radius: 15%;" href="<?php echo base_url('images/menetp.jpg') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>style/styles.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini  layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
     
      <li class="nav-item d-none d-sm-inline-block">
       <div style="margin-left: 40%;width: 100%;font-size: 20px;color: #b92837;"> <b>APPLICATION GESTION DE CONGES ET DES ABSENCES</b></div>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" style="margin-right: 1.8%;">
   <div class="btn-group" style="background-color:#bb2939;color: #fff;">
                    <button type="button" class="btn btn-flat" style="background-color: #fff;color:#bb2939;margin-top: -3%; "><i class="fas fa-power-off" style="color:#fff;"></i>Accueil&nbsp;&nbsp;&nbsp;</button>
                    <button type="button" class="btn btn-flat dropdown-toggle" data-toggle="dropdown" style="background-color:#fff;color: #bb2939;">
                    <span class="caret" style="background-color:#bb2939;color: #fff;margin-top: 6%;"></span>
                    <span class="sr-only left">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="<?php echo base_url(); ?>control/accueil2" style="background-color: #bb2839;color: #fff;border-color: #fff;margin-bottom: 0.5%;">Accueil</a>
                      <a class="dropdown-item" href="#" style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;">Mon compte</a>
                       <a class="dropdown-item" href="<?php echo base_url('control/logout');?>" style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;">Déconnexion</a>
                     
                    </div>
      </div> 
      </ul> 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style=" position: fixed;width: 18%;background-color: #fff;">

    <!-- Sidebar -->
    <div class="sidebar okfixer"> 
 <div> <img style="width: 40%;border-radius: 50%;margin-left: 30%;margin-top: 6%;" src="<?php echo base_url('images/menetp.jpg');?>"></div>
       <div class="user-panel mt-3 pb-3 mb-3 d-flex" style=" border-radius: 1%; margin-top: 1%;" >
        <p style="margin-left: 4px;font-size: 11px;margin-top: -1.9%; color: #179942;" >
         &nbsp;&nbsp;&nbsp;
         &nbsp;
          Ministère de l'Education Nationale de<br>
           l'Enseignement Technique et Professionnel
          <br>

        </p>

      </div>
      <!-- Sidebar Menu -->
      <div  style="margin-top: 10%;">
       <p style="float: center;margin-left: 13%;"> MENU DE L'APPLICATION</p>
      </div>
      <nav  style="background-color: #ffffff;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link lien-btn btn btn-flat"  style="background-color: #bb2839;">
              <p style="margin-left: -2%;">
                <i class="fas fa-plus-square"></i>
               &nbsp;COMPTE ET PERSONNEL
               
              </p>
            </a>
            <ul class="nav nav-treeview" style="margin-left: 6%;">
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url('control/lienCompteAdmin'); ?>" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Compte utilisateur</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url('control/lienPersonnelAdmin'); ?>" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Personnel</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url('control/lienDecisionAdmin'); ?>" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Décision de congé</p>
                </a>
              </li>
            </ul>
          </li>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link lien-btn btn btn-flat " style="background-color: #bb2839;">
              <p style="margin-right: 70%;">
                <i class="fas fa-plus-square" style="font-size: 15px;"></i>
                 &nbsp;ABSENCES
               
              </p>
            </a>
<ul class="nav nav-treeview" style="margin-left: 6%;">
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url('control/lienAutorisationAdmin'); ?>" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Autorisation</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url('control/lienPermissionAdmin'); ?>" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Permission</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link lien-btn btn btn-flat" style="background-color: #bb2839;">
              <p style="margin-right: 70%;">
                 <i class="fas fa-plus-square"></i>
               &nbsp;CONGES
              
              </p>
            </a>
            <ul class="nav nav-treeview" style="margin-left: 6%;">
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url('control/lienCongeAnnuelAdmin'); ?>" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé annuel</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url();?>control/lienpaterniteAdmin" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé de paternité</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url();?>control/lienMaterniteAdmin" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé de maternité</p>
                </a>
              </li>
              
            </ul>
          </li>    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="callout callout-men" style="width: 100%;margin-bottom: 0%;">
              <h5><i class="fas fa-user"></i>&nbsp;&nbsp;COMPTE D'UTILISATEUR </h5>
            <h6 style="color: #bb2839;"> <u>NB</u>: Tous les champs sont obligatoires</h6>
            </div>
        </div>
      </div><!-- /.container-fluid -->

      <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Ajouter compte</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> 
            </div>
              <form method="post"  action="" id="myForm">
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="text" class="form-control" name="im_user" id="im_user" placeholder="Matricule">
              </div>
                <div class="col-9">
              <input type="text" class="form-control" name="pseudo_user" id="pseudo_user" placeholder="Pseudo">
             </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control" name="numPhone_user" id="numPhone_user" placeholder="Numéro téléphone">
             </div>
              <div class="col-9">
              <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email">
             </div>
               <!--Lieur de Service-->
              <div class="col-9">
                <input type="password" class="form-control" placeholder="Mot de passe" id="pass_user" name="pass_user">
               </div>
              <div class="col-9">
              <input type="password" class="form-control" placeholder="Confirmation mot de passe" id="passConfirme_user" name="passConfirme_user">
             </div>
                             <!--Sexe-->
               <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" name="privi_user" id="privi_user">
                    <option>Admin</option>
                    <option>Personnel</option>  
                  </select>
                </div> 
                <div class="col-9"> 
                <input style="background-color: #FFF;" type="file" class="form-control" placeholder="Chapitre budgetaire" id="avatar_user" name="avatar_user">
               </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" id="btnAnnulerAddCompte" name="action" class="btn btn-flat" style="margin-left: 47%;background-color: #bb2839;color:#fff;">
               Annuler</button>
              <input type="submit" style="margin-right: 0%;background-color: #bb2839;color:#fff;" name="action"class="btn btn-flat" value="Valider">&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
              
            </div>
            </form>
  </div>
  <!--/Form without header-->
          <!-- /.modal-content -->
        </div>
      </section>

       <div class="modal fade" tabindex="-1" id="editModalPerso" role="dialog">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; ">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Modifier personnel</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> 
            </div>

            <div class="modal-body" style="background-color: #f4f6f9;">
              <form method="post" action="" id="myFormEdit">
              <!--Matricule-->
              <div class="col-9">
                <input type="text" class="form-control" name="im_perso" id="im_perso" placeholder="Matricule">
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control" name="nom_perso" id="nom_perso" placeholder="Nom et prénom(s)">
             </div>
             <!--Nom et prénom-->
            
               <!--Sexe-->
                <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" id="editSexe_perso" name="sexe_perso">
                    <option selected="selected">...... Sexe ......</option>
                    <option>M</option>
                    <option>F</option>  
                  </select>
                </div>
               <div class="col-9">
               <select class="form-control select2" style="width: 100%;" id="editCorps_perso" name="corps_perso">
                    <option selected="selected">Encadreur</option>
                    <option>Réalisateur</option>
                    <option>Réalisateur Adjoint</option>
                    <option>Concepteur</option>
                    <option>Formateur</option>
                  </select>
                </div>
              <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" id="editGrade_perso" name="grade_perso">
                    <option selected="selected">...... Grade ......</option>
                    <option>Stagiaire</option>
                    <option>2/1</option>
                    <option>2/2</option>
                    <option>1/1</option>
                    <option>1/2</option>
                    <option>1/3</option>
                    <option>p1</option>
                    <option>p2</option>
                    <option>p3</option>
                    <option>classe exep 1e</option>
                    <option>classe exep 2e</option>
                    <option>classe exep 2 ri</option>
                  </select>
               <!--Direction-->
               </div>
               <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" id="editDirection_perso" name="dir_perso">
                    <option selected="selected">..... Direction .......</option>
                    <option selected="selected">Ministre</option>
                    <option>SG</option>
                    <option>DCAB</option>
                    <option>DTIC</option>
                    <option>DEF</option>
                    <option>DEPA</option>
                    <option>DAFF</option>
                  </select>
                </div>
               <!--Lieur de Service-->
                  <div class="col-9">
                    <input type="text" class="form-control" placeholder="Lieu de Service" id="editLieuService_perso" name="lieuserv_perso">
                   </div>
               <!--Budget-->
               <div class="col-9">
                <select class="form-control select2" style="width: 100%;" id="editBudget_perso" name="budget_perso">
                    <option selected="selected">...... Budget ......</option>
                    <option>Générale</option>
                    <option>Ex provinciale</option>
                  </select>
               </div> 
               <!--Chapitre Budgetaire-->
               <input type="hidden" name="id_perso" id="editId_perso">
               <div class="col-9"> 
                <input type="text" class="form-control" id="editChapitreBudget_perso" placeholder="Chapitre budgetaire" name="cbudget_perso">
               </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-flat" id="annuelerBtn" style="margin-left: 20%;color: #fff;border-color: #bb2839;background-color: #bb2839;">
               Annuler</button>
              <button type="button" id="btnEdit" class="btn btn-flat" style="margin-right: 16%;background-color: #bb2839;color:#fff;">
                Ajouter</button>
            </div>
            </form>
          </div>
          
          <!-- /.modal-content -->
        </div>
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

     <!-- removeMember -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteModalPerso">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
         <p>Voulez vous vraiment effectué cette opération ?</p>
      </div>
      <div class="modal-footer">
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnBtn" class="btn btn-flat">Annuler</button>
        <button style="background-color: #bb2839;color: #fff;" type="button" id="deleteBtn" class="btn btn-flat" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->

<div class="modal fade" tabindex="-1" role="dialog" id="confirmeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
        <p>Voulez vous vraiment ajouter ?</p>
      </div>
      <div class="modal-footer">
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnnulerBtnP" class="btn btn-flat">Annuler</button>
        <button style="background-color: #bb2839;color: #fff;" type="button" id="addBtn" class="btn btn-flat" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->

  <div class="modal fade" tabindex="-1" role="dialog" id="confirmeModalMod">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
        <p>Voulez vous vraiment effectué cette opération ?</p>
      </div>
      <div class="modal-footer">
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnnulerBtnMod" class="btn btn-flat">Annuler</button>
        <button style="background-color: #bb2839;color: #fff;" type="button" id="editBtnOk" class="btn btn-flat" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->
  
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
          </div>
          <!-- /.card -->
          <div class="card" style="margin-top: -3%;">
            <div class="card-header">
              <h3 class="card-title"><u>Liste des personnels</u></h3>
               <div style="margin-right: 13%;float: center;margin-top: -2.5%;">
            <button title="Nouveau personnel" type="button"  class="btn btn-flat" id ="btnModalx" style="background-color: #bb2839;width: 12%; border-color: #bb2839; ">
                <i class="fas fa-plus" style="color: #fff;font-size: 16px;"></i> &nbsp;Nouveau
            </button>
          </div>
          <button title="Nouveau personnel" type="button" class="btn btn-flat" id ="btnModalx" data-toggle="modalx" data-target="#modal-overlay" style="background-color: #bb2839;border-color: #bb2839;margin-top: -6%;width: 10.5%">
            <i class="fas fa-print" style="color: #fff;font-size: 16px;"></i>
            &nbsp;Imprimer
            </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="messages"></div>
             <table  class="table table-bordered" id="example1" style="font-size: 14px;">
                <thead>  
                <tr class="tabtr">
                   <th>Avatar</th>
                  <th>Matricule</th>
                  <th>Pseudo</th>
                  <th>Email</th>
                  <th>N° téléphone</th>
                  <th style="width: 10%;">Actions</th>
                </tr>
                </thead>
            
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="background-color: #bb2839;color: #fff;">
    <div class="float-right d-none d-sm-block" >
      <b>Version</b>1.0
    </div>
    Application pour la gestion des congé et des absences <br>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>documents/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>documents/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>documents/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url();?>documents/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>documents/plugins/toastr/toastr.min.js"></script>
<!-- page script -->
<style type="text/css">
  table.dataTable tbody tr:hover {
   background-color: #f4f6f9 !important;
   color: #bb2839;
   cursor: default;

}
tr  span a:hover{
  color: #e3e4e6 !important;
}

.col-9{
  margin-left: 12%;
  margin-bottom: 3%;
}
</style>
<script>
 var loadTable;
 var msg;
 var fc1;
$(document).ready(function() {
  loadTable = $("#example1").DataTable({
    'ajax': '<?php echo base_url();?>control/listeCompte',
    'orders': [],

  }); 
});

$('#btnAnnulerAddCompte').on('click',function(){
$('#myModal').modal('hide');
});

$(document).on('submit', '#myForm', function(event){
   event.preventDefault();
       var im_user = $('#im_user').val();
       var pseudo_user = $('#pseudo_user').val();
       var numPhone_user = $('#numPhone_user').val();
       var email_user = $('#email_user').val();
       var pass_user = $('#pass_user').val();
       var extention = $('#avatar_user').val().split('.').pop().toLowerCase();
  if(jQuery.inArray(extention, ['gif','png','jpg','jpeg','JPG','JPEG']) == -1){
    toastr.warning('<b>Notification</b> </br>Ajout image est obligatoire').show();
    $('#avatar_user').val('');
    return false;
  }
  if(im_user !='' && pseudo_user !='' && numPhone_user !='' && email_user !='' && pass_user !=''){

    $.ajax({

      url:"<?php echo base_url() . 'control/addCompte' ?>",
      method :'POST',
      data:new FormData(this),
      contentType:false,
      processData:false,
      succes:function(data){
        alert(data);
      }
    });

  }else{
    alert("Champs obligatoires");
  }

});
// nouveau personnel, get url du post

    $('#btnModalx').click(function(){
    $('#myModal').modal('show');
    $('#myForm').attr('action','<?php echo base_url();?>control/addCompte');
    $('#btnAjouter').click(function(){
    $('#confirmeModal').modal('show');
  });
   
 });

 //Annuler bouton   myModalEdit
$(function(){
    $('#annuelerBtn').click(function(){
    $('#myForm')[0].reset();
    $('#myModal').modal('hide');
    loadTable.ajax.reload(null, false);
  });


});
 
//ajouter personnel
 $(function(){
    //
      $('#addBtnxxxxxx').on('click',function(){
       var url = $('#myFormxxxx').attr('action');
       var data = $('#myFormxxxx').serialize();
       var im_user = $('#im_user').val();
       var pseudo_user = $('#pseudo_user').val();
       var numPhone_user = $('#numPhone_user').val();
       var email_user = $('#email_user').val();
       var pass_user = $('#pass_user').val();
       var avatar_user = $('#avatar_user').val().split('.').pop().toLowerCase();

       if(jQuery.inArray(avatar_user, ['gif','png','jpg','jpeg']) == -1){
         alert("Ivanide File");
         $('#avatar_user').val('');
         return false;
       }else{ 
        $.ajax({
       type: 'ajax',
       method: 'post',
       url: url,
       data: data,
       async: false,
       contentType: false,
       processData: false,
       dataType: 'json',
       cache: false,
       success: function(data){
        $('#confirmeModal').modal('hide');
        $('#myModal').modal('hide');
        $('#myForm')[0].reset();
        loadTable.ajax.reload(null, false); 
        toastr.success('<b>Notification</b> </br>Ajout avec succes').show();
        
       },
       error: function(){
        $('#confirmeModal').modal('hide');
        $('#myModal').modal('hide');
        $('#myForm')[0].reset();
        loadTable.ajax.reload(null, false); 
       toastr.error('<b>Notification</b> </br>Erreur d\'ajout ').show();
       }
       });
}
       });

  $('#AnnulerBtnP').on('click',function(){
   var url = $('#myForm').attr('actionsx');
   var data = $('#myForm').serialize();
    $.ajax({
   type: 'ajax',
   method: 'post',
   url: url,
   data: data,
   async: false,
   dataType: 'json',
   cache: false,
   success: function(data){
    $('#confirmeModal').modal('hide');
    loadTable.ajax.reload(null, false); 
   },
   error: function(){
    $('#confirmeModal').modal('hide');
    loadTable.ajax.reload(null, false); 
   
   }
   });

       });
      //AnnulerBtnP
  });
    $(document).on('click', '.lien-btn' ,function() {
      $('a.lien-btn > i').removeClass('fas fa-plus-square').addClass('fas fa-minus-square');
      $(this).find('i').toggleClass('fas fa-plus-square').toggleClass('fas fa-minus-square');
});

    $(document).on('mouseleave', '.liend-btn' ,function() {
      $('a.lien-btn > i').removeClass('fas fa-plus-square').addClass('fas fa-minus-square');
      $(this).find('i').toggleClass('fas fa-plus-square').toggleClass('fas fa-minus-square');

});

//Suppression personnel

function deletePersonnel(id_perso = null) 
{
  if(id_perso) {
    $("#deleteBtn").unbind('click').bind('click', function() {
      $.ajax({
        url: '<?php echo base_url();?>control/deletePersonnel' + '/' + id_perso,
        type: 'post',       
        dataType: 'json',
        success:function(response) {
          if(response.success === true) {
            $("#deleteModalPerso").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.success('<b>Notification</b> </br>Suppression avec succes').show();
          }else{
            $("#deleteModalPerso").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.succes('<b>Notification</b> </br>Erreur de suppression ').show();
          }

        } // /succes
      }); // /ajax
    });
  }
   $("#AnBtn").on('click',function(){
    $("#deleteModalPerso").modal('hide');
   });
}
$(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        type: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        type: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
  });



   // $('#btnEdit').click(function(){ $('#confirmeModalMod').modal('show');});

  //$('#AnnulerBtnMod').click(function(){$('#confirmeModalMod').modal('hide');});

    $("#AnBtn").on('click',function(){
    $("#deleteModalPerso").modal('hide');
   });


function editPersonnel(id_perso = null) 
{
  if(id_perso) {

    $("#myFormEdit")[0].reset();

    $.ajax({
      url: '<?php echo base_url();?>control/selectPersonnelEdit'+'/' + id_perso,
      type: 'post',
      dataType: 'json',
      success:function(response) {
        $("#editId_perso").val(response.id_perso);
        $("#editIm_perso").val(response.im_perso);
        $("#editNom_perso").val(response.nomPre_perso);
        $("#editSexe_perso").val(response.sexe_perso);
        $("#editCorps_perso").val(response.corps_perso);
        $("#editGrade_perso").val(response.grade_perso);
        $("#editDirection_perso").val(response.direction_perso);
        $("#editLieuService_perso").val(response.lieuService_perso);
        $("#editBudget_perso").val(response.budget_perso);
        $("#editChapitreBudget_perso").val(response.chapitreBudget_perso);  
      }
    });
  }
  else {
    alert('error');
  }
}

        $('#btnEdit').click(function(){
        $('#myFormEdit').attr('action','<?php echo base_url();?>control/editPersonnel');
        $('#confirmeModalMod').modal('show');
        });

         $('#AnnulerBtnMod').click(function(){
         $('#confirmeModalMod').modal('hide');
        });

      $(function(){
    //modification
      $('#editBtnOk').on('click',function(){
       var url = $('#myFormEdit').attr('action');
       var data = $('#myFormEdit').serialize();
        $.ajax({
       type: 'ajax',
       method: 'post',
       url: url,
       data: data,
       async: false,
       dataType: 'json',
       cache: false,
       success: function(data){
        $('#confirmeModalMod').modal('hide');
        $('#editModalPerso').modal('hide');
        $('#myFormEdit')[0].reset();
        loadTable.ajax.reload(null, false); 
        toastr.success('<b>Notification</b> </br>Modification avec succes').show();     
       },
       error: function(){
        $('#confirmeModalMod').modal('hide');
        $('#myModalEdit').modal('hide');
        $('#myFormEdit')[0].reset();
        loadTable.ajax.reload(null, false); 
       toastr.error('<b>Notification</b> </br>Erreur de modification ').show();
       }
       });

       });

  $('#AnnulerBtnP').on('click',function(){
   var url = $('#myForm').attr('actionsx');
   var data = $('#myForm').serialize();
    $.ajax({
   type: 'ajax',
   method: 'post',
   url: url,
   data: data,
   async: false,
   dataType: 'json',
   cache: false,
   success: function(data){
    $('#confirmeModal').modal('hide');
    loadTable.ajax.reload(null, false); 
   },
   error: function(){
    $('#confirmeModal').modal('hide');
    loadTable.ajax.reload(null, false); 
   
   }
   });
       });
      //AnnulerBtnP
  });

</script>

<style type="text/css">
.form-elegant .font-small {
font-size: 0.8rem; }

.form-elegant .z-depth-1a {
-webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }

.form-elegant .z-depth-1-half,
.form-elegant .btn:hover {
-webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
</style>
</body>
</html>
