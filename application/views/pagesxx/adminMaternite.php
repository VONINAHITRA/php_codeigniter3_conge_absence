
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
    <link href="<?php echo base_url(); ?>remember/css/style.css" rel="stylesheet">
    <link id="t-colors" href="<?php echo base_url(); ?>remember/color/default.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
  <link href="<?php echo base_url(); ?>remember/css/style.css" rel="stylesheet">
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
    <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" style="border-radius: 15%;" href="<?php echo base_url('images/menetp.jpg') ?>">
  <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>remember/css/style.css" rel="stylesheet">
    <link id="t-colors" href="<?php echo base_url(); ?>remember/color/default.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
  <link href="<?php echo base_url(); ?>remember/css/style.css" rel="stylesheet">
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
<body class="hold-transition sidebar-mini  layout-navbar-fixedxx" style="background-color:#f2f4f8; ">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: -20%; margin-right: -2%;">
<header >
      <div class="top" style="">
        <div class="container" >
          <div class="row">
            <div class="" style="margin-left: 30%;">
              <ul class="topmenu" style="margin-left:-120%;color:red">
                <li><a href="#"><h4>CONGE ET ABSENCE</h4></a></li>
              </ul>
            </div>
            <div class="" style="margin-right: -19%;margin-top:-2.6%;width: 150%; text-align: right;">
              <ul class="" style="color: #fff;padding-bottom: -2%; ">
          
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo" style="margin-left: 30%;">
              <h1><a href="index.html"><img style="border-radius: 52%;width: 7%;" src="<?php echo base_url();?>remember/img/menetp.jpg"> &nbsp;<font color="#059033">MENETP</font></a></h1>
            </div>
            
          </div>
          <div class="span15" style="margin-left: 54%;margin-top: -5%;">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown" >
                      <a href="<?php echo base_url();?>control/accueil2"><i class="icon-home">&nbsp;</i>Accueil</a>
                    </li>
                     <li class="dropdown">
                      <a href="<?php echo base_url();?>control/lienPersonnelAdmin"><i class="icon-group"></i>&nbsp;Personnel</a>
                    </li>
                     <li class="dropdown ">
                      <a href="<?php echo base_url();?>control/lienDecisionAdmin"><i class="icon-dashboard"></i>&nbsp;Décision</a>
                    </li>
                    <li class=" dropdown active">
                      <a href="#"><i class="icon-calendar"></i>&nbsp;Congés &nbsp;<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" style="background-color: #444444 ">
                        <li><a href="<?php echo base_url(); ?>control/lienCongeAnnuelAdmin"> Congé annuel</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienCongeAnnuelAdmin">Congé de malade</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienCongePerso">Congé pour formation</a></li>
                        <li ><a href="<?php echo base_url(); ?>control/lienpaterniteAdmin">Congé de paternité</a></li>
                        <li style="background-color:#f5f5f5;"><a href="<?php echo base_url(); ?>control/lienMaterniteAdmin"><font color="#bb2839">Congé de maternité</font></a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><i class="icon-folder-close"></i>&nbsp;Absences&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" style="background-color: #444444 ">
                        <li><a href="<?php echo base_url(); ?>control/lienAutorisationAdmin">Autorisation d'absence</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienpermissionAdmin">Permission d'absence</a></li>
                      </ul>
                    </li>
                   <li class="dropdown">
                      <a href="#"><i class="icon-signout"></i>&nbsp;&nbsp;Quitter&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" style="background-color: #444444 ">
                        <li><a href="<?php echo base_url(); ?>control/index">Change en Personnel</a></li>
                        <li class="dropdown">
                         <a href="<?php echo base_url('control/logout');?>">&nbsp;Déconnexion </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
  </nav>


 <div class="modal fade" tabindex="-1" id="ModalValider" role="dialog" style="background-color: #f4f6f9;">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; ">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Modifier Demande de conge de Maternité</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> 
            </div>

            <div class="modal-body" style="background-color: #f4f6f9;">
              <form method="post" action="" id="myFormEditValiderxx">
              <!--Matricule-->
              <div class="col-9">
                <input type="text" class="form-control" name="im_conge" id="editNumdec_conge" placeholder="Matricule">
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control" name="nom_conge" id="editIm_conge" placeholder="Nom et prénom(s)">
             </div>
             <!--Nom et prénom-->
            
               <!--Sexe-->
                <div class="col-9">
                  <input type="text" class="form-control select2" style="width: 100%;" id="editTitre_conge" name="sexe_conge">
                    
                </div>
               <div class="col-9">
               <input type="text" class="form-control select2" style="width: 100%;" id="editMotif_conge" name="corps_conge">
                    
                </div>
              <div class="col-9">
                  <input type="text" class="form-control select2" style="width: 100%;" id="editNbjrs_conge" name="grade_conge">
                    
               <!--Direction-->
               </div>
               <div class="col-9">
                  <input type="text" class="form-control select2" style="width: 100%;" id="editLieu_conge" name="dir_conge">
                   
                </div>
               <!--Lieur de Service-->
                  <div class="col-9">
                    <input type="text" class="form-control" placeholder="Lieu de Service" id="editDtdec_conge" name="lieuserv_conge">
                   </div>
               <!--Budget-->
               <div class="col-9">
                <input class="form-control select2" style="width: 100%;" id="editDtdep_conge" name="budget_conge">    
               </div> 
               <!--Chapitre Budgetaire-->
               <input type="hidden" name="id_conge" id="editId_congexxx">
               <div class="col-9"> 
                <input type="text" class="form-control" id="editDtrtr_conge" placeholder="Chapitre budgetaire" name="cbudget_conge">
                <input type="text" class="form-control" id="editStatus_conge" placeholder="Chapitre budgetaire" name="cbudget_conge">
               </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-flat" id="annuelerBtn" style="margin-left: 20%;color: #fff;border-color: #bb2839;background-color: #bb2839;">
               Annuler</button>
              <button type="button" id="btnEditValiderxxx" class="btn btn-flat" style="margin-right: 16%;background-color: #bb2839;color:#fff;">
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid --> 
      </section>
     <!-- removeMember -->
