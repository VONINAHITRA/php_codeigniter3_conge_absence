      <?php
      $user = $this->session->userdata('user');
      extract($user);
      ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Autorisation Perso</title>
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
<style>

 #aside{
  background-image: url("<?php echo base_url('images/bg.png');?>");
  background-color: #fff;

  }

.barres {
  background-image: url("<?php echo base_url('images/bg.png');?>");
  background-color: #fff;
  }
}  

</style>
<body class="hold-transition sidebar-mini  layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light barres" >
    <!-- Left navbar links -->
    <ul class="navbar-nav" >
     
      <li class="nav-item d-none d-sm-inline-block">
       <div style="margin-left: 40%;width: 100%;font-size: 27px;color: #be2437;"> <b>GESTION DE CONGES ET DES ABSENCES</b></div>
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
                      <a class="dropdown-item" href="<?php echo base_url(); ?>control/liencomptePerso" style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;">Mon compte</a>
                       <a class="dropdown-item" href="<?php echo base_url('control/logout');?>"  style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;">Déconnexion</a>
                     
                    </div>
      </div> 
      </ul> 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4 " id="aside"  style=" position: fixed;width: 18%; ">
    <!-- Sidebar -->
    <div class="sidebar okfixer"> 
 <div> <img style="width: 40%;border-radius: 50%;margin-left: 30%;margin-top: 6%;" src="<?php echo base_url('images/menetp.jpg');?>"></div>
       <div class="user-panel mt-3 pb-3 mb-3 d-flex" style=" border-radius: 1%; margin-top: 1%;" >
        <p style="margin-left: 4px;font-size: 11px;margin-top: -1.9%; color: #be2437;" >
         &nbsp;&nbsp;&nbsp;
         &nbsp;
          Ministère de l'Education Nationale de<br>
           l'Enseignement Technique et Professionnel
          <br>

        </p>

      </div>
      <!-- Sidebar Menu -->

      <nav  id="navleft">
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
            <a href="#" class="nav-link lien-btn btn btn-flat " style="background-color: #bb2739;">
              <p style="margin-right: 70%;">
                <i class="fas fa-plus-square" style="font-size: 15px;"></i>
                 &nbsp;ABSENCES

              </p>
            </a>
