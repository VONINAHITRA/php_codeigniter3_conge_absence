
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Congés Perso</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" style="border-radius: 15%;" href="<?php echo base_url('images/menetp.jpg') ?>">
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
<body class="hold-transition sidebar-mini  layout-navbar-fixed" style="background-color: #f4f6f9;">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: -100px; background-color: #009540;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
       &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp;
         &nbsp; &nbsp;
       <img width="40px;" style="margin-left: 120px;border-radius: 20px;" src="<?php echo base_url();?>images/menetp.jpg">&nbsp;&nbsp;&nbsp;<font color="#fff">MENETP</font>
       <div style="margin-left: 210%;margin-top:-30px; width: 100%;font-size: 20px;color: #fff;"> 
        <b>
         GESTION DE CONGE ET D'ABSENCE
       </b></div>
      </li>
    </ul>
    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto" style="margin-right: 1.8%;">
   <div class="btn-group" style="background-color:#b62c3c;color: #fff;">
                    <button type="button" class="btn btn-flat" style="background-color: #b62c3c;color:#fff;margin-top: -3%; "><i class="fas fa-home" style="color:;"></i>&nbsp;&nbsp;<a style="color: #fff" href="<?php echo base_url();?>control/accueil" >Accueil</a>&nbsp;&nbsp;&nbsp;</button>
                    <button type="button" class="btn btn-flat dropdown-toggle" data-toggle="dropdown" style="background-color:#b62c3c;color: #fff;">
                    <span class="caret" style="background-color:#b62c3c;color: #fff;margin-top: 6%;"></span>
                    <span class="sr-only left">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="<?php echo base_url(); ?>control/accueil" style="background-color: #bb2839;color: #fff;border-color: #fff;margin-bottom: 0.5%;"><i class="fas fa-home"></i>&nbsp;Accueil</a>
                      <a class="dropdown-item"  href="<?php echo base_url(); ?>control/liencomptePerso" style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;"><i class="fas fa-user-circle"></i>&nbsp;Mon compte</a>
                       <a class="dropdown-item" href="<?php echo base_url('control/logout');?>" style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;"><i class="fas fa-sign-out"></i>&nbsp;Déconnexion</a>
                    </div>
      </div> 
      </ul> 
  </nav>

  <!-- Main Sidebar Container -->
   <!-- Main Sidebar Container -->
  <aside class="main-sideba sidebar-dark-primary" style=" position: fixed;width: 18%; margin-top: 50px; border-radius: 5px;margin-left: 5px;margin-bottom: 550px;height: 500px; background-color: #c9ebc7; ">

    <!-- Sidebar -->
    <div class="sidebar okfixer"> 
      <!-- Sidebar Menu -->
      <div  style="margin-top: 0%;background-color: #006891;color: #fff;padding-top: 5px;padding-bottom: 1px;border-radius: 5px;">
       <p style="float: center;margin-left: 13%;"> MENU DE L'APPLICATION</p>
      </div><br>
      <nav  style="background-color: #ffffff;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>control/liencomptePerso" class="nav-link lien-btn btn btn-flat"  style="background-color: #006891;">
              <p style="margin-left: -2%;">
                <i class="fas fa-plus-square"></i>
               &nbsp;COMPTE ET CONSULTER
               
              </p>
            </a>
          </li>
            
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link lien-btn btn btn-flat " style="background-color: #006891;">
              <p style="margin-right: 70%;">
                <i class="fas fa-plus-square" style="font-size: 15px;"></i>
                 &nbsp;ABSENCES
              </p>
            </a>
