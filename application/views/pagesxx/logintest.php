
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Remember - Multipurpose bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="<?php echo base_url(); ?>remember/css/bootstrap.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>remember/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>remember/css/prettyPhoto.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>remember/css/style.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="<?php echo base_url(); ?>remember/color/default.css" rel="stylesheet" />

  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Remember
    Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<style type="text/css">
	body{
		background: url('<?php echo base_url();?>images/16.jpg') repeat;
		background-size: cover; 
	}
</style>
<body>

  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
                <li><a href="#">"Ny fianarana no lova tsara indrindra"</a></li>
              </ul>
            </div>
            <div class="span6">
              <ul class="social-network">  
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
             <h1><a href="index.html"><img style="border-radius: 52%;width: 15%;" src="<?php echo base_url();?>remember/img/menetp.jpg"> &nbsp;MENETP</a></h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section style="margin-top: 5%;margin-left: 35%;background-color: #434343;position: fixed;width: 20%;padding: 2%;">
    	<div class="card">
        <div class="card-header" style="margin-top: -68px; margin-left: 32%;">
        	<img width="80px" src="<?php echo base_url(); ?>images/Account-128.png">
        </div> 
        <br>
        <span style="margin-left: 80px;margin-top: 5px;color: #fff">Authentification</span>
        <hr width="100%;">
           <form method="post" action="#" id="myForm">
			<div class="row">
			<div class="span12 field form-group">
			<input type="text" name="matricule" placeholder="* Entrer votre N° matricule"  />
			 <i class="icon-user" style="color: #000; float: center; z-index: 100;margin-left: -23px; margin-top: -2px;"></i>
		    </div>
			<div class="span12 field form-group">
			<input type="password" name="matrcicule" id="password" placeholder="* Entre votre mot de passe"  />
			<a href="" class="lien-btn"><i style="color: #000; float: center; z-index: 100;margin-left: -23px; margin-top: -2px;" class="icon-eye-close" style="color: #777777" onclick="myFunction()"></i></a>
            </div>
			<div class="span12 field form-group">
            <select class="" name="privi_user" >
                    <option selected="selected">Admin</option>
                    <option>Personnel</option>
             </select>
			</div>
			</div>
    
     <div class="card-footer" style="margin-left: 20%;">
     	<button class="btn-pardefaut" type="reset">Annuler</button>&nbsp;&nbsp;
     	<button class="btn-pardefaut" type="button" id="addCnx" >Se connecter</button>
     </div>
      </form>
 </div>
</section>
   
<br><br>

    <footer>    

    </footer>
  </div>
 
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

$(document).ready(function(){
 alert('vonona aho');
});
</script>

  <!-- javascript
    ================================================== -->
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
<!-- Placed at the end of the document so the pages load faster -->

</html>
