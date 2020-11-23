<?php  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Congé et Absence</title>
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
  <link href="<?php echo base_url();?>remember/css/style.css" rel="stylesheet">
  <style type="text/css">
    body{
     background-image: url('<?php echo base_url();?>images/bga.jpg');
     background-size: cover; 
    }
  </style>
</head>
<body >
<div class="login-box">
  <div class="login-logo">
    <a href="#"><img style="border-radius: 52%;width: 20%;" src="<?php echo base_url();?>remember/img/menetp.jpg"><br><br><font color="#009738"><b>MENETP</b></font></a>
  </div>
  <!-- /.login-logo -->

  <div class="card" style="margin-top: 10%;background-color:#179840; border-width: 1px">
    <div class="card-body login-card-body" style="border-radius: 10px">
      <p class="login-box-msg">Ouvrir une session</p>
      <form action="<?php echo base_url();?>control/authentification" method="post" id="loginForm">
        <div class="input-group mb-3">
          <input type="text" class="form-control"name="matricule" placeholder="Matricule">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="icon-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="motdepasse" id="password" class="form-control" placeholder="Mot de passe">
          <div class="input-group-append">
            <div class="input-group-text">
              <a href="#" class="lien-btn"><i class="icon-eye-close" onclick="myFunction()"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-6" style="margin-left: 50%;margin-top: 0%;">
            <button type="submit" id="loginBtn" class="btn btn-primary btn-block btn-flat" style="background-color: #bb2839;border-radius: 5px"><i class="icon-signin" style="color: #fff"></i> Se connecter</button>
          </div>
           <p class="mb-1" style="margin-top: 3%;">
           <a href="#"><font color="#bb2839">Mot de passe oublié ?</font></a>
           </p>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script>
  function myFunction() {

  var x = document.getElementById("password");
  if (x.type === "password") {
      x.type = "text";
      $('a.lien-btn > i').removeClass('icon-eye-close').addClass(' icon-eye-open');
  } else {
     x.type = "password";
      $('a.lien-btn > i').removeClass('icon-eye-open').addClass('icon-eye-close');
  }
}
</script>
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

</body>

<script>
    $('#loginBtn').unbind('click').bind('click', function() {
    

    });
</script>
</html>
