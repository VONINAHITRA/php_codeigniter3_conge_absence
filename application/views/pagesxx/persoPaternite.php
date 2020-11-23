
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perso paternité </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" style="border-radius: 15%;" href="<?php echo base_url('images/menetp.jpg') ?>">

  <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>remember/css/style.css" rel="stylesheet">
    <link id="t-colors" href="<?php echo base_url(); ?>remember/color/default.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
  <link href="<?php echo base_url(); ?>remember/css/style.css" rel="stylesheet">
  <!-- Ionicons -->
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

<body class="hold-transition sidebar-mini  layout-navbar-fixedxx" style="background-color: #f4f6f9">
<div class="wrapper" >
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: -20%;">
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
          <div class="span8" style="margin-left: 60%;margin-top: -4%;">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown" >
                      <a href="<?php echo base_url();?>control/accueil"><i class="icon-home">&nbsp;</i>Accueil</a>
                    </li>
                     <li class="dropdown">
                      <a href="<?php echo base_url();?>control/liencomptePerso"><i class="icon-user"></i>&nbsp;Mon compte</a>
                    </li>
                    <li class="active dropdown">
                      <a href="#"><i class="icon-calendar"></i>&nbsp;Congés &nbsp;<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" style="background-color: #444444 ">
                        <li><a href="<?php echo base_url(); ?>control/lienCongeAnnuelPerso"> Congé annuel</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienCongePerso">Congé de malade</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienCongePerso">Congé de formation</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienpaternitePerso">Congé de paternité</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienmaternitePerso">Congé de maternité</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><i class="icon-folder-close"></i>&nbsp;Absences&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" style="background-color: #444444 ">
                        <li><a href="<?php echo base_url(); ?>control/lienAutorisationPerso">Autorisation d'absence</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienPermissionPerso">Permission d'absence</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><i class="icon-signout"></i>&nbsp;&nbsp;Quitter&nbsp;&nbsp;<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" style="background-color: #444444 ">
                        <li><a href="<?php echo base_url(); ?>control/changeDroit">Change en Admin</a></li>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Nouveau demande</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> 
            </div>
              <form method="post"  action="" id="myForm">
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="text" class="form-control" value="" name="im_patern" id="im_patern" placeholder="Matricule" min="0" required>
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control" name="lieu_patern" id="lieu_patern" placeholder="Lieu de jouissance" required>
             </div>
              <div class="col-9">
                <label><u>Date de départ:</u></label>
              <input type="date" class="form-control" id="dateDepDemande" name="dtdp_patern" placeholder="Date de départ" required>
             </div>
               <!--Lieur de Service-->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-flat" id="annuelerBtnYes" style="margin-left: 50%;color: #fff;border-color: #bb2839;background-color: #bb2839;">
               Annuler</button>&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
              <button type="button" id="btnAjouter"  class="btn btn-flat" style="margin-right: 30%;background-color: #bb2839;color:#fff;">
               Ajouter</button>
            </div>
            </form>

  </div>
  <!--/Form without header-->
          <!-- /.modal-content -->
        </div>
      </section>

       <div class="modal fade" tabindex="-1" id="editModalPaternite" role="dialog">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; ">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Modifier demande de paternité</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> 
            </div>

            <div class="modal-body" style="background-color: #f4f6f9;">
              <form method="post" action="" id="myFormEdit">
              <!--Matricule-->
              <div class="col-9">
                <input type="hidden" class="form-control" value="<?php echo $im_perso; ?>" name="im_patern" id="editim_patern" placeholder="Matricule" disabled>
              </div>
              <!--Nom et prénom-->
               <!--Lieur de Service-->
              <div class="col-9">
              <input type="hidden" class="form-control" id="editid_patern" name="id_patern">
             </div>

             <div class="col-9">
              <input type="text" class="form-control" id="editlieu_patern" name="lieu_patern">
             </div>
               <!--Budget-->
               
               <!--Chapitre Budgetaire-->
               <div class="col-9"> 
                <input type="date" class="form-control" id="editdtdeped_patern"  name="editdtdeped_patern">
               </div>

            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-flat" id="annuelerBtn" style="margin-left: 50%;color: #fff;border-color: #bb2839;background-color: #bb2839;">
               Annuler</button>&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
              <button type="button" id="btnEdit" class="btn btn-flat" style="margin-right: 30%;background-color: #bb2839;color:#fff;">
                Sauvegarder</button>
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
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnBtnOK" class="btn btn-flat">Annuler</button>
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
        <p>Voulez vous vraiment effcetué cette opération x?</p>
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
        <p>Voulez vous vraiment effectué cette opération y?</p>
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
    <section class="content" style="margin-left: 2%;margin-right: 2%;margin-top: -36.5%;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
          </div>
          <!-- /.card -->
          <div class="card" style="margin-top: -3%;">
            <div class="card-header">
              <h3 class="card-title"><b>Liste des congé de paternité</b></h3>
               <div style="margin-right: 2%;float: center;margin-top: -1.7%;">
            <button title="Nouveau personnel" type="button"  class="btn btn-flat" id ="btnModalx" style="background-color: #bb2839;width: 12%; border-color: #bb2839;border-radius:5px; ">
                <i class="fas fa-plus-circle" style="color: #fff;font-size: 16px;"></i> &nbsp;Nouveau
            </button>
          </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="messages"></div>
             <table  class="table table-bordered" id="example1" style="font-size: 14px;">
                <thead>  
                <tr class="tabtr">
                  <th style=" background: #444444;color: #fff">Matricule</th>
                  <th style=" background: #444444;color: #fff">Titre de congé</th>
                  <th style=" background: #444444;color: #fff; width: 18%;">Motif</th>
                  <th style=" background: #444444;color: #fff">Lieu de jouissance</th>
                  <th style=" background: #444444;color: #fff">Nombres de jours demandés</th>
                  <th style=" background: #444444;color: #fff">Date de congé</th>
                  <th style=" background: #444444;color: #fff">Date de départ</th>
                  <th style=" background: #444444;color: #fff">Date de retour</th>
                  <th style=" background: #444444;color: #fff">Statut</th>
                  <th style=" background: #444444;color: #fff">Actions</th>
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
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x" style=""></i></a>
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
 var loadTable;
 var msg;
 var fc1;