<div class="modal fade" tabindex="-1" role="dialog" id="paterniteValider">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="myFormEditValider">
          <input type="text" id="editId_MaternV" name="id_matern">
        <p>Voulez vous vraiment validé cette demande de congé ?</p>
      </div>
      <div class="modal-footer">
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnBtn" class="btn btn-flat">Annuler</button>
        <button style="background-color: #bb2839;color: #fff;" type="button" id="btnPaternValider" class="btn btn-flat" data-dismiss="modal">OK</button>
      </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->

<div class="modal fade" tabindex="-1" role="dialog" id="editModalRejeter">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="myFormEditRejeter">
         <input type="text" name="id_matern" id="maternId_congeR">
         <p>Voulez vous vraiment effectué cette opération ?</p>
      </div>
      <div class="modal-footer">
      <button style="background-color: #bb2839; color: #fff;" type="button" id="AnnulerBtnRejeter" class="btn btn-flat">Annuler</button>
        <button style="background-color: #bb2839;color: #fff;" type="button" id="btnEditRejeter" class="btn btn-flat" data-dismiss="modal">OK</button>
      </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->

<div class="modal fade" tabindex="-1" role="dialog" id="modalPaterniteRejeter">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
        <form method="post" action="" id="myFormEditValiderxxx">
         <input type="text" name="id_conge" id="editId_congeV">
         <input type="hidden" name="im_conge" id="editIm_congeV">
         <input type="hidden" name="nbjrs_conge" id="editNbjrs_congeV">
         <input type="hidden" name="annee_conge" id="editAnnee_congeV">
        <p>Voulez vous vraiment effectué cette opération ?</p>
        </div>
      <div class="modal-footer" style="margin-left: 75%;">
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnnulerBtnMod" class="btn btn-flat">Annuler</button>
        <button type="button" id="btnEditValiderxxx" class="btn btn-flat" style="margin-right: 16%;background-color: #bb2839;color:#fff;">OK</button>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" tabindex="-1" role="dialog" id="modalPaterniteRejetexxxr">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body"> 
         <p>Voulez vous vraiment effectué cette opération ddd?</p>
        </div>
      <div class="modal-footer" style="margin-left: 75%;">
        <button style="background-color: #bb2839; color: #fff;" type="button" id="btnSupValiderAn" class="btn btn-flat">Annuler</button>
        <button type="button" id="btnSupValiderOk" class="btn btn-flat" style="margin-right: 16%;background-color: #bb2839;color:#fff;">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->
  
    </section>
    <!-- Main content -->
    <section class="content" style="margin-left: -20%;margin-right: 2%;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
          </div>
          <!-- /.card -->
          <div class="card" style="margin-top: -3%;">
            <div class="card-header">
              <h3 class="card-title">LISTE DE CONGE DE MATERNITE</h3>
               <div style="margin-right: 13%;float: center;margin-top: -2.5%;">
           
          </div>
         
            </div>
            <!-- /.card-header -->
             <div class="card-body" style="margin-top: -2.7%;">
            
        <div class="row mt-4">
            <nav class="w-150">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true" style="font-size: 16px;font-style:;color: #717171;">Demande de congé de maternité</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false" style="font-size: 16px;font-style:; color: #717171;">Demande validé</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false" style="font-size: 16px;font-style:;color: #717171;">Demande rejeté</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent" style="font-size: 13px; width: 100%;">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 

          <table id="tabEncours" class="table table-bordered " style="font-size: 14px; width: 100%;">
                <thead>
                <tr style="background-color: #f4f6f9;color:#000;border-color: red;">
                  <th style=" background: #444444;color: #fff">Matricule</th>
                  <th style=" background: #444444;color: #fff">Titre de l'année</th>
                  <th style=" background: #444444;color: #fff">Nombre de jours demandé </th>
                  <th style=" background: #444444;color: #fff">Lieu de jouissance</th>
                  <th style=" background: #444444;color: #fff">Date de décision</th>
                  <th style=" background: #444444;color: #fff">Date de départ</th>
                  <th style=" background: #444444;color: #fff">Date de retour</th>
                  <th style=" background: #444444;color: #fff">
                    Actions
                  </th>
                </tr>
                </thead>
                  
              </table>
                </div>

              <div class="tab-pane fade show active" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab" style="width: 100%;"> 
         <table id="tabValider" class="table table-bordered " style="font-size: 14px;width: 100%; ">
                <thead>
                <tr  style="background-color: #f4f6f9;color:#000;border-color: red;">
                  <th style=" background: #444444;color: #fff">Matricule</th>
                  <th style=" background: #444444;color: #fff">Titre de l'année </th>
                  <th style=" background: #444444;color: #fff">Nombre jours </th>
                  <th style=" background: #444444;color: #fff">Lieu de jouissance</th>
                  <th style=" background: #444444;color: #fff">Date de décision</th>
                  <th style=" background: #444444;color: #fff">Dtae de départ</th>
                  <th style=" background: #444444;color: #fff">Date de retour</th>
                  <th style=" background: #444444;color: #fff">Actions</th>
                </tr>
                </thead>
              </table>
               </div>
              <div class="tab-pane fade show active" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab" style="width: 100%;" >

