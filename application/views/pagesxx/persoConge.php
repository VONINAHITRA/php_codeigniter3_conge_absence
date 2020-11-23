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


</head>
<body class="hold-transition sidebar-mini  layout-navbar-fixedxx" style="background-color: #f4f6f9">
<div class="wrapper">
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
            <?php echo $avatar_user; ?>&nbsp;<font size="2px"><?php echo $email_user; ?></font>
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
                        <li><a href="<?php echo base_url(); ?>control/lienCongePerso">Congé pour formation</a></li>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
escapeClose: false,
  clickClose: false,
  showClose: false
    -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid -->
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
                <input type="text" class="form-control" maxlength="6" id="numdec_congeadd" name="numdec_conge" placeholder="N° décision" required>  
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
               <input type="text"  class="form-control" id="nbjrs_congeadd" name="nbjrs_conge" placeholder="Nombre de jour demandé" required>
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
          <div class="modal fade" tabindex="-1" id="editDemandeencours" role="dialog">
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
                    <option> <?php  echo date("Y"); ?></option>
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
         <div class="btn-group">
            <button type="button" style="background-color: #bb2839; color: #fff;" id="annulerBnt" class="btn btn-default" data-dismiss="modal">Oui</button>
            <button type="button" style="background-color: #bb2839; color: #fff;" id="AnBtn" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
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
         <div class="btn-group">
            <button type="button" style="background-color: #bb2839; color: #fff;" id="addBtn" class="btn btn-default" data-dismiss="modal">Oui</button>
            <button type="button" style="background-color: #bb2839; color: #fff;" id="AnnulerBtnP" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
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

         <div class="btn-group">
            <button type="button" style="background-color: #bb2839; color: #fff;" id="editBtnOk" class="btn btn-default" data-dismiss="modal">Oui</button>
            <button type="button" style="background-color: #bb2839; color: #fff;" id="AnnulerBtnMod" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
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
      <div class="btn-group">
            <button type="button" style="background-color: #bb2839; color: #fff;" id="addbtnOK" class="btn btn-default">Oui</button>
            <button type="button" style="background-color: #bb2839; color: #fff;" id="AnnulerBtnMod" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->
    </section>
    <!-- Main content -->
    <div>
    <section class="content" style="margin-left: -20%;margin-right: 2%;" >
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
          </div>
          <!-- /.card -->
          <div class="card" style="margin-top: -2.5%;border-color: red;">
            <div class="card-header">
              <h3 class="card-title">Liste des demandes de congés</h3>
               <div style="margin-right:2%;float: center;margin-top: -2.5%;">
            <button title="Nouveau personnel" type="button"  class="btn btn-flat" data-toggle="modal" data-target="#addDemande" id="btnDemandeConge" style="background-color: #bb2639;width: 12%; border-color: #bb2639;margin-top: 0% ; border-radius:5px;" onclick="addDemandeConge();">
                <i class="fas fa-plus-circle" style="color: #fff;font-size: 20px;"></i>&nbsp;&nbsp;Nouveau
            </button>
          </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="">
             <div class="messages"></div>
             <table  class="table table-head-fixed table-bordered" id="example1" style="font-size: 13px;border-color: #d3dce3,border: 2px">
                <thead style="background-color: red">  
                <tr style="color: #bb2839;border-color: #bb2839; background-color: #ccf987;">
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">N° décision</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Matricule</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Titre de congé</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Motif</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Nomdre de jours demandés</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Lieu de jouissance</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Date de congé</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Date de départ</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Date de retour</th>
                  <th style=" background: #d3dce3;color: #33514c;border: 15px; ">Status</th>
                  <th style="width: 10%;background: #d3dce3;color: #33514c;border: 15px; ">Actions</th>
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