<ul class="nav nav-treeview" style="margin-left: 6%;">
              <li class="nav-item" style="background-color: #bb2739;">
                <a href="<?php echo base_url('control/lienAutorisationPerso'); ?>" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Autorisation</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2739;">
                <a href="<?php echo base_url('control/lienPermissionPerso'); ?>" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Permission</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link lien-btn btn btn-flat" style="background-color: #bb2739;">
              <p style="margin-right: 70%;">
                 <i class="fas fa-plus-square"></i>
               &nbsp;CONGES
              
              </p>
            </a>
            <ul class="nav nav-treeview" style="margin-left: 6%;">
              <li class="nav-item" style="background-color: #bb2739;">
                <a href="<?php echo base_url('control/lienCongeAnnuelPerso'); ?>" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé annuel</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2739;">
                <a href="<?php echo base_url();?>control/lienpaternitePerso" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé de paternité</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #bb2739;">
                <a href="<?php echo base_url();?>control/maternitePerso" class="nav-link">
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
              <h5><u>DEMENDE D'AUTORISATION D'ABSENCE</u> </h5>
            <h6 style="color: #000;"> <u>NB</u>: &nbsp;
              -La durée totale d'autorisation d'absences est quize (15) jours par an. <br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - La durée d'autorisation d'absence ne peut excéder trois (03) jours pour chaque demande. <br>
            </h6>
        </div>
      </div><!-- /.container-fluid -->
      <div class="modal fade" tabindex="-1" id="addDemande" role="dialog" >
        <div class="modal-dialog modal-overlay" style="background-color:#dc143c; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2739;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Nouveau demande</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> 
            </div>
              <form method="post"  action="" id="myForm">
             
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="hidden" class="form-control" maxlength="6" name="im_auto" placeholder="Matricule" value="<?php echo $im_perso; ?>" required>  
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
             <select class="form-control select2" style="width: 100%;" name="annee_auto" required>
                    <option> <?php  echo date("Y"); ?></option>
                  </select>
             </div>
               <!--Sexe-->
               <div class="col-9">
                   <select class="form-control select2" style="width: 100%;" id="motif_auto" name="motif_auto" required>
                    <option>évènement familliale</option>
                    <option>enterrement d une proche</option>
                    <option>Autres motifs</option>
                  </select>
                </div>
               <div class="col-9">
               <input type="number"  class="form-control" name="nbjrs_auto" id="nbjrs_auto" placeholder="Nombre de jour demandé" step="1" required>
              </div>         
              <div class="col-9">
                  <input type="text"  class="form-control" name="lieu_auto" id="lieu_auto" placeholder="Lieu de jouissance" required> 
               <!--Direction-->
               </div>
               <div class="col-9">
                   <label style="font-size: 12px;color: #dcdcdc;">Date de départ:</label>
                  <input type="date"  class="form-control" name="dtdp_auto" id="dtdp_auto" placeholder="date de départ"> 
                </div>
               <!--Chapitre Budgetaire-->
            <div class="modal-footer justify-content-between" style="margin-left: 24%;">
              <button type="reset" class="btn btn-flat" style="margin-left: 25%;color: #fff; background-color: #bb2839;" id="annelerdemandeok" >Annuler</button>
              <button type="button" class="btn btn-flat" style="margin-right: 25%;color: #fff; background-color: #bb2839;" id="btnOk">Sauvegarder</button>
            </div>
            </form>
  </div>
  <!--/Form without header-->
          <!-- /.modal-content -->
        </div>
    </div>

       <div class="modal fade" tabindex="-1" id="modalModifier" role="dialog" >
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Modifier demande</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> 
            </div>
              <form method="post"  action="" id="myFormEdit">
              <div class="col-9" style="margin-top: 3%;">
                <input type="number" class="form-control" maxlength="6" name="editnumdec_auto" id="editnumdec_Auto" placeholder="N° décision" required>  
              </div>
              <input type="hidden"id="editid_auto" name="editid_auto">
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="hidden" class="form-control" maxlength="6" id="editim_auto" name="editim_auto" placeholder="Matricule" value="<?php echo $im_perso; ?>" required>  
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
             </div>
               <!--Sexe-->
               <div class="col-9">
                   <select class="form-control select2" style="width: 100%;" id="editmotif_auto" name="editmotif_auto" required>
                    <option>évènement familliale</option>
                    <option>enterrement d une proche</option>
                    <option>Autres motifs</option>
                  </select>
                </div>
               <div class="col-9">
               <input type="number"  class="form-control" id="editnbjr_auto" name="editnbjr_auto" placeholder="Nombre de jour demandé" required>
              </div>         
              <div class="col-9">
                  <input type="text"  class="form-control" id="editlieu_auto" name="editlieu_auto" placeholder="Lieu de jouissance" required> 
               <!--Direction-->
               </div>
               <div class="col-9">
                   <label style="font-size: 12px;color: #dcdcdc;">Date de départ:</label>
                  <input type="date"  class="form-control" id="editdtdp_auto" name="editdtdp_auto" placeholder="date de départ"> 
                </div>
               <!--Chapitre Budgetaire-->
            <div class="modal-footer justify-content-between" style="margin-left: 24%;">
              <button type="reset" class="btn btn-flat" style="margin-left: 25%;color: #fff; background-color: #bb2839;"  >Annuler</button>
              <button type="button" class="btn btn-flat" style="margin-right: 25%;color: #fff; background-color: #bb2839;" id="Btnedit">Sauvegarder</button>
            </div>
            </form>

  </div>
  <!--/Form without header-->
          <!-- /.modal-content -->
        </div>
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
          <!-- /.modal-content -->
        </div>
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

     <!-- removeMember -->
<div class="modal fade" tabindex="-1" role="dialog" id="annulerAutoEncours">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
         <p>Voulez vous vraiment effectué cette opération xxx ?</p>
      </div>
      <div class="modal-footer">
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnBtn" class="btn btn-flat">Annuler</button>
        <button style="background-color: #bb2839;color: #fff;" type="button" id="annulerBnt" class="btn btn-flat" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->