<ul class="nav nav-treeview" style="margin-left: 6%;">
              <li class="nav-item" style="background-color: #006891;">
                <a href="<?php echo base_url(); ?>control/lienAutorisationPerso" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Autorisation</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #006891;">
                <a href="<?php echo base_url(); ?>control/lienPermissionPerso" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Permission</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link lien-btn btn btn-flat" style="background-color: #006891;">
              <p style="margin-right: 70%;">
                 <i class="fas fa-plus-square"></i>
               &nbsp;CONGES
              
              </p>
            </a>
            <ul class="nav nav-treeview" style="margin-left: 6%;">
              <li class="nav-item" style="background-color: #006891;">
                <a href="<?php echo base_url('control/lienCongeAnnuelPerso'); ?>" class="nav-link">   
                  <p style="color: #fff;"> <i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé annuel</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #006891;">
                <a href="<?php echo base_url();?>control/lienpaternitePerso" class="nav-link">
                  <p  style="color: #fff;"><i class="far fa-circle nav-icon" style="font-size: 12px;"></i>Congé de paternité</p>
                </a>
              </li>
              <li class="nav-item" style="background-color: #006891;">
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
    <!-- Content Header (Page header) 
escapeClose: false,
  clickClose: false,
  showClose: false
    -->
    <div>
 <span style="font-size: 25px;margin-left: 310px;"> </span>
   </div>
    <section class="content-header">
  
      <div class="modal fade" tabindex="-1" id="addDemande" role="dialog" style="background-color: ;" >
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Nouveau demande</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> <!--<?php echo base_url();?>control/demandeCongeAnnuel-->
            </div>
              <form method="post"  action="" id="myForm">
              <div class="col-9" style="margin-top: 3%;">
                <input type="number" class="form-control" maxlength="6" id="numdec_congeadd" name="numdec_conge" placeholder="N° décision" required>  
              </div>
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="hidden" class="form-control" id="im_congeadd" maxlength="6" name="im_conge" placeholder="Matricule"  value="<?php echo $im_perso; ?>" required>  
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
             <select class="form-control select2" style="width: 100%;" id="annee_congeadd" name="annee_conge" required>
                    <option><?php echo date("Y"); ?></option>
                    <option><?php echo date("Y")-1; ?></option>
                    <option><?php echo date("Y")-2; ?></option>
                    <option><?php echo date("Y")-3; ?></option>
                  </select>
             </div>
               <!--Sexe-->
               <div class="col-9">
                   <select class="form-control select2" style="width: 100%;" id="motif_congeadd" name="motif_conge" required>
                    <option>évènement familliale</option>
                    <option>enterrement d une proche</option>
                    <option>Autres motifs</option>
                  </select>
                </div>
               <div class="col-9">
               <input type="number"  class="form-control" id="nbjrs_congeadd" name="nbjrs_conge" placeholder="Nombre de jour demandé" required>
              </div>         
              <div class="col-9">
                  <input type="text"  class="form-control" id="lieu_congeadd" name="lieu_conge" placeholder="Lieu de jouissance" required> 
               <!--Direction-->
               </div>
               <div class="col-9">
                   <label style="font-size: 12px;color: #dcdcdc;">Date de départ:</label>
                  <input type="date"  class="form-control" id="dtdp_congeadd" name="dtdp_conge" placeholder="date de départ"> 
                </div>
               <!--Chapitre Budgetaire-->
            <div class="modal-footer justify-content-between" style="margin-left: 24%;">
              <button type="reset" class="btn btn-flat" id="btnannuleradd" style="margin-left: 25%;color: #fff; background-color: #bb2839;" data-dismiss="modal" >Annuler</button>
              <button type="button" class="btn btn-flat" style="margin-right: 25%;color: #fff; background-color: #bb2839;" id="btnOk">Sauvegarder</button>
            </div>
            </form>

  </div>
  <!--/Form without header-->
          <!-- /.modal-content -->
        </div>
    </div>
          <div class="modal fade" tabindex="-1" id="editDemandeencours" role="dialog" style="background-color: #f4f6f9;">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Modifier  demande</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> 
            </div>
              <form method="post"  action="" id="myFormEdit">
              <div class="col-9" style="margin-top: 3%;">
                <input type="number" class="form-control" maxlength="6" name="numdec_conge" id="editnumdec_conge" placeholder="N° décision" required>  
              </div>
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="hidden" class="form-control" value="<?php echo $im_perso; ?>" maxlength="6" id="editim_conge" name="im_conge" placeholder="Matricule" required>  
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
             <select class="form-control select2" style="width: 100%;" id="editannee_conge"  name="annee_conge" required>
                    <option><?php echo date("Y"); ?></option>
                    <option><?php echo date("Y")-1; ?></option>
                    <option><?php echo date("Y")-2; ?></option>
                    <option><?php echo date("Y")-3; ?></option>
                  </select>
             </div>
               <!--Sexe-->
               <div class="col-9">
                   <select class="form-control select2" style="width: 100%;" id="editmotif_conge" name="motif_conge" required>
                    <option>évènement familliale</option>
                    <option>enterrement d une proche</option>
                    <option>Autres motifs</option>
                  </select>
                </div>
               <div class="col-9">
               <input type="number"  class="form-control" id="editnbjrs_conge" name="nbjrs_conge" placeholder="Nombre de jour demandé" required>
              </div>     
              <input type="hidden" name="id_conge" id="editid_conge">    
              <div class="col-9">
                  <input type="text"  class="form-control" id="editlieu_conge" name="lieu_conge" placeholder="Lieu de jouissance" required> 
               <!--Direction-->
               </div>
               <div class="col-9">
                   <label style="font-size: 12px;color: #dcdcdc;">Date de départ:</label>
                  <input type="date"  class="form-control" id="editdtdp_conge" name="dtdp_conge" placeholder="date de départ"> 
                </div>
               <!--Chapitre Budgetaire-->
            <div class="modal-footer justify-content-between" style="margin-left: 24%;">
              <button type="reset" class="btn btn-flat" style="margin-left: 25%;color: #fff; background-color: #bb2839;" data-dismiss="modal" >Annuler</button>
              <button type="button" class="btn btn-flat" style="margin-right: 25%;color: #fff; background-color: #bb2839;" id="btnOkMod">Sauvegarder</button>
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
        <button style="background-color: #bb2839;color: #fff;" type="button" id="annulerBnt" class="btn btn-flat" data-dismiss="modal">OK</button>
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
        <button style="background-color: #bb2839; color: #fff;" type="button" id="AnnulerBtnModok" class="btn btn-flat">Annuler</button>
        <button style="background-color: #bb2839;color: #fff;" type="button" id="addbtnOK" class="btn btn-flat" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->
    </section>
    <!-- Main content -->
    <section class="content" style="position: fixed;">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->

          </div>
          <!-- /.card -->
          <div class="card" style="margin-top: -3%;">
            <div class="card-header" style="background-color: #006891; color: #fff">
              <h3 class="card-title">Liste des  congés annuels</h3>
               
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="">
              <div style="margin-right:2%;float: center;margin-top: -0.5%;">
            <button title="Nouveau personnel" type="button"  class="btn btn-flat" data-toggle="modal" data-target="#addDemande" id="btnDemandeConge" style="background-color: #006891;width: 12%; border-color: #006891; " onclick="addDemandeConge();">
                <i class="fas fa-plus-circle" style="color: #fff;font-size: 16px;"></i> &nbsp;Nouveau
            </button>
          </div>
              <br><br>
             <div class="messages"></div>
             <table  class="table table-head-fixed table-bordered" id="example1" style="font-size: 13px;">
                <thead >  
                <tr class="tabtr">
                  <th >N° décision</th>
                  <th>Matricule</th>
                  <th>Titre de congé</th>
                  <th>Motif</th>
                  <th>Nomdre de jours demandés</th>
                  <th>Lieu de jouissance</th>
                  <th>Date de congé</th>
                  <th>Date de départ</th>
                  <th>Date de retour</th>
                  <th>Status</th>
                  <th style="width: 10%;">Actions</th>
                </tr>
                </thead>
            
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer" style="background-color: #fff">
             
            </div>
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
  <footer class="main-footer" style="background-color: #bb2839;color: #fff;margin-left: -30px;width: 1500px;height: 4px;margin-top: 25px; position: fixed;">
    <div style="margin-top: -7px;margin-left: 100px">
      @Compyring by VONINAHITRA CALVYN Lebonheur de Patrice
    </div>
