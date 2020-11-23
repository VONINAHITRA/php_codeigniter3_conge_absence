  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perso compte</title>
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
                      <a class="dropdown-item" href="<?php echo base_url(); ?>control/accueil" style="background-color: #bb2839;color: #fff;border-color: #fff;margin-bottom: 0.5%;">Accueil</a>
                      <a class="dropdown-item"  href="<?php echo base_url(); ?>control/liencomptePerso"style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;">Mon compte</a>
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
            <a href="<?php echo base_url(); ?>control/liencomptePerso" class="nav-link lien-btn btn btn-flat"  style="background-color: #bb2839;">
              <p style="margin-left: -2%;">
                <i class="fas fa-plus-square"></i>
               &nbsp;COMPTE ET CONSULTER
               
              </p>
            </a>

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
                <a href="<?php echo base_url();?>control/lienautorisationPerso" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Autorisation</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url();?>control/lienpermissionPerso" class="nav-link">
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
                <a href="<?php echo base_url('control/lienCongeAnnuelPerso'); ?>" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé annuel</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url('control/lienpaternitePerso'); ?>" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé de paternité</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2839;">
                <a href="<?php echo base_url();?>control/lienmaternitePerso" class="nav-link">
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
              <h5> <u>COMPTE ET CONSULTATION</u></h5>
            </div>
        </div>
      </div><!-- /.container-fluid -->
 <section class="content" >
      <div class="container-fluid" >
        <div class="row">
          <div class="col-md-3" >
            <!-- Profile Image -->
            <div class="card card-primarsy card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
               <?php echo $avatar_user; ?>  
                </div>

                <h3 class="profile-username text-center"><?php echo $nomPre_perso; ?></h3>

                <p class="text-muted text-center">Personnel du MENETP</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Pseudo: </b> <a class="float-right"><?php echo $pseudo_user; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email: </b> <a class="float-right"><?php echo $email_user; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Téléphone: </b> <a class="float-right"><?php echo $numPhone_user; ?></a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block" style="background-color: #bb2739;border-color: #bb2739;"><b>Modifier mon compte</b></a>
              </div>
              <!-- /.card-body -->
            </div>
             <!-- About Me Box -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
  
                <table>
                  <td> Reste de permission : &nbsp;&nbsp;<input style="width: 10%; border-color: #fff; border-width: 0px" type="text" name="" id="ok2" readonly> Jour(s)</td>
                  <tr> Reste congé annuel : &nbsp;&nbsp;&nbsp;<input style="width: 5%; border-color: #fff; border-width: 0px"  type="text" name="" id="ok" readonly> Jour(s)</tr>
                  <td> Reste d'autorisation : &nbsp;&nbsp;<input style="width: 10%; border-color: #fff; border-width: 0px" type="text" name="" id="ok3" readonly> Jour(s)</td>
                </table>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <!-- /.post -->
            <div class="card-body" style="">

            <br>
             <div>
             <table  class="table table-head-fixed table-bordered" id="example1" style="font-size: 13px; ">
                <thead>  
                <tr class="tabtrxx" style="background-color: #1b9a44">
                  <th>N° décision</th>
                  <th>Conge annuel</th>
                  <th>Permission d'absence</th>  
                  <th>Autorisation d'absence</th>  
                  <th>Année</th>  
                </tr>
                
                </thead>
                </table>
</div>
  </div>
  <!-- Post -->                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
            <!-- /.card -->
      <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Demande de congé de maternité</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> 
            </div>
              <form method="post"  action="" id="myForm">
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="text" class="form-control" name="im_matern" placeholder="Matricule" required>
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control" name="lieu_matern" placeholder="Lieu de jouissance" required>
             </div>
              <div class="col-9">
              <input type="date" class="form-control" id="dtdp_matern" name="dtdp_matern" placeholder="Date de départ" required>
             </div>
               <!--Lieur de Service-->
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-flat" id="annuelerBtn" style="margin-left: 50%;color: #fff;border-color: #bb2839;background-color: #bb2839;">
               Annuler</button>&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
              <button type="button" id="btnAjouter"  class="btn btn-flat" style="margin-right: 30%;background-color: #bb2839;color:#fff;">
               OK</button>
            </div>
            </form>

  </div>
  <!--/Form without header-->
          <!-- /.modal-content -->
        </div>
      </section>

       <div class="modal fade" tabindex="-1" id="editDemandeencours" role="dialog">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; ">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Modifier congé de maternité</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> 
            </div>

            <div class="modal-body" style="background-color: #f4f6f9;">
              <form method="post" action="" id="myFormEdit">
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="text" class="form-control" id="editim_matern" name="im_matern" placeholder="Matricule" required disabled>
              </div>

              <div class="col-9" style="margin-top: 3%;">
                <input type="hidden" class="form-control" id="editid_matern" name="id_matern" placeholder="Matricule" required>
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control"  id="editlieu_matern" name="lieu_matern" placeholder="Lieu de jouissance" required>
             </div>
              <div class="col-9">
              <input type="date" class="form-control"  id="editdtdeped_matern" name="dtdep_matern" placeholder="Date de départ" required>
             </div>

            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-flat" id="annuelerBtn" style="margin-left: 20%;color: #fff;border-color: #bb2839;background-color: #bb2839;">
               Annuler</button>
              <button type="button" id="btnEdit" class="btn btn-flat" style="margin-right: 16%;background-color: #bb2839;color:#fff;">
                OK</button>
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
<div class="modal fade" tabindex="-1" role="dialog" id="annulerDemandeEncours">
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
        <p>Voulez vous vraiment effcetué cette opération ?</p>
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
 var im_users = '<?php echo $im_user; ?>';