<div class="modal fade" tabindex="-1" role="dialog" id="confirmationDemande">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#bb2839; ">
        <h5 class="modal-title" style="color: #fff;">Confirmation</h5>
      </div>
      <div class="modal-body">
         <p>Voulez vous vraiment effectué cette opération ?</p>
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
        <p>Voulez vous vraiment effectué cette opération zzz?</p>
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
          <div class="card" style="margin-top: -2%;">
            <div class="card-header" style="">
              <h3 class="card-title"><u>Liste d'autorisation d'absence</u></h3>
               <div style="margin-right:2%;float: center;margin-top: -2.5%;">
            <button title="Nouveau personnel" type="button"  class="btn btn-flat" data-toggle="modal" data-target="#addDemande" id="btnDemandeConge" style="background-color: #bb2739;width: 12%; border-color: #bb2739; " onclick="addDemandeConge();">
                <i class="fas fa-plus" style="color: #fff;font-size: 16px;"></i> &nbsp;Nouveau
            </button>
          </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="messages"></div>
             <table  class="table table-bordered" id="example1" style="font-size: 13px;">
                <thead>  
                <tr class="tabtr">
                  <th width="2%;">Matricule</th>
                  <th>Titre de congé</th>
                  <th>Motif</th>
                  <th>Nomdre de jours demandés</th>
                  <th>Lieu de jouissance</th>
                  <th>Date de congé</th>
                  <th>Date de départ</th>
                  <th>Date de retour</th>
                  <th>Status</th>
                  <th style="width: 12%;">Actions</th>
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
    'ajax': '<?php echo base_url();?>control/listeAutorisationPerso',
    'orders': [],

  }); 
}); 
$('#AnnulerBtnP').click(function(){
  $('#confirmationDemande').modal('hide');
});
$('#annelerdemandeok').click(function(){
  $('#addDemande').modal('hide');
});

// nouveau personnel, get url du post
    $('#btnOk').click(function(){
    var motif  = $("#motif_auto").val();
    var nbjrs  = $("#nbjrs_auto").val();
    var lieu   = $("#lieu_auto").val();
    var dtdp   = $("#dtdp_auto").val();
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
              if(motif !='' && nbjrs !='' && lieu !='' && dtdp !=''){
                if (dd_objet >= Nowdate){
                   if(nbjrs > 0 && nbjrs !=0){  
    $('#confirmationDemande').modal('show');
    $('#myForm').attr('action','<?php echo base_url();?>control/demandeAutorisation');
  }else{
    toastr.warning('<b>Notification</b> </br> Veuillez saisier un nombre correct ou </br> la valeur doit être supérieur à 0').show();
  }
   }else{
  
 toastr.warning('<b>Notification</b> </br> La date de départ doit être égale ou supérieur de la date aujourd\'hui').show();
   }
    }else{
toastr.warning('<b>Notification</b> </br>Tous les champs sont obligatoires').show();
    }
 }); 
    // 
   $('#Btnedit').click(function(){
    var motif  = $("#editmotif_auto").val();
    var nbjrs  = $("editnbjr_auto").val();
    var lieu   = $("#editlieu_auto").val();
    var dtdp   = $("#editdtdp_auto").val();
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
              if(motif !='' && nbjrs !='' && lieu !='' && dtdp !=''){
                if (dd_objet >= Nowdate){
                   if(nbjrs > 0){  
        $('#confirmeModalMod').modal('show');
        $('#myFormEdit').attr('action','<?php echo base_url();?>control/editAutorisationPerso');
        }else{
            toastr.warning('<b>Notification</b> </br> Veuillez saisier un nombre correct ').show();
            }
        }else{
            toastr.warning('<b>Notification</b> </br> La date de départ doit être égale ou supérieur de la date aujourd\'hui').show();
             }
             }else{
            toastr.warning('<b>Notification</b> </br>Tous les champs sont obligatoires').show();
           }
          }); 

