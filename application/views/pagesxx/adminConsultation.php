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
   <link rel="shortcut icon" style="border-radius: 15%;" href="<?php echo base_url('images/menetp.jpg') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/dist/css/adminlte.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url();?>documents/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
        <a href="../../index3.html" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Mon compte</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
 Se déconnecter
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>images/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
     
      <nav class="mt-2">
        <p style="color: #fff">------- <u>MENU PRINCIPAL</u> --------</p>
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
<li style="margin-bottom: 2%;">
            <a href="<?php echo base_url();?>control/ListePersonnel" class="nav-link active" style="background-color: #128496; ">
              <p>
               Personnel
              </p>
            </a>
          </li>
       <li style="margin-bottom: 2%;">
            <a href="<?php echo base_url();?>control/listeCompteUser" class="nav-link active" style="background-color: #128496;">
              <p>
               Compte utilisateur
              </p>
            </a>
          </li>
           <li style="margin-bottom: 2%;">
            <a href="<?php echo base_url();?>control/listedecision" class="nav-link active" style="background-color: #128496;">
              <p>
               Décision de congés   
              </p>
            </a>
          </li>
         <li style="margin-bottom: 2%;">
            <a href="#" class="nav-link active" style="background-color: #128496;">
              <p>
                Absences
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

          <li style="margin-bottom: 2%">
            <a href="<?php echo base_url();?>control/home" class="nav-link active" style="background-color: #128496;">
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
  <h4 style="margin-left: 2%;padding: 2%;"><u>Dernier congé</u></h4>
          <div class="tab-content p-3" id="nav-tabContent" style="margin-top: -3%">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                  <div class="row mt-4">
   </div>

          <table id="example1" class="table table-bordered table-striped" style="font-size: 13px; ">
                <thead>
                <tr style="background-color: #128496;color: #fff;">
                  <th>Im</th>
                  <th>Nom et prénom</th>
                  <th>date de dernier congé</th>
                  <th>N° décision</th>
                  <th>Au titre de l'année</th>
                  <th>Nombre de jours</th>
                  <th>Lieu de jouissance</th>
                </tr>
                </thead>
                <tbody>
                <tr style="background-color: #fff;">
                  <td>173900</td>
                   <td>VONINAHITRA CALVYN Abel</td>
                   <td>29/05/2019</td>
                   <td>0025</td>
                   <td>2018</td>
                   <td>15 jours</td>
                   <td>Fianarantsoa</td>
                </tr>
               <h3>Congé disponible: 35 jours.</h3>
                </tbody>
              </table>
              <?php echo ($consult); ?>
 </div>
</div>	
  Cet personnel ne peut pas pendre une congé dans cette année, render-vous à la prochaîne année. <br>
  Le congé 15 jours est maintenance disponible pour cet personnel. <br>

  </div>
  
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>documents/dist/js/demo.js"></script>

<!-- jQuery Page choix -->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>documents/dist/js/demo.js"></script>
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