<!-- page script -->
<style type="text/css">
  table.dataTable tbody tr:hover {
   background-color: #f4f6f9 !important;
   color: #bb2839;
   cursor: default;

   border-collapse: separate;
    border-spacing: 10px;
    border-style: solid;  /* medium|thin|thick|length|initial|inherit */
    border-color: blue;
    border-width: 15px;

}
table, td {
border: 1px solid black;
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
      if(lieu !='' && dtdp !='' && nbjrs !='' && numdec !=''){
        if(dd_objet >= Nowdate){
           if(nbjrs > 0 && numdec > 0){
              if(nbjrs.length <= 2){ 
                //nbjrs >= 3
               if(nbjrs >= 3 && nbjrs <= 15){

           $('#confirmationDemande').modal('show');
           $('#myForm').attr('action','<?php echo base_url();?>control/demandeCongeAnnuel');
         }else{
          toastr.warning('<b>Notification</b> </br> Le nombre de jour de congé est doit être compris entre 3 et 15 jours.').show();
         }
            }else{
            toastr.warning('<b>Notification</b> </br> Veuillez vérifier la valeur que vous avez saisir SVP.').show();
            }
         }else{
           toastr.warning('<b>Notification</b> </br> La veleur que vous avez saisir n\'est pas correct, Veuillez saisir une valeur numérique positif').show();
         }
         }else{
            toastr.warning('<b>Notification</b> </br> La date de départ doit être égale ou supérieur de la date aujourd\'hui').show();
         }
       }else{
      
           toastr.warning('<b>Notification</b> </br> Tous les champs sont obligatoires').show();
      }
 });
   
function imprimerCongePerso(id_conge = null) 
{
  if(id_conge) {
document.location.href= '<?php echo base_url();?>control/pdfCongeAnnuel'+'/' + id_conge;
  }else {
    alert('error');
  }
}
function addDemandeConge() 
{
  $("#myForm")[0].reset(); //
  $("#addbtnOK").unbind('click').bind('click', function() {

      var url  = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      $.ajax({
       type: 'ajax',
       method: 'post',
       url: url,
       data: data, // /converting the form data into array and sending it to server
       dataType: 'json',
       success:function(response) {
        if(response.success == true) {
           loadTable.ajax.reload(null, false);
            toastr.success('Notification<br>'+response.messages).show();
             $('#confirmationDemande').modal('hide');
             $('#addDemande').modal('hide');
        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);
            });
          }else {
             $('#confirmationDemande').modal('hide');
            toastr.error('Notification<br>'+response.messages).show();
          }
        }
      }
    });

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
          if(response.success == true) {
            $("#deleteModalPerso").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.success('<b>Notification</b></br>Votre demande a été bien Suppression').show();
          }else{
            $("#deleteModalPerso").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.succes('<b>Notification</b> </br>Erreur lors de traitement de données, Veuillez réssayer SVP.').show();
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
          if(response.success == true) {
            $("#annulerDemandeEncours").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.success('<b>Notification</b> </br>Votre demande a été bien annulé').show();
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
      if(lieu !='' && dtdp !='' && nbjrs !='' && numdec !=''){
        if(dd_objet >= Nowdate){
           if(nbjrs > 0 && numdec > 0){
              if(nbjrs.length <= 2){ 
                //nbjrs >= 3
               if(nbjrs >= 3 && nbjrs <= 15){
    $('#confirmeModalMod').modal('show');
    $('#myFormEdit').attr('action','<?php echo base_url();?>control/demandeCongeAnnuelModifier');
         }else{
          toastr.warning('<b>Notification</b> </br> Le nombre de jour de congé est doit être compris entre 3 et 15 jours.').show();
         }
            }else{
            toastr.warning('<b>Notification</b> </br> Veuillez vérifier la valeur que vous avez saisir SVP.').show();
            }
         }else{
           toastr.warning('<b>Notification</b> </br> La veleur que vous avez saisir n\'est pas correct, Veuillez saisir une valeur numérique positif').show();
         }
         }else{
            toastr.warning('<b>Notification</b> </br> La date de départ doit être égale ou supérieur de la date aujourd\'hui').show();
         }
       }else{
      
           toastr.warning('<b>Notification</b> </br> Tous les champs sont obligatoires').show();
      }
   
   });
  $("#myFormEdit")[0].reset();
//Prompte
  $("#editBtnOk").unbind('click').bind('click', function() {
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
        if(response.success == true) {
           //$("#editDemandeencours").modal('hide');
           loadTable.ajax.reload(null, false); 
           toastr.success('Notification <br>'+response.messages).show();
          $("#editDemandeencours").modal('hide');
          $('#confirmeModalMod').modal('hide');
        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
        
            });
          } else { 
            toastr.error('Notification <br>'+response.messages).show();
            loadTable.ajax.reload(null, false); 
            $('#confirmeModalMod').modal('hide');
          }
        }
      }
    });
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