$("#editBtnOk").on('click',function(){
      var url = $('#myFormEdit').attr('action');
      var data = $('#myFormEdit').serialize();
       $.ajax({
       type: 'ajax',
       method: 'post',
       url: url,
       data: data, // /converting the form data into array and sending it to server
       dataType: 'json',
      success:function(response) {
        if(response.success === true) {
           loadTable.ajax.reload(null, false);
           $("#confirmeModalMod").modal('hide');
           $("#addDemande").modal('hide');
           toastr.success("Notification"+response.messages).show();
            
        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);
              $("#confirmeModalMod").modal('hide');
           $("#addDemande").modal('hide');
            });
          } else {
            toastr.error("Notification"+response.messages).show();
            $("#confirmeModalMod").modal('hide');
            $("#addDemande").modal('hide');
          }
        }
      }
    });

});

function imprimerPermiEncoursPerso(id_auto= null){
    if(id_auto) {
      $.ajax({
        url: '<?php echo base_url();?>htmltopdf/pdfdetails' + '/' + id_auto,
        type: 'post',       
        dataType: 'json',
        success:function(response) {
          
        } // /succes
      }); // /ajax
  }
}

function addDemandeConge() 
{
  $("#myForm")[0].reset();
  $("#addBtn").unbind('click').bind('click', function() {

    var url = $('#myForm').attr('action');
    var data = $('#myForm').serialize();
    $.ajax({
       type: 'ajax',
       method: 'post',
       url: url,
       data: data, // /converting the form data into array and sending it to server
       dataType: 'json',
      success:function(response) {
        if(response.success === true) {
           $("#editDemandeencours").modal('hide');
           $('#confirmationDemande').modal('hide');
           loadTable.ajax.reload(null, false);
           toastr.success("Notification"+response.messages);
        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);
            });
          } else {
            $("#editDemandeencours").modal('hide');
            $('#confirmationDemande').modal('hide');
            loadTable.ajax.reload(null, false);
            toastr.error("Notification"+response.messages);
          }
        }
      }
    }); 

    return false;
  });

}
 
//ajouter personnel

      //AnnulerBtnP
      $(document).on('click', '.lien-btn' ,function() {
      $('a.lien-btn > i').removeClass('fas fa-plus-square').addClass('fas fa-minus-square');
      $(this).find('i').toggleClass('fas fa-plus-square').toggleClass('fas fa-minus-square');
      });

      $(document).on('mouseleave', '.liend-btn' ,function() {
      $('a.lien-btn > i').removeClass('fas fa-plus-square').addClass('fas fa-minus-square');
      $(this).find('i').toggleClass('fas fa-plus-square').toggleClass('fas fa-minus-square');

      });

//Suppression personnel

function deletedemandeCongePerso(id_conge = null) 
{
  if(id_conge) {
    $("#deleteBtn").unbind('click').bind('click', function() {
      $.ajax({
        url: '<?php echo base_url();?>control/deletedemandeCongePerso' + '/' + id_conge,
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

}

function annulerAutoEncoursPerso(id_auto = null) 
{
  if(id_auto) {
    $("#annulerBnt").unbind('click').bind('click', function() {
      $.ajax({
        url: '<?php echo base_url();?>control/annulerAutoEncours' + '/' + id_auto,
        type: 'post',       
        dataType: 'json',
        success:function(response) {
          if(response.success === true) {
            $("#annulerDemandeEncours").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.success('<b>Notification</b> </br>Annulation avec succes').show();
          }else{
            $("#annulerDemandeEncours").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.succes('<b>Notification</b> </br>Erreur d\'annulation\ ').show();
          }

        } // /succes
      }); // /ajax
    });
  }

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
function editAutoEncoursPerso(id_auto = null) 
{
  if(id_auto) {

    $("#myFormEdit")[0].reset();

    $.ajax({
      url: '<?php echo base_url();?>control/selectAutoEncoursEdit'+'/' + id_auto,
      type: 'post',
      dataType: 'json',
      success:function(response) {
        $("#editid_auto").val(response.id_auto);
        $("#editim_auto").val(response.im_auto);
        $("#editmotif_auto").val(response.motif_auto);
        $("#editnbjr_auto").val(response.nbjr_auto);
        $("#editlieu_auto").val(response.lieu_auto);
        $("#editdtdp_auto").val(response.dtdprt_auto);  
      }
    });
  }
  else {
    alert('error');
  }
}
   
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
