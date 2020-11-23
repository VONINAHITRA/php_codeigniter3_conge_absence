<!DOCTYPE html>  
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AGC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
   <link rel="shortcut icon" style="border-radius: 15%;" href="<?php echo base_url('images/menetp.jpg') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url();?>documents/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script language="javascript">
        tab = new Array;
        tab[0]="#be0434";
        tab[1]="#be0434";
        tab[2]="#be0434";
        tab[3]="#be0434";
var init=0;
function change(){
if(init==4)init=0;
if(init<4) {  document.getElementById("coulchange").style.color=tab[init];init++;
           } 
setTimeout("change()",2000); 
           }
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #fff;" onload="change();">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
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
  border-bottom-color: #960f23;
  border-bottom-width: 13%;
          }
     
    #asideok{
      
      background-size: ;
      background-color: #169841;
    }
    .sup a:hover{
      font-size: 20px;
      #960f23;
    }
    #okbtn{
      color: #000;
  text-decoration: none;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#7dbdc5), to(#7dbdc5));
  background-image: -webkit-linear-gradient(top, #7dbdc5, #7dbdc5);
  background-image: -o-linear-gradient(top, #960f23, #960f23) ;
  background-image: linear-gradient(to bottom,#169841, #169841);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
  font-size: 14px;
     
    }

  </style>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="ok" style="color: #000;">
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
 <button class="btn btn-default" style="width: 100%;font-size: 11.5px;background-color: #c82232;color: #fff;">
   <i class="fas fa-power-off" style="color: #fff;font-size: 16px;"></i> Déconnexion</button>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"  id="asideok" style=" border-radius: 0%; text-shadow: 5%;">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional)ok -->
     <div> <img style="width: 30%;border-radius: 50%;margin-left: 30%;margin-top: 6%;" src="<?php echo base_url('images/menetp.jpg');?>">
     </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style=" border-radius: 1%; margin-top: 1%;" >

        <p style="margin-left: 22px;margin-top:-33px;font-size: 19px;color: #fff;" ><br>
          GESTION DE CONGE <br>ET  DES ABSENCES
          <br>
        </p>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<li style="margin-bottom: 0%;">
            <a href="<?php echo base_url();?>control/ListePersonnel" class="nav-link " style="background-color:#ce2b4c; color: #fff;font-size:15px;border-color: #bbc5bd;font-size: 15px;" id = "okbtn">
              <p>
               Personnel
              </p>
            </a>
          </li>
       <li style="margin-bottom: 0%;">
            <a href="<?php echo base_url();?>control/adminCompte" class="nav-link active" style="background-color: #ce2b4c;color: #fff;font-size:15px;" id = "okbtn">
              <p>
               Compte utilisateur
              </p>
            </a>
          </li>
           <li style="margin-bottom: 0%;">
            <a href="<?php echo base_url();?>control/adminDecision" class="nav-link active" style="background-color: #ce2b4c;color: #fff;font-size:15px;" id = "okbtn">
              <p>
               Décision de congés 
              </p>
             </a>
          </li>
         <li style="margin-bottom: 0%;">
            <a href="<?php echo base_url();?>control/autorisationLien" class="nav-link active" style="background-color: #ce2b4c;color: #fff;font-size:15px;" id = "okbtn">
              <p>
                Absences
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li style="margin-bottom: 0.3%;">
            <a href="<?php echo base_url();?>control/home" class="nav-link active" style="background-color: #ce2b4c;color: #fff;font-size:15px;" id = "okbtn">
              <p>
                Congés        
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
<div>
  <h4 style="margin-left: -0.3%;padding: 2%;font-size: 30px;color:#169841;"><b><i class="fas fa-street-view" style="margin-top: -6%;color:#169841;"></i>&nbsp;&nbsp;Personnels</b></h4>
 
       <p style="margin-top: -6px;margin-left: 20px;text-decoration: underline;color:#0b4d69 ">
        LISTE DES PERSONNELS AYANT DE DROIT DE CONGE
       </p>
          <div class="tab-content p-3" id="nav-tabContent" style="margin-top: -3%">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                  <div class="row mt-4">
            <button title="Nouveau personnel" type="button" style="margin-left: 90%; margin-top: 0%;font-size: 14px;color: #fff;border-color: #179841;border-style: double; background-color: #179841; " class="btn btn-default" id ="btnModal" data-toggle="modal" data-target="#modal-overlay">
              <i class="fas fa-plus" style="color: #fff;font-size: 16px;"></i>
            Nouveau
            </button>
             </div>

          <table id="example1" class="table table-bordered" style="font-size: 13px;margin-top: 0.5%; ">
                <thead > 
                <tr style="background-color: #169841;color:#fff;border-color: red;font-style: normal;font-size: 11px;">
                  <th>Matricule</th>
                  <th>Nom et prénoms</th>
                   <th>Sexe</th>
                  <th>Corps</th>
                  <th>Grade</th>
                  <th>Direction</th>
                  <th>Lieu de service</th>
                  <th>Budget</th>
                  <th>Chapitre budgetaire</th>
                  <th width="5%;">Consultation</th>
                  <th style="text-align: center;" width="12%;">Actions</th>
                </tr>
                </thead>
                <tbody>
               <?php 
                  if($Perso){
                    foreach ($Perso as $p) {
                   ?>
                  
                <tr style="background-color: #fff;">
                  <td><?php echo $p->im_perso; ?></td>
                  <td><?php echo $p->nomPre_perso; ?></td>
                  <td><?php echo $p->sexe_perso; ?></td>
                  <td><?php echo $p->corps_perso; ?></td>
                  <td><?php echo $p->grade_perso; ?></td>
                  <td><?php echo $p->direction_perso; ?></td>
                  <td><?php echo $p->lieuService_perso; ?></td>
                  <td><?php echo $p->budget_perso; ?></td>
                  <td><?php echo $p->chapitreBudget_perso; ?></td>
                  <td >
                     <a  title="Consulter" href="<?php echo base_url('control/deletePersonnel/'.$p->im_perso);?>" onClick="return confirm('voullez-vous vraiment effectuer cette opération ?');">
                    <button class="btn btn-default modifier" style=" font-size: 12px;margin-left: 20%;border-color:#fff;background-color: #fff;" id="<?php echo $p->id_perso; ?>">
                   <i class="fas  fa-info-circle " style="color: #169841;font-size: 20px;" id="infos"></i></button></a>
                 </td>

                  <td >
                    <a  title="Modifier" href="<?php echo base_url('control/deletePersonnel/'.$p->im_perso);?>" onClick="return confirm('voullez-vous vraiment effectuer cette opération ?');">
                      <button class="btn btn-default" style="font-size: 14px;margin-left:2%;border-color:#fff;background-color: #fff; " >
                     <i class="fas  fa-edit " style="color: #169841;font-size: 20px;"></i></button></a>

                  <a title="Supprimer" href="<?php echo base_url('control/deletePersonnel/'.$p->im_perso);?>" onClick="return confirm('voullez-vous vraiment effectuer cette opération ?');" >
                    <button class="btn btn-default" style="font-size: 14px;margin-left: 53%;margin-top: -56%;border-color:#fff;background-color: #fff;" >
                    <i class="fas   fa-trash " style="color: #960e22;font-size: 20px;"></i> </button></a>
                  </td>
                </tr> 
                <?php
                }}
                 ?>
                </tbody>
              </table>
              </div>
 </div>
</div>

<section class="content">
      <div class="modal fade" id="modal-overlay">
        <div class="modal-dialog modal-overlay">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #960f23;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 25%;color: #fff;">Nouveau personnel</h4>
              <a href="<?php echo base_url('control/ListePersonnel');?>" onClick="return confirm('voullez-vous vraiment quitter ?');"><button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </a>
            </div>
            <div class="modal-body" >
              <form method="post" action="<?php echo base_url(); ?>control/addPersonnel">
              <!--Matricule-->
              <div class="col-5">
                <label>Im:</label>
                    <input type="number" class="form-control" name="im_perso" placeholder="Votre Im">
              </div>
              <!--Nom et prénom-->
             <div class="form-group">
                        <label>Nom et prénoms:</label>
                        <input type="text" class="form-control" name="nom_perso" placeholder="Votre Nom et prénoms">
               </div>
               <!--Sexe-->
                  <label>Sexe:</label>
                  <select class="form-control select2" style="width: 100%;" name="sexe_perso">
                    <option selected="selected">M</option>
                    <option>F</option>  
                  </select>
              <!--Corps-->
            <label>Corps:</label>
                  <select class="form-control select2" style="width: 100%;" name="corps_perso">
                    <option selected="selected">Encadreur</option>
                    <option>Réalisateur</option>
                    <option>Réalisateur Adjoint</option>
                    <option>Concepteur</option>
                    <option>Formateur</option>
                  </select>
                             <!--Grade-->
                  <label>Grade:</label>
                  <select class="form-control select2" style="width: 100%;" name="grade_perso">
                    <option selected="selected">Stagiaire</option>
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
                  <label>Direction:</label>
                  <select class="form-control select2" style="width: 100%;" name="dir_perso">
                    <option selected="selected">Ministre</option>
                    <option>SG</option>
                    <option>DCAB</option>
                    <option>DTIC</option>
                    <option>DEF</option>
                    <option>DEPA</option>
                    <option>DAFF</option>
                  </select>
               <!--Lieur de Service-->
                  <div class="form-group">
                        <label>Lieur de service</label>
                        <input type="text" class="form-control" placeholder="Votre Lieu de sevice" name="lieuserv_perso">
                   </div>
               <!--Budget-->
               <div class="form-group">
                        <label>Budget:</label>
                    <select class="form-control select2" style="width: 100%;" name="budget_perso">
                    <option selected="selected">Générale</option>
                    <option>Ex provinciale</option>
                  </select>
               </div>
               <!--Chapitre Budgetaire-->
               <div class="form-group">
                        <label>Chapitre budgetaire:</label>
                        <input type="text" class="form-control" placeholder="Votre chapitre budgetaire" name="cbudget_perso">
               </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default" style="margin-left: 25%;color: #000;border-color: #0d4d69;"  ><i class="fas fa-times" style="color: #fff; "></i>  Annuler</button>
              <button type="submit" class="btn btn-default" style="margin-right: 25%;color: #fff; border-color: #0d4d69;"><i class="fas fa-check-square" style="color: #0b4d69; "></i>  Ajouter</button>
            </div>
            </form>
          </div>
          
          <!-- /.modal-content -->
        </div>
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </section>
              
  <style type="text/css">
    .logo_menetep{
       width: 50px;
       margin-top: -1%;
       float: left;
       margin-left: 6%;
       border-radius: 55%;
   }
        
    
  </style>
 <footer class="main-footer" style="margin-left: 0%;width: 100%; margin-top: 18.2%; background-color: #adadad; margin-bottom: -25%; ">
    <img class="logo_menetep" src="<?php echo base_url('images/menetp.jpg')?>">  
    <div class="float-right d-none d-sm-block" style="color: #00953f;">
      <b>Application pour la gestion de congé et des absences
    </div>
    <strong style="color: #fff;font-size: 10px; margin-left: "><br> </strong>
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
<!-- jQuery Modal-->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url();?>documents/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>documents/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- jQuery Page choix -->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>documents/plugins/select2/js/select2.full.min.js"></script>

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














<!DOCTYPE html>  
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AGC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/dist/css/adminlte.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url();?>documents/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script language="javascript">
        tab = new Array;
        tab[0]="#be0434";
        tab[1]="#be0434";
        tab[2]="#be0434";
        tab[3]="#be0434";
var init=0;
function change(){
if(init==4)init=0;
if(init<4) {  document.getElementById("coulchange").style.color=tab[init];init++;
           } 
setTimeout("change()",2000); 
           }
</script>
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
  border-bottom-color: #960f23;
  border-bottom-width: 13%;
          }
     
    #asideok{
      
        background-image: url('<?php echo base_url('images/4.jpg') ?>');
      background-size:cover ;
      background-color: #7dbec5;
    }
    .sup a:hover{
      font-size: 20px;
      #960f23;
    }
    #okbtn{
      color: #000;
  text-decoration: none;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#7dbdc5), to(#7dbdc5));
  background-image: -webkit-linear-gradient(top, #7dbdc5, #7dbdc5);
  background-image: -o-linear-gradient(top, #960f23, #960f23) ;
  background-image: linear-gradient(to bottom,#c82132, #c82132);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
  font-size: 14px;
     
    }

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background-color: #fff;" onload="change();">

 <!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e_commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project_add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project_edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project_detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  
  <div class="content-wrapper">
<div>
  <h4 style="margin-left: -0.3%;padding: 2%;font-size: 30px;color:#8f0e1f;"><b><i class="fas fa-street-view" style="margin-top: -6%;color:#8f0e1f;"></i>&nbsp;&nbsp;Personnels</b></h4>
 
       <p style="margin-top: -6px;margin-left: 20px;text-decoration: underline;color:#000 ">
        LISTE DES PERSONNELS AYANT DE DROIT DE CONGE
       </p>
          <div class="tab-content p-3" id="nav-tabContent" style="margin-top: -3%">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                  <div class="row mt-4">
            <button title="Nouveau personnel" type="button" style="margin-left: 90%; margin-top: 0%;font-size: 14px;color: #fff;border-color: #179841;border-style: double; background-color: #179841; " class="btn btn-default" id ="btnModal" data-toggle="modal" data-target="#modal-overlay">
              <i class="fas fa-plus" style="color: #fff;font-size: 16px;"></i>
            Nouveau
            </button>
             </div>

          <table id="example1" class="table table-bordered" style="font-size: 13px;margin-top: 0.5%; ">
                <thead > 
                <tr style="background-color: #802024;color:#fff;border-color: red;font-style: normal;font-size: 11px;">
                  <th>Matricule</th>
                  <th>Nom et prénoms</th>
                   <th>Sexe</th>
                  <th>Corps</th>
                  <th>Grade</th>
                  <th>Direction</th>
                  <th>Lieu de service</th>
                  <th>Budget</th>
                  <th>Chapitre budgetaire</th>
                  <th width="5%;">Consultation</th>
                  <th style="text-align: center;" width="12%;">Actions</th>
                </tr>
                </thead>
                <tbody>
               <?php 
                  if($Perso){
                    foreach ($Perso as $p) {
                   ?>
                  
                <tr style="background-color: #fff;">
                  <td><?php echo $p->im_perso; ?></td>
                  <td><?php echo $p->nomPre_perso; ?></td>
                  <td><?php echo $p->sexe_perso; ?></td>
                  <td><?php echo $p->corps_perso; ?></td>
                  <td><?php echo $p->grade_perso; ?></td>
                  <td><?php echo $p->direction_perso; ?></td>
                  <td><?php echo $p->lieuService_perso; ?></td>
                  <td><?php echo $p->budget_perso; ?></td>
                  <td><?php echo $p->chapitreBudget_perso; ?></td>
                  <td >
                     <a  title="Consulter" href="<?php echo base_url('control/deletePersonnel/'.$p->im_perso);?>" onClick="return confirm('voullez-vous vraiment effectuer cette opération ?');">
                    <button class="btn btn-default modifier" style=" font-size: 12px;margin-left: 20%;border-color:#fff;background-color: #fff;" id="<?php echo $p->id_perso; ?>">
                   <i class="fas  fa-info-circle " style="color: #169841;font-size: 20px;" id="infos"></i></button></a>
                 </td>

                  <td >
                    <a  title="Modifier" href="<?php echo base_url('control/deletePersonnel/'.$p->im_perso);?>" onClick="return confirm('voullez-vous vraiment effectuer cette opération ?');">
                      <button class="btn btn-default" style="font-size: 14px;margin-left:2%;border-color:#fff;background-color: #fff; " >
                     <i class="fas  fa-edit " style="color: #169841;font-size: 20px;"></i></button></a>

                  <a title="Supprimer" href="<?php echo base_url('control/deletePersonnel/'.$p->im_perso);?>" onClick="return confirm('voullez-vous vraiment effectuer cette opération ?');" >
                    <button class="btn btn-default" style="font-size: 14px;margin-left: 53%;margin-top: -56%;border-color:#fff;background-color: #fff;" >
                    <i class="fas   fa-trash " style="color: #960e22;font-size: 20px;"></i> </button></a>
                  </td>
                </tr> 
                <?php
                }}
                 ?>
                </tbody>
              </table>
              </div>
 </div>
</div>

<section class="content">
      <div class="modal fade" id="modal-overlay">
        <div class="modal-dialog modal-overlay">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #960f23;height: 56.5px;">
              <h4 class="modal-title" style="margin-left: 25%;color: #fff;">Nouveau personnel</h4>
              <a href="<?php echo base_url('control/ListePersonnel');?>" onClick="return confirm('voullez-vous vraiment quitter ?');"><button type="button" style="background-color: red;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> </a>
            </div>
            <div class="modal-body" >
              <form method="post" action="<?php echo base_url(); ?>control/addPersonnel">
              <!--Matricule-->
              <div class="col-5">
                <label>Im:</label>
                    <input type="number" class="form-control" name="im_perso" placeholder="Votre Im">
              </div>
              <!--Nom et prénom-->
             <div class="form-group">
                        <label>Nom et prénoms:</label>
                        <input type="text" class="form-control" name="nom_perso" placeholder="Votre Nom et prénoms">
               </div>
               <!--Sexe-->
                  <label>Sexe:</label>
                  <select class="form-control select2" style="width: 100%;" name="sexe_perso">
                    <option selected="selected">M</option>
                    <option>F</option>  
                  </select>
              <!--Corps-->
            <label>Corps:</label>
                  <select class="form-control select2" style="width: 100%;" name="corps_perso">
                    <option selected="selected">Encadreur</option>
                    <option>Réalisateur</option>
                    <option>Réalisateur Adjoint</option>
                    <option>Concepteur</option>
                    <option>Formateur</option>
                  </select>
                             <!--Grade-->
                  <label>Grade:</label>
                  <select class="form-control select2" style="width: 100%;" name="grade_perso">
                    <option selected="selected">Stagiaire</option>
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
                  <label>Direction:</label>
                  <select class="form-control select2" style="width: 100%;" name="dir_perso">
                    <option selected="selected">Ministre</option>
                    <option>SG</option>
                    <option>DCAB</option>
                    <option>DTIC</option>
                    <option>DEF</option>
                    <option>DEPA</option>
                    <option>DAFF</option>
                  </select>
               <!--Lieur de Service-->
                  <div class="form-group">
                        <label>Lieur de service</label>
                        <input type="text" class="form-control" placeholder="Votre Lieu de sevice" name="lieuserv_perso">
                   </div>
               <!--Budget-->
               <div class="form-group">
                        <label>Budget:</label>
                    <select class="form-control select2" style="width: 100%;" name="budget_perso">
                    <option selected="selected">Générale</option>
                    <option>Ex provinciale</option>
                  </select>
               </div>
               <!--Chapitre Budgetaire-->
               <div class="form-group">
                        <label>Chapitre budgetaire:</label>
                        <input type="text" class="form-control" placeholder="Votre chapitre budgetaire" name="cbudget_perso">
               </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-default" style="margin-left: 25%;color: #000;border-color: #0d4d69;"  ><i class="fas fa-times" style="color: #fff; "></i>  Annuler</button>
              <button type="submit" class="btn btn-default" style="margin-right: 25%;color: #fff; border-color: #0d4d69;"><i class="fas fa-check-square" style="color: #0b4d69; "></i>  Ajouter</button>
            </div>
            </form>
          </div>
          
          <!-- /.modal-content -->
        </div>
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </section>
              
  <style type="text/css">
    .logo_menetep{
       width: 50px;
       margin-top: -1%;
       float: left;
       margin-left: 6%;
       border-radius: 55%;
   }
        
    
  </style>
 <footer class="main-footer" style="margin-left: 0%;width: 100%; margin-top: 18.2%; background-color: #adadad; margin-bottom: -25%; ">
    <img class="logo_menetep" src="<?php echo base_url('images/menetp.jpg')?>">  
    <div class="float-right d-none d-sm-block" style="color: #00953f;">
      <b>Application pour la gestion de congé et des absences
    </div>
    <strong style="color: #fff;font-size: 10px; margin-left: "><br> </strong>
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
<!-- jQuery Modal-->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url();?>documents/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url();?>documents/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- jQuery Page choix -->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>documents/plugins/select2/js/select2.full.min.js"></script>

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
