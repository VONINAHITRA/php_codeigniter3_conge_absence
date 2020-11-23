<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body class="hold-transition sidebar-mini  layout-navbar-fixed">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url();?>documents/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>documents/plugins/fontawesome-free/css/all.min.css">
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left: -10%;">
  <div>
    <img style="width: 14%; margin-left: 50%;" src="<?php echo base_url();?>images/menetp.jpg">
  </div>
  <div style="margin-left: -2%;margin-top: 0%;font-size: 14px;color: #8b4513;margin-bottom: -1%;width: 100%;">Ministère de l'éducation Nationale,de l'Enseignement<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Technique et Preofesionnel
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      -----------------------------------------<br>
 <div style="font-size: 20px;margin-bottom:2%;color: #bb2739;">Gestion de congé et des absences</div> 

  </div>
  
</nav>
<div class="login-block" style="margin-right: 41%;">
  <div style="background-color: #bb2839;border-radius: 525px; width: 40%; padding: 10%;margin-left: 28%;margin-top: -28%;">
  <i class="fas fa-user" style="font-size: 50px;color: #fff;float: center;margin-left: 10%;"></i>
</div>
<form action="<?php echo base_url('control/verifierPass') ?>" method="post">
    <h1 style="margin-top: 3%;"><u>Authentification</u></h1>
    <input type="text" value="" placeholder="Utilisateur" id="username" name="loginIM" />
    <i class="fas fa-"></i>
    <input type="password" value="" placeholder="Mot de passe" name="Password" id="password" />
    <i class="fa fa-user" onclick="myFunction()"></i>
     <div  style="margin-bottom: 10%;margin-left: 0%;width: 100%;">
        <select class="form-control" name="privi" style="width: 100%;">
          <option>---Privllège---</option>
          <option>Admin</option>
          <option>Personnel</option>
          </select>
     </div>
    <button type="submit" class="btn btn-flat cnx" style="margin-bottom: 2%;">Se connecter</button>
    <button class="btn btn-flat" style="width: 33%;">Annuler</button>
    &nbsp;&nbsp;Mot de passe oublié ?
    </form>
    <button ><a href="<?php echo base_url('control/accueil') ?>">Accueil</a></button>
</div>

PDF
</body>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style>
  body {
    background: url('<?php echo base_url();?>images/doc.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('http://i.imgur.com/fd8Lcso.png') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 10px solid #bb2739;
    margin: 0 auto;
    margin-top: 80px;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('<?php echo base_url();?>images/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('<?php echo base_url();?>images/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('<?php echo base_url();?>images/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('<?php echo base_url();?>images/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #bb2739;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>
<!-- jQuery -->
<script src="<?php echo base_url();?>documents/plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>