$(document).ready(function() {
  loadTable = $("#example1").DataTable({
    'ajax': '<?php echo base_url();?>control/listeComptePerso' + '/' + im_users,
    'orders': [],
  }); 
});

$(document).ready(function() {
  loadTable = $("#example2").DataTable({
    'ajax': '<?php echo base_url();?>control/listeComptePerso' + '/' + im_users,
    'orders': [],
  }); 
});

$(document).ready(function() {
        $.ajax({
        url: '<?php echo base_url();?>control/selectResteAll'+'/' + <?php echo $im_perso; ?>,
        type: 'post',
        dataType: 'json',
        success:function(response) {
        $("#ok3").val(response.auto_congedroit);
        $("#ok2").val(response.permi_congedroit);
      }
    });
  });

$(document).ready(function() {
        $.ajax({
        url: '<?php echo base_url();?>control/selectResteSomme'+'/' + <?php echo $im_perso; ?>,
        type: 'post',
        dataType: 'json',
        success:function(response) {
        $("#ok").val(response.nbjrs_congedroit);
      }
    });
  });
// nouveau personnel, get url du post

    $('#btnModalx').click(function(){
    $('#myModal').modal('show');
    $('#btnAjouter').click(function(){
      var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear(),
      datec = year + "-" + month + "-" + day ;
      var datedep = $("#dtdp_matern").val();
      if(datedep >= datec){
    $('#myForm').attr('action','<?php echo base_url();?>control/demandeMaternite');
    $('#confirmeModal').modal('show');

  }else{
  toastr.warning("Notification </br> La date de départ doit être égale ou supérieur de la date aujourd'hui").show();
  }
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

function annulerDemandeEncoursMatern(id_matern = null) 
{
  if(id_matern) {
    $("#deleteBtn").unbind('click').bind('click', function() {
      $.ajax({
        url: '<?php echo base_url();?>control/annulerDemandeEncoursMatern' + '/' + id_matern,
        type: 'post',       
        dataType: 'json',
        success:function(response) {
          if(response.success === true) {
            $("#annulerDemandeEncours").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.success('<b>Notification</b> </br>Votre demande a été annulé avec succes').show();
          }else{
            $("#annulerDemandeEncours").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.succes('<b>Notification</b> </br>Erreur lors de traitement de données ').show();
          }

        } // /succes
      }); // /ajax
    });
  }

}
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


function editCongeEncoursMtern(id_matern = null) 
{
  if(id_matern) {

    $("#myFormEdit")[0].reset();

    $.ajax({
      url: '<?php echo base_url();?>control/selectMaterniteEdit'+'/' + id_matern,
      type: 'post',
      dataType: 'json',
      success:function(response) {
        $("#editid_matern").val(response.id_matern);
        $("#editim_matern").val(response.im_matern);
        $("#editlieu_matern").val(response.lieu_matern);
        $("#editdtdeped_matern").val(response.dtdep_matern);
      }
    });
  }
  else {
    alert('error');
  }
}

        $('#btnEdit').click(function(){
       var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear(),
      datec = year + "-" + month + "-" + day ;
      var datedep = $("#editdtdeped_matern").val();
      if(datedep >= datec){
         $('#myFormEdit').attr('action','<?php echo base_url();?>control/editMaternitePerso');
         $('#confirmeModalMod').modal('show');
      }else{
       
        toastr.warning("Notification </br> La date de départ doit être égale ou supérieur de la date aujourd'hui").show();
      }
      
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