$(document).ready(function() {
  loadTable = $("#example1").DataTable({
    'ajax': '<?php echo base_url();?>control/listePaternitePerso',
    'orders': [],

  }); 
});
// nouveau personnel, get url du post
    $('#btnModalx').click(function(){
  
    $('#myModal').modal('show');
    $('#myForm').attr('action','<?php echo base_url();?>control/demandePaternite');
 });

 //Annuler bouton   myModalEdit annuelerBtn
$(function(){
    $('#annuelerBtn').click(function(){
    $('#myFormEdit')[0].reset();;
    $('#editModalPaternite').modal('hide');
    loadTable.ajax.reload(null, false);
  });
    $('#annuelerBtnYes').click(function(){
    $('#myForm')[0].reset();
    $('#myModal').modal('hide');
    loadTable.ajax.reload(null, false);
  });
  });
 
//ajouter personnel
 $(function(){ 
      //$('#confirmeModal').modal('show');
  $("#btnAjouter").on('click', function(){
    var im     = $("#im_patern").val();
      var annee  = $("#annee_matern").val();
      var lieu   = $("#lieu_matern").val();
      var dtdp   = $("#dateDepDemande").val();
              Nowdate = new Date();
              Nowdate.setHours(0);
              Nowdate.setMinutes(0);
              Nowdate.setSeconds(0);
              Nowdate.setMilliseconds(0);
              var thedate=dtdp.split('-');
              var an=thedate[0];
              var mo=thedate[1];
              var jo=thedate[2];
              var dd_objet = new Date(an,mo-1,jo);
    if(lieu !='' && dtdp !='' && im !=''){
              if (dd_objet >= Nowdate){
               $("#confirmeModal").modal('show');
                  }else{
                  toastr.warning("Notification </br> La date de départ doit être égale ou supérieur de la date aujourd'hui").show();
      }
      }else{
     
      toastr.warning("Notification </br> Tous les champs sont obligatoire.").show();
    }
});
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
       success:function(response) {
          if(response.success == true) {
          loadTable.ajax.reload(null, false); 
          $('#myModal').modal('hide');
          $('#confirmeModal').modal('hide');
          toastr.success('<b>Notification</b> </br>Votre demande a été bien envoyé').show();
          }else{
          loadTable.ajax.reload(null, false); 
          $('#confirmeModal').modal('hide');
          toastr.warning('<b>Notification</b> </br>Vous ne pouvez pas cette option,elle est seulement pour le sexe masculin seulement').show();
          }
        } // /succes

       });
  
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
    $(document).on('click', '.lien-btn' ,function() {
      $('a.lien-btn > i').removeClass('fas fa-plus-square').addClass('fas fa-minus-square');
      $(this).find('i').toggleClass('fas fa-plus-square').toggleClass('fas fa-minus-square');
});

    $(document).on('mouseleave', '.liend-btn' ,function() {
      $('a.lien-btn > i').removeClass('fas fa-plus-square').addClass('fas fa-minus-square');
      $(this).find('i').toggleClass('fas fa-plus-square').toggleClass('fas fa-minus-square');

});

