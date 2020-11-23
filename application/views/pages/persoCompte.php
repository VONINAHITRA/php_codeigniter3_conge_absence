      <?php
      $user = $this->session->userdata('user');
      extract($user);
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Congés Perso</title>
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

  <div id="wrapper">
<nav class="main-header  navbar-expand navbar-white navbar-light" style="margin-left: -18%;margin-right: -2%;">
<header >
      <div class="top" style="">
        <div class="container" >
          <div class="row">
            <div class="" style="margin-left: 30%;">
              <ul class="topmenu" style="margin-left:-120%;color:red">
                <li><a href="#"><h4>CONGE ET ABSENCE</h4></a></li>
              </ul>
            </div>
            <div class="" style="margin-right: -17%;margin-top:-2.6%;width: 150%; text-align: right;">
              <ul class="" style="color: #fff;padding-bottom: -2%; ">
            <?php echo $avatar_user; ?>&nbsp;<font size="2px"><?php echo $nomPre_perso; ?></font>
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
                     <li class="active dropdown">
                      <a href="<?php echo base_url();?>control/liencomptePerso"><i class="icon-user"></i>&nbsp;Mon compte</a>
                    </li>
                    <li class="dropdown">
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
    <section id="content" style="width: 115%;">
      <div class="container" >
        <div class="row" style="margin-left: -16%;">

          <div class="span3" style="width: 4%;">

            <aside class="left-sidebar" style="margin-left: -15%;">
              <div class="widget" style="float: left;margin-left: -1%;">
              <div class="card card-primarsy card-outline" style="" >
              <div class="card-body box-profile">
                <div class="text-center">
               <?php echo $avatar_user; ?>
                </div>
         <br>
                <h6 class="profile-username text-center"><?php echo $nomPre_perso; ?></h6>

                <p class="text-muted text-center">Personnel du MENETP</p>

                <ul class="list-group list-group-unbordered mb-3" style="font-size: 16px;">
                  <li class="list-group-item">
                    <b>Pseudo: </b><br><a class="float-right"><?php echo $pseudo_user; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email: </b> <br><a class="float-right"><?php echo $email_user; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Téléphone: </b> <br><a class="float-right"><?php echo $numPhone_user; ?></a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block" style="background-color: #bb2739;border-color: #bb2739;"><b>Modifier mon compte</b></a>
              </div>
              <!-- /.card-body -->
            </div>
              </div>
            </aside>
          </div>
          <div style="width:80%;margin-left: 21%;margin-top:-39.5%;float: right;">
          <div class="card" >
          	<div class="card-header">
                 <table>
                  <td> Reste de permission : &nbsp;&nbsp;<input style="width: 10%; border-color: #fff; border-width: 0px" type="text" name="" id="ok2" readonly> Jour(s)</td>
                  <tr> Reste congé annuel : &nbsp;&nbsp;<input style="width: 5%; border-color: #fff; border-width: 0px"  type="text" name="" id="ok" readonly>Jour(s)</tr>
                  <td> Reste d'autorisation : &nbsp;&nbsp;<input style="width: 10%; border-color: #fff; border-width: 0px" type="text" name="" id="ok3" readonly> Jour(s)</td>
                </table>
               </div>
            <div class="card-body" style="">
            <table  class="table table-head-fixed table-bordered" id="example1" style="font-size: 13px;width: 100%;text-align: center; ">
                <thead>  
                <tr class="tabtrxx" style="background-color: #1b9a44">
                  <th style=" background: #f7f6f3;color: #000">N° décision</th>
                  <th style=" background: #f7f6f3;color: #000">Congé annuel</th>
                  <th style=" background: #f7f6f3;color: #000"> Permission Absences</th>  
                  <th style=" background: #f7f6f3;color: #000">Autorisation Absences</th>
                  <th style=" background: #f7f6f3;color: #000">Année</th>  
                  <th style=" background: #f7f6f3;color: #000">Actions</th>
                </tr>
                </thead>
                </table>
          </div>
          </div>
      </div>
</div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

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
 var im_users = '<?php echo $im_user; ?>';
$(document).ready(function() {
  loadTable = $("#example1").DataTable({
    'ajax': '<?php echo base_url();?>control/listeComptePerso' + '/' + im_users,
    'orders': [],
  }); 
});

$(document).ready(function() {
  loadTable = $("#example2").DataTable({
    'ajax': '<?php echo base_url();?>control/listeComptePersox' + '/' + im_users,
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