<table id="tabRejeter" class="table table-bordered" style="font-size: 14px; width: 100%;">
                <thead>
                <tr  style="background-color: #f4f6f9;color:#000;border-color: red;">
                  <th style=" background: #444444;color: #fff">Matricule</th>
                  <th style=" background: #444444;color: #fff">Titre (année) </th>
                  <th style=" background: #444444;color: #fff">Nombre jours </th>
                  <th style=" background: #444444;color: #fff">Lieu de jouissance</th>
                  <th style=" background: #444444;color: #fff">Date de décision</th>
                  <th style=" background: #444444;color: #fff">Date de départ</th>
                  <th style=" background: #444444;color: #fff">Date de retour</th>
                  <th style=" background: #444444;color: #fff">Actions</th>
                </tr>
                </thead>
                  
              </table>

               </div>
            </div>
          </div>
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
<script src="<?php echo base_url();?>remember/js/custom.js"></script>
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
 var loadTableEncours;
 var loadTableValider;
 var loadTableRejeter;
 var msg;
 var fc1;
$(document).ready(function() {
  loadTableEncours = $("#tabEncours").DataTable({
    'ajax': '<?php echo base_url();?>control/listeCongeMaterniteEncours',
    'orders': [],
  }); 
});

$(document).ready(function() {
  loadTableValider = $("#tabValider").DataTable({
    'ajax': '<?php echo base_url();?>control/listeCongeMaterniteValider',
    'orders': [],
  }); 
});

