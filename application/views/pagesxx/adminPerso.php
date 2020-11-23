
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
                     <li class="dropdown active">
                      <a href="<?php echo base_url();?>control/lienPersonnelAdmin"><i class="icon-group"></i>&nbsp;Personnel</a>
                    </li>
                     <li class="dropdown">
                      <a href="<?php echo base_url();?>control/lienDecisionAdmin"><i class="icon-dashboard"></i>&nbsp;Décision</a>
                    </li>
                    <li class=" dropdown">
                      <a href="#"><i class="icon-calendar"></i>&nbsp;Congés &nbsp;<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" style="background-color: #444444 ">
                        <li><a href="<?php echo base_url(); ?>control/lienCongeAnnuelAdmin"> Congé annuel</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienCongeAnnuelAdmin">Congé de malade</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienCongePerso">Congé pour formation</a></li>
                        <li><a href="<?php echo base_url(); ?>control/lienpaterniteAdmin">Congé de paternité</a></li>
                        <li><a href="<?php echo base_url(); ?>control/maternitePerso">Congé de maternité</a></li>
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



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div>
      <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
        <div class="modal-dialog modal-overlay" style="background-color:#bb2839; " >
          <div class="modal-content" >
            <div class="modal-header" style="background-color: #bb2839;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 0%;color: #fff;">Nouveau personnel</h4>
              <button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: #fff;">&times;</span>
              </button> 
            </div>
              <form method="post"  action="<?php echo base_url();?>control/editPersonnel" id="myForm">
              <!--Matricule-->
              <div class="col-9" style="margin-top: 3%;">
                <input type="text" class="form-control" name="im_perso" id="im_perso" placeholder="Matricule">
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control" name="nom_perso" id="nom_perso" placeholder="Nom et prénom(s)">
             </div>
               <!--Sexe-->
               <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" name="sexe_perso" id="sexe_perso">
                    <option value="" disabled selected="selected">Séléctionner Sexe</option>
                    <option>M</option>
                    <option>F</option>  
                  </select>
                </div>
               <div class="col-9">
               <select class="form-control select2" style="width: 100%;" name="corps_perso" id="corps_perso">
                    <option value="" disabled selected="selected">Séléctionner corps</option>
                    <option >Encadreur</option>
                    <option>Réalisateur</option>
                    <option>Réalisateur Adjoint</option>
                    <option>Concepteur</option>
                    <option>Formateur</option>
               </select>
              </div>         
              <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" name="grade_perso" id="grade_perso">
                    <option value="" disabled selected="selected">Séléctionner Grade</option>
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
                  <select class="form-control select2" style="width: 100%;" name="dir_perso" id="dir_perso">
                    <option value="" disabled selected="selected">Séléctionner Direction</option>
                    <option >MIN</option>
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
                    <input type="text" class="form-control" placeholder="Lieu de Service" name="lieuserv_perso" id="lieuserv_perso">
                   </div>
               <!--Budget-->
               <div class="col-9">
           
                <select class="form-control select2" style="width: 100%;" name="budget_perso" id="budget_perso">
                    <option value="" disabled selected="selected">Séléctionner Budget</option>
                    <option>Générale</option>
                    <option>Ex provinciale</option>
                  </select>
               </div>
               <!--Chapitre Budgetaire-->
               <div class="col-9"> 
                <input type="text" class="form-control" placeholder="Chapitre budgetaire" name="cbudget_perso" id="cbudget_perso">
               </div>

            <div class="modal-footer justify-content-between" style="margin-left: 53%;">
              <div class="btn-group">
              <button type="reset" id="annuelerBtn" class="btn btn-default" style="color: #fff;background-color: #bb2839;">Retour</button>
              <button type="button" id="btnAjouter" class="btn btn-default" style="color: #fff;background-color: #bb2839;">Valider</button>
              </div>
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
                <input type="text" class="form-control" name="im_perso" id="editIm_perso" placeholder="Matricule">
              </div>
              <!--Nom et prénom-->
             <div class="col-9">
              <input type="text" class="form-control" name="nom_perso" id="editNom_perso" placeholder="Nom et prénom(s)">
             </div>
             <!--Nom et prénom-->
            
               <!--Sexe-->
                <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" id="editSexe_perso" name="sexe_perso">
                    <option selected="selected">M</option>
                    <option>F</option>  
                  </select>
                </div>
               <div class="col-9">
               <select class="form-control select2" style="width: 100%;" id="editCorps_perso" name="corps_perso">
                    <option>Encadreur</option>
                    <option>Réalisateur</option>
                    <option>Réalisateur Adjoint</option>
                    <option>Concepteur</option>
                    <option>Formateur</option>
                  </select>
                </div>
              <div class="col-9">
                  <select class="form-control select2" style="width: 100%;" id="editGrade_perso" name="grade_perso">
                    <option >Stagiaire</option>
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
                    <option>MIN</option>
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
                    <option selected="selected">Générale</option>
                    <option>Ex provinciale</option>
                  </select>
               </div> 
               <!--Chapitre Budgetaire-->
               <input type="hidden" name="id_perso" id="editId_perso">
               <div class="col-9"> 
                <input type="text" class="form-control" id="editChapitreBudget_perso" placeholder="Chapitre budgetaire" name="cbudget_perso">
               </div>
            <div class="modal-footer justify-content-between" style="margin-left: 51%;">
               <div class="btn-group">
                        <button type="reset" id="annuelerBtnEdit" class="btn btn-default" style="background-color: #bb2839;color:#fff;">Retour</button>
                        <button type="button" id="btnEdit" class="btn btn-default" style="background-color: #bb2839;color:#fff;">Valider</button>
                      </div>
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
      <div class="btn-group">
        <button type="button" id="AnBtn" class="btn btn-default" style="background-color: #bb2839; color: #fff;">Non</button>
        <button type="button" id="deleteBtn" class="btn btn-default" style="background-color: #bb2839; color: #fff;">Oui</button>
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
        <p>Voulez vraiment effectué cette opération ?</p>
      </div>
      <div class="modal-footer">
         <div class="btn-group">
          <button type="button" id="AnnulerBtnP" class="btn btn-default" style="background-color: #bb2839; color: #fff;">Non</button>
        <button type="button" id="addBtn" class="btn btn-default" style="background-color: #bb2839; color: #fff;">Oui</button>
        
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
        <button type="button" id="AnnulerBtnMod" class="btn btn-default" style="background-color: #bb2839; color: #fff;">Non</button>
        <button type="button" id="editBtnOk" class="btn btn-default" style="background-color: #bb2839; color: #fff;">Oui</button>
      </div>
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
          <div class="card" style="margin-top: -2.5%;border-color: red;">
            <div class="card-header">
              <h3 class="card-title">LISTE DE PERSONNELS</h3>
               <div style="margin-right: 13%;float: center;margin-top: -2.5%;">
            <button title="Nouveau personnel" type="button"  class="btn btn-flat" id ="btnModalx" style="background-color: #bb2839;width: 12%; border-color: #bb2839; border-radius: 5px;">
                <i class="icon-plus-sign" style="color: #fff;font-size: 20px;"></i> &nbsp;Nouveau
            </button>
          </div>
          <a href="<?php echo base_url();?>control/pdfPersonnel" >
          <button title="Nouveau personnel" type="button" class="btn btn-flat" id ="btnModalx" data-toggle="modalx" data-target="#modal-overlay" style="background-color: #bb2839;border-color: #bb2839;margin-top: -5.2%;width: 11%; border-radius: 5px;">
            <i class="fas fa-print" style="color: #fff;font-size: 21px;"></i>
            <font color="#fff">Imprimer</font>
            </button>
            </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="messages"></div>
             <table  class="table table-bordered" id="example1" style="font-size: 14px;">
                <thead>  
                <tr class="tabtr">
                  <th style=" background: #444444;color: #fff">Matricule</th>
                  <th style=" background: #444444;color: #fff">Nom et prénom(s)</th>
                  <th style=" background: #444444;color: #fff">Sexe</th>
                  <th style=" background: #444444;color: #fff">Corps</th>
                  <th style=" background: #444444;color: #fff">Grade</th>
                  <th style=" background: #444444;color: #fff">Direction</th>
                  <th style=" background: #444444;color: #fff">Lieu de service</th>
                  <th style=" background: #444444;color: #fff">Budget</th>
                  <th style=" background: #444444;color: #fff">Chapitre budgetaire</th>
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
    'ajax': '<?php echo base_url();?>control/listePerso',
    'orders': [],

  }); 
});
// nouveau personnel, get url du post$('#myForm').attr('action','<?php echo base_url();?>control/addPersonnel'); 

    $('#btnModalx').click(function(){
    $('#myModal').modal('show');
    $('#btnAjouter').click(function(){
       $j = $("#d_perso").val();
       $a = $("#im_perso").val();
       $b = $("#nom_perso").val();
       $c = $("#sexe_perso").val();
       $d = $("#corps_perso").val();
       $e = $("#grade_perso").val();
       $f = $("#dir_perso").val();
       $g = $("#lieuService_perso").val();
       $h = $("#budget_perso").val();
       $i = $("#cBudget_perso").val(); 
if($a !='' && $b !='' && $c != null && $d != null && $e != null && $f != null && $g !='' && $h !=null && $i !=''){
    $('#confirmeModal').modal('show');
       }else{
        
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

$(function(){
    $('#annuelerBtnEdit').click(function(){
    $('#myFormEdit')[0].reset();
    $('#editModalPerso').modal('hide');
    loadTable.ajax.reload(null, false);
  });

});
 
//ajouter personnel
 $(function(){
    //
      $('#addBtn').on('click',function(){
      $('#myForm').attr('action','<?php echo base_url();?>control/addPersonnel');
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
        toastr.success('<b>Notification</b> </br>Le nouveau personnel a été bien ajouté').show();
        
       },
       error: function(){
        $('#confirmeModal').modal('hide');
        $('#myModal').modal('hide');
        $('#myForm')[0].reset();
        loadTable.ajax.reload(null, false); 
       toastr.error('<b>Notification</b> </br>Erreur lors de traitement de données, <br> Veuillez réssayer SVP').show();
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
              toastr.success('<b>Notification</b> </br>Le personnel a été bien supprimé dans la liste').show();
          }else{
            $("#deleteModalPerso").modal('hide');
             loadTable.ajax.reload(null, false); 
              toastr.succes('<b>Notification</b> </br>Erreur lors de traitement de données,<br> Veuillez réssayer SVP.').show();
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
        toastr.success('<b>Notification</b> </br>L\information de cet personnel a été bien modifié').show();     
       },
       error: function(){
        $('#confirmeModalMod').modal('hide');
        $('#myModalEdit').modal('hide');
        $('#myFormEdit')[0].reset();
        loadTable.ajax.reload(null, false); 
       toastr.error('<b>Notification</b> </br>Erreur lors de traitement de données,<br>Veuillez réssayer SVP. ').show();
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
