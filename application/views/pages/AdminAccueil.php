<?php  ?>
<?php
$user = $this->session->userdata('user');
extract($user);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Congé et absence</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />
  <!-- css 
  --> 
  <link href="<?php echo base_url();?>remember/css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>remember/css/overwrite.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>remember/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="shortcut icon" style="border-radius: 15%;" href="<?php echo base_url('images/menetp.jpg') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>style/styles.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/toastr/toastr.min.css">

  <!-- Theme skin 
<link id="t-colors" href="color/default.css" rel="stylesheet" />
  -->
  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body class="hold-transition sidebar-mini  layout-navbar-fixedxx" style="background-color: #f4f6f9">
  <div id="wrapper">
    <!-- start header -->
    <header >
           <div class="top" style="">
        <div class="container" >
          <div class="row">
            <div class="" style="margin-left: 30%;">
              <ul class="topmenu" style="margin-left:-174%;color:red">
                <li><a href="#"><h4>CONGE ET ABSENCE</h4></a></li>
              </ul>
            </div>
            <div class="" style="margin-right: -7%;margin-top:-2.6%;width: 150%; text-align: right;">
              <ul class="" style="color: #fff;padding-bottom: -2%; ">
            <?php echo $avatar_user; ?>&nbsp;<?php echo $nomPre_perso; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
          <div class="">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo" style="margin-left: 25%;">
              <h1><a href="index.html"><img style="border-radius: 52%;width: 25%;" src="<?php echo base_url();?>remember/img/menetp.jpg"> &nbsp;<font color="#059033">MENETP</font></a></h1>
            </div>
            
          </div>
          <div class="span15" style="margin-left: 48%;margin-top: -5%;">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active" >
                      <a href="<?php echo base_url();?>control/accueil2"><i class="icon-home">&nbsp;</i>Accueil</a>
                    </li>
                     <li class="dropdown ">
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
    <!-- end header -->

    <!-- section intro -->
    <section id="intro">
      <div class="intro-content">
        <h2>BIENVENUE </h2>
        <h3>GESTION DE CONGE ET D'ABSENCE</h3>
        <h6>Admin</h6>
      </div>
    </section>
  </div>
  <div style="color: #bb2739;margin-left: 2%;margin-top: 0.5%;">&nbsp;&copy; VONINAHITRA CLAVYN Lebonheur de-Patrice, DTIC/SSI Ampefiloha </div>
  </div>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>remember/js/jquery.js"></script>
  <!-- Template Custom JavaScript File -->
  <script src="<?php echo base_url();?>remember/js/custom.js"></script>
  <script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
</body>

</html>