$(document).ready(function() {
  loadTableRejeter = $("#tabRejeter").DataTable({
    'ajax': '<?php echo base_url();?>control/listeCongeMaterniteRejeter',
    'orders': [],
  }); 
});
// nouveau personnel, get url du post

    $('#btnModalx').click(function(){
    $('#myModal').modal('show');
    $('#myForm').attr('action','<?php echo base_url();?>control/addPersonnel');
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
      $('#addBtn').on('click',function(){
       var url = $('#myForm').attr('action');
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
    loadTableValider.ajax.reload(null, false);
   },
   error: function(){
    $('#confirmeModal').modal('hide');
    loadTable.ajax.reload(null, false); 
    loadTableValider.ajax.reload(null, false);
   
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
function imprimerCongeMaternitePerso(id_matern = null) 
{
  if(id_matern) {
document.location.href= '<?php echo base_url();?>control/pdfCongeMaternite'+'/' + id_matern;
  }else {
    alert('error');
  }
}

//Suppression personnel

function RejeterMaternite(id_matern = null) 
{
  if(id_matern) {
    $("#btnSupValiderOk").unbind('click').bind('click', function() {
      $.ajax({
        url: '<?php echo base_url();?>control/congeMaterniteRejeter' + '/' + id_matern,
        type: 'post',       
        dataType: 'json',
        success:function(response) {
         $("#confirmeSupValider").modal('hide');
        loadTableEncours.ajax.reload(null, false); 
        loadTableValider.ajax.reload(null, false);
        loadTableRejeter.ajax.reload(null, false);
         toastr.success('<b>Notification</b> </br>Suppression avec succes').show();
        },
        error:function(){
        loadTableEncours.ajax.reload(null, false); 
        loadTableValider.ajax.reload(null, false);
        loadTableRejeter.ajax.reload(null, false);
         toastr.error('<b>Notification</b> </br>Erreur de suppression').show();

        }// /succes
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


function validerMaternite(id_matern = null) 
{
  if(id_matern) {

    $.ajax({
      url: '<?php echo base_url();?>control/selectMaterniteValider'+'/' + id_matern,
      type: 'post',
      dataType: 'json',
      success:function(response) {
        $("#editId_MaternV").val(response.id_matern);
      }
    });
  }
  else {
    alert('error');
  }
}


function RejeterMaternite(id_matern = null) 
{
  if(id_matern) {

    $.ajax({
      url: '<?php echo base_url();?>control/selectMaterniteRejeter'+'/' + id_matern,
      type: 'post',
      dataType: 'json',
      success:function(response) {
        $("#maternId_congeR").val(response.id_matern);
      }
    });
  }
  else {
    alert('error');
  }
}

        $('#btnPaternValider').click(function(){
        $('#myFormEditValider').attr('action','<?php echo base_url();?>control/congeMaterniteValider');
        $('#confirmeModalMod').modal('hide');
        });

         $('#AnnulerBtnMod').click(function(){
         $('#confirmeModalMod').modal('hide');

        });


        $('AnnulerBtnRejeter').click(function(){
        $('#editModalRejeter').modal('hide');
      });

       $(function(){
    //modification
       $('#btnPaternValider').on('click',function(){
       var url = $('#myFormEditValider').attr('action');
       var data = $('#myFormEditValider').serialize();
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
        $('#myFormEditValider')[0].reset();
        loadTableEncours.ajax.reload(null, false); 
        loadTableValider.ajax.reload(null, false);
        loadTableRejeter.ajax.reload(null, false);
        toastr.success('<b>Notification</b> </br>Validation avec succes').show();     
       },
       error: function(){
        $('#confirmeModalMod').modal('hide');
        $('#myModalEdit').modal('hide');
        $('#myFormEditValider')[0].reset();
        loadTableEncours.ajax.reload(null, false); 
        loadTableValider.ajax.reload(null, false);
        loadTableRejeter.ajax.reload(null, false);
       toastr.error('<b>Notification</b> </br>Erreur de validation').show();
       }
       });

       });

       $('#btnEditRejeter').click(function(){
        $('#myFormEditRejeter').attr('action','<?php echo base_url();?>control/congeMaterniteRejeter');
        });


 $(function(){
    //modification
     
      $('#btnEditRejeter').on('click',function(){
       var url = $('#myFormEditRejeter').attr('action');
       var data = $('#myFormEditRejeter').serialize();
        $.ajax({
       type: 'ajax',
       method: 'post',
       url: url,
       data: data,
       async: false,
       dataType: 'json',
       cache: false,
       success: function(data){
        $('#editModalRejeter').modal('hide');
        $('#myFormEditRejeter')[0].reset();
        loadTableEncours.ajax.reload(null, false); 
        loadTableValider.ajax.reload(null, false);
        loadTableRejeter.ajax.reload(null, false);
        toastr.success('<b>Notification</b> </br>Rejet avec succes').show();     
       },
       error: function(){
        $('#editModalRejeter').modal('hide');
        $('#myFormEditRejeter')[0].reset();
        loadTableEncours.ajax.reload(null, false); 
        loadTableValider.ajax.reload(null, false);
        loadTableRejeter.ajax.reload(null, false);
        toastr.error('<b>Notification</b> </br>Erreur de rejet ').show();
       }
       });
});
       });

  $('#AnnulerBtnP').on('click',function(){
   var url  = $('#myForm').attr('actionsx');
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