>
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
    'ajax': '<?php echo base_url();?>control/listeCongePerso',
    'orders': [],

  }); 
});

$(document).ready(function(){

    $(".show-modal").click(function(){

        $("#addDemande").modal({

            backdrop: 'static',

            keyboard: false

        });

    });

});


// nouveau personnel, get url du post
/*



      var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear(),
      date = day + "/" + month + "/" + year;

*/ 
$(document).ready(function(){
  $('#nbjrs_congeadd');
});

 $('#btnOk').click(function(){
    var numdec = $("#numdec_congeadd").val();
    var im     = $("#im_congeadd").val();
    var annee  = $("#annee_congeadd").val();
    var motif  = $("#motif_congeadd").val();
    var nbjrs  = $("#nbjrs_congeadd").val();
    var lieu   = $("#lieu_congeadd").val();
    var dtdp   = $("#dtdp_congeadd").val();

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
              if (dd_objet >= Nowdate){
                if(annee !='' && motif !='' && lieu !='' && dtdp !='' && numdec !=''){
                    if(nbjrs > 0){
                 $('#confirmationDemande').modal('show');
                 $('#myForm').attr('action','<?php echo base_url();?>control/demandeCongeAnnuel');
               }else{
                toastr.warning('<b>Notification</b> </br> Veuillez saisir un nombre correct').show();
               }
                }else{
                  toastr.warning('<b>Notification</b> </br>Tous les champs sont obligatoires').show();
                }
              }else{
              toastr.warning('<b>Notification</b> </br> La date de départ doit être égale ou supérieur de la date aujourd\'hui').show();
              } 
 }); 
 
  $("#AnBtn").click(function(){
    $("#annulerDemandeEncours").modal("hide");
 });

 $("#AnnulerBtnModok").click(function(){
    $("#confirmationDemande").modal("hide");
 });

  $("#AnnulerBtnMod").click(function(){
    $("#confirmeModalMod").modal("hide");
 });
   
   
