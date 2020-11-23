
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Congé annuel</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url();?>documents/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">

    #ok{
    text-decoration: none;
  background-color: #e3293c;
  background-image: -moz-linear-gradient(top, #e3293c, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fff), to(#fff));
  background-image: -webkit-linear-gradient(top, #fff, #fff);
  background-image: -o-linear-gradient(top, #fff, #fff);
  background-image: linear-gradient(to right,#fff,#fff);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
  border-bottom-color: red;
  border-bottom-width: 13%;
          }
     
    #asideok{
      background-image: url('<?php echo base_url('images/5.jpg') ?>');
      background-size: ;
      background-color: #7dbec5;
    }
    .sup a:hover{
      font-size: 20px;
    }
    #okbtn{
      color: #ffffff;
  text-decoration: none;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#7dbdc5), to(#7dbdc5));
  background-image: -webkit-linear-gradient(top, #7dbdc5, #7dbdc5);
  background-image: -o-linear-gradient(top, #00c3bc,#00c3bc);
  background-image: linear-gradient(to bottom,#009540, #009540);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
  font-size: 15px;
     
    }
  </style>
  <script language="javascript">
        tab = new Array;
        tab[0]="#a1a8ff";
        tab[1]="#ffffff";
        tab[2]="#a1a8ff";
        tab[3]="#ffffff";
var init=0;
function change(){
if(init==4)init=0;
if(init<4) {  document.getElementById("coulchange").style.color=tab[init];init++;
           } 
setTimeout("change()",2000); 
           }
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed" onload="change();">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #7dbec5;" id="ok">
    <!-- Left navbar links -->
   <ul class="navbar-nav" >
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" style="color: #7e5812;"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item d-none d-sm-inline-block" style="background-color: #fff;border-radius: 2%;margin-right: 0%;background-image: linear-gradient(to bottom,#fff, #fff);">
        <a href="../../index3.html" class="nav-link" style="color: #7e5812;">Accueil</a>
      </li>
&nbsp;&nbsp;
      <li class="nav-item d-none d-sm-inline-block" style="background-color: #fff;border-radius: 2%;width: 100%;background-image: linear-gradient(to bottom,#fff, #fff;">
        <a href="#" class="nav-link" style="color: #7e5812;">Mon compte</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown" style="color: #e4242b;">
 <button class="btn btn-danger" style="width: 100%;font-size: 11.5px;">
   <i class="fas fa-power-off" style="color: #000;font-size: 16px;"></i> Déconnexion</button>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="asideok">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div> <img style="width: 30%;border-radius: 50%;margin-left: 30%;margin-top: 6%;" src="<?php echo base_url('images/menetp.jpg');?>"></div>
       <div class="user-panel mt-3 pb-3 mb-3 d-flex" style=" border-radius: 1%; margin-top: 1%;" >
        <p style="margin-left: 4px;font-size: 25px; color: #fff;" >
          GESTION DE CONGE <br>ET  DES ABSENCES
          <br>

        </p>

      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
       
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<li style="margin-bottom: 2%;">
            <a href="<?php echo base_url(); ?>control/ListePersonnel" class="nav-link active" style="background-color:  #fff; color: #fff;border-color: #bbc5bd;" id = "okbtn">
              <p>
               Personnel
                <i class="fas fa--left right"></i>
              </p>
            </a>
          </li>
       <li style="margin-bottom: 2%;">
            <a href="<?php echo base_url(); ?>control/adminCompte" class="nav-link active" style="background-color: #fff; color: #fff;border-color: #bbc5bd;" id = "okbtn">
              <p>
               Compte utilisateur
                <i class="fas fa--left right"></i>
              </p>
            </a>
          </li>
           <li style="margin-bottom: 2%;">
            <a href="<?php echo base_url();?>control/adminDecision"  class="nav-link active" style="background-color: #fff; color: #fff;border-color: #bbc5bd;" id = "okbtn">
              <p>
               Décision de congés
               
              </p>
            </a>
          </li>
   <li style="margin-bottom: 2%;">
            <a href="<?php echo base_url();?>control/autorisationLien" class="nav-link active" style="background-color:#fff; color: #fff;border-color: #bbc5bd;" id = "okbtn">
              <p>
                Absences
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open" style="color: #fff;">
            <a href="#" class="nav-link active" style="background-color:#fff; color: #fff;border-color: #fff;" id = "okbtn" >
              <p >
                Congés     
              </p>
            </a>
<style type="text/css">
  .conge a:hover{
     color:red;
     background-color: #dadce0;
    font-size: 16px;
  }
  
</style>
            <ul class="nav conge">
              <li class="an" style="margin-left: 10%;margin-right: 1%; width: 100%;">
                <a href="#" class="nav-link active" style="font-size: 14px;background-color: #dadce0; color:#433a31; ">
                  <p>Congé annuel</p>   
                   <i class="fas fa-angle-right  " style="margin-left: 45%;font-size: 16px;"></i>
                </a>
              </li>
              <li class="nav-item"  style="margin-left: 10%;margin-right: 1%; width: 100%;margin-top: 1.5%;">
                <a href="<?php echo base_url(); ?>control/listePaterniteAdmin" class="nav-link" style="font-size: 14px;background-color: #dadce0;color:#433a31;">
                  <p>Congé de paternité</p>      
                </a>
              </li>
              <li class="nav-item"  style="margin-left: 10%;margin-right: 1%; width: 100%;margin-top: 0.0%;">
                <a href="<?php echo base_url(); ?>control/control/listeMaterniteAdmin" class="nav-link" style="font-size: 14px;background-color: #dadce0;color:#433a31;">
                  <p>Congé de maternité</p>      
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
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <h4 style="margin-left: -0.3%;padding: 2%;font-size: 30px;"><b><i class="fas fa-folder-open" style="margin-top: -6%;color: #094c69;"></i>&nbsp;Congé annuels</b></h4>
  
  <p style="margin-top: -6px;margin-left: 20px;text-decoration: underline;color:#0b4d69 ">
        LISTE DES CONGES
       </p>

        <div class="row mt-4">
            <nav class="w-150">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true" style="font-size: 16px;font-style:; ">Demande de congé annuel</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false" style="font-size: 16px;font-style:; ">Demande favorable</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false" style="font-size: 16px;font-style:; ">Demande non favorable</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 

          <table id="example1" class="table table-bordered table-striped" style="font-size: 13px; width: 100%;">
                <thead>
                <tr style="background-color: #00953f;color:#fff;border-color: red;">
                  <th>N° décision</th>
                  <th>Matricule</th>
                  <th>Titre (année) </th>
                  <th>Motif</th>
                  <th>Nombre jours </th>
                  <th>Lieu de jouissance</th>
                  <th>Date de décision</th>
                  <th>Date de départ</th>
                  <th>Date de retour</th>
                  <th>Consultation</th>
                  <th style="text-align: center;" width="12%;"  >Votre avis ?</th>
                </tr>
                </thead>

                <tbody>
                  <?php 
                  if($CongeCours){
                    foreach ($CongeCours as $cg) {
                   ?>
                    <?php 
                    if($cg->status_conge=="En cours" ){
                    ?>
                <tr style="background-color: #fff;">
                  <td><?php echo $cg->numdec_conge; ?></td>
                  <td><?php echo $cg->im_conge; ?></td>
                  <td><?php echo $cg->titre_conge; ?></td>
                  <td><?php echo $cg->motif_conge; ?></td>
                  <td><?php echo $cg->nbjrs_conge; ?></td>
                  <td><?php echo $cg->lieu_conge; ?></td>
                  <td><?php echo $cg->dtdec_conge; ?></td>
                  <td><?php echo $cg->dtdep_conge; ?></td>
                  <td><?php echo $cg->dtrtr_conge; ?></td>
                  <td>
                    <form method="post" action="congeConsulter">
                    <input type="hidden" name="im_conge" value="<?php echo $cg->im_conge; ?>">
                    <button title="Consulter" type="submit" class="btn btn-default" style="font-size: 12px;width: 70%;margin-left: 6px;"><i class="fas  fa-info-circle " style="color: #094c69;font-size: 18px;" id="infos"></i></button>
                    </form>
                  </td>
                  <td width="14%;" >
                    <div style="margin-top: 3
                    2%; margin-left: 2%;">
                    <form method="post" action="congeValider">
                    <input type="hidden" name="im_conge" value="<?php echo $cg->im_conge; ?>">
                    <input type="hidden" name="titre_conge" value="<?php echo $cg->titre_conge; ?>">
                    <input type="hidden" name="dtdec_conge" value="<?php echo $cg->dtdec_conge;?>">
                    <button title="Avis favorable" type="submit" class="btn btn-default"  style="font-size: 14px; width: 40%;">
                      <i class="fas fa-check" style="color: #00953e;font-size: 18px; "></i></button>
                  </form>
                  </div>
                  <div style="margin-top: -27.5%; margin-left: 49%;">
                 <form method="post" action="congeRejeter">
                    <input type="hidden" name="im_conge" value="<?php echo $cg->im_conge; ?>">
                    <input type="hidden" name="titre_conge" value="<?php echo $cg->titre_conge;?>">
                    <input type="hidden" name="dtdec_conge" value="<?php echo $cg->dtdec_conge;?>">
                    <button title="Avis non favorable" type="submit" class="btn btn-default" style="font-size: 14px; width: 80%;" ><i class="fas fa-times" style="color: #dc1c00;font-size: 18px;"></i></button>
                  </form>
                </div>
                </td>
                </tr>

                <?php
              }else{

               echo "";
                  
                }
                }
              }
                 ?>
                </tbody>
              </table>
 </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> 
         <table id="example1" class="table table-bordered table-striped" style="font-size: 13px;width: 100%; ">
                <thead>
                <tr  style="background-color: #00953f;color:#fff;border-color: red;">
                  <th>N° décision</th>
                  <th>Matricule</th>
                  <th>Titre (année) </th>
                  <th>Motif</th>
                  <th>Nombre jours </th>
                  <th>Lieu de jouissance</th>
                  <th>Date de décision</th>
                  <th>Dtae de départ</th>
                  <th>Date de retour</th>
                  <th style="text-align: center;" width="12%;" >Actions</th>
                </tr>
                </thead>

                <tbody>
                  <?php 
                  if($CongeCours){
                    foreach ($CongeCours as $cg) {
                   ?>
                   <?php 
                    if($cg->status_conge=="Valider"){
                    ?>
                <tr style="background-color: #fff;">
                  <td><?php echo $cg->numdec_conge; ?></td>
                  <td><?php echo $cg->im_conge; ?></td>
                  <td><?php echo $cg->titre_conge; ?></td>
                  <td><?php echo $cg->motif_conge; ?></td>
                  <td><?php echo $cg->nbjrs_conge; ?></td>
                  <td><?php echo $cg->lieu_conge; ?></td>
                  <td><?php echo $cg->dtdec_conge; ?></td>
                  <td><?php echo $cg->dtdep_conge; ?></td>
                  <td><?php echo $cg->dtrtr_conge; ?></td>
                  <td>
                  <div>
                    <a href="<?php echo base_url('control/congeValider/'.$cg->id_conge);?>" onClick="return confirm('voullez-vous vraiment effectuer cette opération ?');">
                      <button class="btn btn-default" style="font-size: 12px;margin-top: 5%;">
                    <i class="fas   fa-file-pdf " style="color: #084c69;font-size: 13px;margin-left: 10%;"></i></button></a></div>
                    <div>
                    <form method="post" action="deleteCongeV">
                    <input type="hidden" name="im_conge" value="<?php echo $cg->im_conge; ?>">
                    <input type="hidden" name="titre_conge" value="<?php echo $cg->titre_conge;?>">
                    <input type="hidden" name="dtdec_conge" value="<?php echo $cg->dtdec_conge;?>">
                    <button type="submit" class="btn btn-default" style="font-size: 12px; margin-top: -52%;margin-left: 47%;"><i class="fas   fa-trash " style="color: #094c69;font-size: 13px;color: #dc1c00"></i></button>
                  </form></div></td>
                  
                </tr>
                <?php }else{

                }
                }}
                 ?>
                </tbody>
              </table>
               </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">

<table id="example1" class="table table-bordered table-striped" style="font-size: 13px;width: 100%; ">
                <thead>
                <tr  style="background-color: #00953f;color:#fff;border-color: red;">
                  <th>N° décision</th>
                  <th>Matricule</th>
                  <th>Titre (année) </th>
                  <th>Motif</th>
                  <th>Nombre jours </th>
                  <th>Lieu de jouissance</th>
                  <th>Date de décision</th>
                  <th>Date de départ</th>
                  <th>Date de retour</th>
                  <th style="text-align: center;" width="10%;">Actions</th>
                </tr>
                </thead>

                <tbody>
                  <?php 
                  if($CongeCours){
                    foreach ($CongeCours as $cg) {
                   ?>
                    <?php 
                    if($cg->status_conge=="Rejeter"){
                    ?>
                <tr style="background-color: #fff;">
                  <td><?php echo $cg->numdec_conge; ?></td>
                  <td><?php echo $cg->im_conge; ?></td>
                  <td><?php echo $cg->titre_conge; ?></td>
                  <td><?php echo $cg->motif_conge; ?></td>
                  <td><?php echo $cg->nbjrs_conge; ?></td>
                  <td><?php echo $cg->lieu_conge; ?></td>
                  <td><?php echo $cg->dtdec_conge; ?></td>
                  <td><?php echo $cg->dtdep_conge; ?></td>
                  <td><?php echo $cg->dtrtr_conge; ?></td>
                  
                  <td>
                    <form method="post" action="deleteCongeR">
                    <input type="hidden" name="im_conge" value="<?php echo $cg->im_conge; ?>">
                    <input type="hidden" name="titre_conge" value="<?php echo $cg->titre_conge;?>">
                    <input type="hidden" name="dtdec_conge" value="<?php echo $cg->dtdec_conge;?>">
                    <button class="btn btn-default" style="font-size: 14px;margin-left: 30%;margin-top: 0%;" >
                    <i class="fas   fa-trash " style="color: #094c69;font-size: 13px;color: #dc1c00"></i> </button>
                  </form>


                  </td>
                  
                </tr>
                <?php }else{

                }
                }}
                 ?>
                </tbody>
              </table>


               </div>
            </div>
          </div>
  </div>
  

  <footer class="main-footer" style="background-color: #094c69">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Ammplication gestion de congé et des absencens <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
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
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>documents/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>documents/dist/js/demo.js"></script>

<!-- jQuery DataTable -->
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
<!-- page script Pagination -->



<!-- jQuery Page choix -->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>documents/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>
</body>
</html>