function imprimerCongePaternitePerso(id_patern = null) 
{
  if(id_patern) {
document.location.href= '<?php echo base_url();?>control/pdfCongePaternite'+'/' + id_patern;
  }else {
    alert('error');
  }
}

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

function annulerDemandeEncoursPatern(id_patern = null) 
{
  if(id_patern) {
    $("#deleteBtn").unbind('click').bind('click', function() {
      $.ajax({
        url: '<?php echo base_url();?>control/annulerDemandeEncoursPatern' + '/' + id_patern,
        type: 'post',       
        dataType: 'json',
        success:function(response) {
          if(response.success === true) {
            $("#annulerDemandeEncours").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.success('<b>Notification</b> </br>Votre demande a été annulé ou supprimé').show();
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

   // $('#btnEdit').click(function(){ $('#confirmeModalMod').modal('show');});

  $('#AnnulerBtnMod').click(function(){
    $('#confirmeModalMod').modal('hide');});

    $("#AnBtnOK").on('click',function(){
    $("#annulerDemandeEncours").modal('hide');
   });


function editPaternite(id_patern = null) 
{
  if(id_patern) {
    $("#myFormEdit")[0].reset();
    $.ajax({
      url: '<?php echo base_url();?>control/selectPaterniteEdit'+'/' + id_patern,
      type: 'post',
      dataType: 'json',
      success:function(response) {
        $("#editid_patern").val(response.id_patern);
        $("#editim_patern").val(response.im_patern);
        $("#editlieu_patern").val(response.lieu_patern);
        $("#editdtdeped_patern").val(response.dtdep_patern);
      }
    });
  }

  /*

   var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear(),
      datec = year + "-" + month + "-" + day ;
      var datedep = $("#dateDepDemande").val();
  */
  else {
    alert('error');
  }
}

      $('#btnEdit').click(function(){
       var dtdp = $("#editdtdeped_patern").val();
       var lieu = $("#editlieu_patern").val();
       Nowdate = new Date();
              Nowdate.setHours(0);
              Nowdate.setMinutes(0);
              Nowdate.setSeconds(0);
              Nowdate.setMilliseconds(0);
              var thedate=dtdp.split('-');
              var an=thedate[0];
              var mo=thedate[1];
              var jo=thedate[2];
              var dd_objet = new Date(an,mo-1,jo);
              if(lieu !='' && dtdp !=''){
        if (dd_objet >= Nowdate){
        $('#myFormEdit').attr('action','<?php echo base_url();?>control/editPaternitePerso');
        $('#confirmeModalMod').modal('show');
      }else{
         toastr.warning('<b>Notification</b> </br> La date de départ doit être égale ou supérieur de la date aujourd\'hui').show();
      }}else{
        toastr.warning('<b>Notification</b> </br>Tous les champs sont obligatoires').show();
      }
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
        $('#editModalPaternite').modal('hide');
        $('#myFormEdit')[0].reset();
        $('#myModalEdit').modal('hide');
        loadTable.ajax.reload(null, false); 
        toastr.success('<b>Notification</b> </br>Votre demande a été bien modifié ccc').show();     
       },
       error: function(){
        $('#confirmeModalMod').modal('hide');
        $('#myFormEdit')[0].reset();
        loadTable.ajax.reload(null, false); 
        toastr.error('<b>Notification</b> </br>Erreur lors de traitement de données, veuillez réssayer SVP.').show();
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