function addDemandeConge() 
{
  $("#myForm")[0].reset(); //
  $("#addbtnOK").unbind('click').bind('click', function() {
    var numdec = $("#numdec_congeadd").val();
    var im     = $("#im_congeadd").val();
    var annee  = $("#annee_congeadd").val();
    var motif  = $("#motif_congeadd").val();
    var nbjrs  = $("#nbjrs_congeadd").val();
    var lieu   = $("#lieu_congeadd").val();
    var dtdp   = $("#dtdp_congeadd").val();
    var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear(),
      datec = year + "/" + month + "/" + day ;
      if(dtdp){
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
           loadTable.ajax.reload(null, false);
           toastr.success('Notification </br>'+response.messages).show();
             $('#confirmationDemande').modal('hide');

             $('#addDemande').modal('hide');
        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);
            });
          } else {
            toastr.error('Notification </br>'+response.messages).show();
             $('#confirmationDemande').modal('hide');
          }
        }
      }
    });
    }else{
       toastr.warning("Notification </br>  La date de départ doit être égale ou supérieur de la date aujourd'hui").show();
       $("#dtdep_congeadd").css('border-color','red');
        }

      });
//ajouter personnel
}
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


function annulerDemandeEncoursPerso(id_conge = null) 
{
  if(id_conge) {
    $("#annulerBnt").unbind('click').bind('click', function() {
      $.ajax({
        url: '<?php echo base_url();?>control/annulerDemandeEncoursPerso' + '/' + id_conge,
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

function editCongeEncoursPerso(id_conge = null) 
{
  if(id_conge) {

    $("#myFormEdit")[0].reset();
    $.ajax({
      url: '<?php echo base_url();?>control/selectCongeEncoursEdit'+'/' + id_conge,
      type: 'post',
      dataType: 'json',
      success:function(response) {
        $("#editnumdec_conge").val(response.numdec_conge);
        $("#editid_conge").val(response.id_conge);
        $("#editim_conge").val(response.im_conge);
        $("#editannee_conge").val(response.titre_conge);
        $("#editmotif_conge").val(response.motif_conge);
        $("#editnbjrs_conge").val(response.nbjrs_conge);
        $("#editlieu_conge").val(response.lieu_conge);
        $("#editdtdp_conge").val(response.dtdep_conge);  
      }
    });
  }
  else {
    alert('error');
  }
  $('#btnOkMod').click(function(){
    var numdec = $("#editnumdec_conge").val();
    var im     = $("#editim_conge").val();
    var annee  = $("#editannee_conge").val();
    var motif  = $("#editmotif_conge").val();
    var nbjrs  = $("#editnbjrs_conge").val();
    var lieu   = $("#editlieu_conge").val();
    var dtdp   = $("#editdtdp_conge").val();
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
              if (dd_objet >= Nowdate){
                if(annee !='' && motif !='' && lieu !='' && dtdp !='' && numdec !=''){
                    if(nbjrs > 0){
                 $('#confirmeModalMod').modal('show');
                 $('#myFormEdit').attr('action','<?php echo base_url();?>control/demandeCongeAnnuelModifier');
               }else{
                toastr.warning('<b>Notification</b> </br> La valeur ne doit pas négatif').show();
               }
                }else{
                  toastr.warning('<b>Notification</b> </br>Tous les champs sont obligatoires').show();
                }
              }else{
              toastr.warning('<b>Notification</b> </br> La date de départ doit être égale ou supérieur de la date aujourd\'hui').show();
              }
   });

  $("#myFormEdit")[0].reset();
//Prompte
  $("#editBtnOk").unbind('click').bind('click', function() {
    
    var numdec = $("#editnumdec_conge").val();
    var im     = $("#editim_conge").val();
    var annee  = $("#editannee_conge").val();
    var motif  = $("#editmotif_conge").val();
    var nbjrs  = $("#editnbjrs_conge").val();
    var lieu   = $("#editlieu_conge").val();
    var dtdp   = $("#editdtdp_conge").val();
    var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear(),
      datec = year + "/" + month + "/" + day ;
     if(nbjrs < 0){
      $("#editnbjrs_conge").css('border-color','red');
      toastr.warning("Nofitication </br> Veuillez saisir nombre correct").show();
      $("#editnbjrs_conge").on("keypress",function(){
      $("#editnbjrs_conge").css('border-color','#cfcfcf');
      $("#editnbjrs_conge").focus();
      });
     }else{
      if(im < 0){
      $("#editim_conge").css('border-color','red');
      toastr.warning("Nofitication </br> Veuillez saisir nombre correct").show();
      $("#editim_conge").on("keypress",function(){
      $("#editim_conge").css('border-color','#cfcfcf');
      $("#editim_conge").focus();
      });
      }else{
        if(numdec < 0){
      $("#editnumdec_conge").css('border-color','red');
      toastr.warning("Nofitication </br> Veuillez saisir nombre correct").show();
      $("#editnumdec_conge").on("keypress",function(){
      $("#editnumdec_conge").css('border-color','#cfcfcf');
      $("#editnumdec_conge").focus();
      });
      }else{
      var url = $('#myFormEdit').attr('action');
      var data = $('#myFormEdit').serialize();
  var form = $(this);
    $.ajax({
       type: 'ajax',
       method: 'post',
       url: url,
       data: data, // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {
        $("#editDemandeencours").modal('hide');
        if(response.success === true) {
           $("#editDemandeencours").modal('hide');
           loadTable.ajax.reload(null, false); 
           toastr.success('Nofitication </br>'+response.messages).show();
           $('#confirmeModalMod').modal('hide');
        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
            $("#editDemandeencours").modal('hide');
            loadTable.ajax.reload(null, false); 
            toastr.error('Nofitication </br>'+response.messages).show();
            $('#confirmeModalMod').modal('hide');
            });
          } else { 
            loadTable.ajax.reload(null, false); 
            toastr.error('Nofitication </br>'+response.messages).show();
          }
        }
      }
    });
      }}
}


    return false;
  });

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
