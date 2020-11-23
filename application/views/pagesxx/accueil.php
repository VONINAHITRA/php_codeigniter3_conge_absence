
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Accueil </title>
		<meta name="description" content="Text Opening Sequence with CSS Animations" />
		<meta name="keywords" content="text, opening sequence, opening credits, css animations, typography, lettering.js" />
		<meta name="author" content="Calvyn" />
		<link rel="shortcut icon" style="border-radius: 25%;" href="<?php echo base_url('images/menetp.jpg') ?>"> 
		<!--link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/default.css') ?>" /-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/components.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/menus.css') ?>" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<script src="<?php echo base_url('assets/js/modernizr.custom.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/menut.js') ?>"></script>
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
		<style type="text/css">
			/* General Demo Style */
				@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700|Dosis:200,600);

				*, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
				body, html { font-size: 100%; padding: 0; margin: 0; height: 100%;}

				/* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
				.clearfix:before, .clearfix:after { content: " "; display: table; }
				.clearfix:after { clear: both; }

				.sos {
					font-family: 'Lato', Calibri, Arial, sans-serif;
					color: black;
					-webkit-background-size: cover;
  					-moz-background-size: cover;
  					-o-background-size: cover;
 					 background-size: cover;
				}

				a {
					color: #f0f0f0;
					text-decoration: none;
				}

				a:hover {
					color: #fff;
				}

				/* Header Style */
				.codrops-top {
					text-transform: uppercase;
					position: relative;
					z-index: 1000;
					font-size: 0.68em;
					border-bottom: 1px solid rgba(255,255,255,0.2);
					line-height: 2.2;
				}

				.codrops-top a {
					padding: 0 1em;
					letter-spacing: 0.1em;
					color: rgba(255,255,255,0.2);
					display: inline-block;
				}

				.codrops-top a:hover {
					color: rgba(255,255,255,0.9);
				}

				.codrops-top span.right {
					float: right;
				}

				.codrops-top span.right a {
					float: left;
					display: block;
				}
				.callout{
					opacity: 0.8;
				}
				.b1{
					opacity: 0;
				}
				a{
					color: white;
				}
				a:hover{
					
					text-decoration: none;
					opacity: 0.6;
					size: 14px;
				}
				img{
					border-radius: 50px;
				}
				span{
					color: #bb2739;
					opacity: 1;
					text-align: center;
				}
				span:hover{
					opacity: 0.5;
					size: 20px;
				}
				#letfinfos{

				}

				.ml9 {
  position: relative;
  font-weight: 200;
  font-size: 4em;
}

.ml9 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml9 .letter {
  transform-origin: 50% 100%;
  display: inline-block;
  line-height: 1em;
}
		</style>
	</head>
	<body onload="menu(6);"  onload="change();" class="hold-transition sidebar-mini  layout-navbar-fixed">

<nav class="main-header navbar navbar-expand navbar-white navbar-light barres" style="margin-left: -20%;">
    <!-- Left navbar links -->
    <ul class="navbar-nav" >

      <li class="nav-item d-none d-sm-inline-block">
      	
       <div class="ml9" style="margin-left: 150%;width: 150%;font-size: 27px;">
       	<span class="letters">GESTION DE CONGES ET DES ABSENCES</b>
       	</span>
       </div>
      </li>
    </ul>
    <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto" style="margin-right: 4%;color: #fff;">   
      <ul class="navbar-nav ml-auto" style="margin-right: 1.8%;">
   <div class="btn-group" style="background-color:#bb2939;color: #fff;">
                  <button type="button" class="btn btn-flat" style="background-color: #fff;color:#000;margin-top: -3%; "><i class="fas fa-power-off" style="color:#fff;"></i><?php echo $pseudo_user; ?>&nbsp;&nbsp;&nbsp;</button>
                    <button type="button" class="btn btn-flat dropdown-toggle" data-toggle="dropdown" style="background-color:#fff;color: #bb2939;">
                    <span class="caret" style="background-color:#bb2939;color: #fff;margin-top: 6%;"></span>
                    <span class="sr-only left">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="<?php echo base_url('control/liencomptePerso'); ?>" style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;"> <?php echo $email_user; ?></a>
                       <a class="dropdown-item" href="<?php echo base_url('control/logout');?>" style="background-color: #bb2839;color: #fff;margin-bottom: 0.5%;">Déconnexion</a>
                    </div>
      </div> 
      </ul> 
 </ul>
  </nav>
		<div class="container" style="position: fixed; margin-left: 7%; margin-top: -0.7%;">	
			<!-- Codrops top bar -->

			<div class="codrops-top clearfix">
				<button class="b1"> sdq</button><br><button class="b1"> sdq</button><br><button class="b1"> sdq</button><br><button class="b1"> sdq</button>
					<div id="menu"  style="margin-left:40%; ">
						<div id="centre" align="center" valign="middle"></div>
							<ul onmouseover="stopanim();" onmouseout="replayanim();">

							<li id="item1"><a href="<?php echo base_url('control/liencomptePerso'); ?>"> <img src="<?php echo(base_url('images/Account-128.png')) ?>" title="Compte d'urilisateur " width="100px" height="100px"/><br><span style="color: #000;font-size: 11px; margin-left: 3px;"><b> TESTER</b></span></a>

			                <li id="item3"><a href="<?php echo base_url('control/lienAutorisationPerso'); ?>" ><img src="<?php echo(base_url('images/summary-icon.png')) ?>" title="Autorisation d'absence" width="100px" height="100px"/><br><span style="color: #000;font-size: 11px;margin-left: -10px; ">Autorisation d'absence</span></a>

			              	<li id="item4"><a href="<?php echo base_url('control/lienPermissionPerso'); ?>" ><img src="<?php echo(base_url('images/images(1).png')) ?>" title="Permission d'absence" width="100px" height="100px"/><br><span style="color: #000;font-size: 11px; margin-left: -10px;">Permission d'absence</span></a>

							<li id="item5"><a href="<?php echo base_url('control/lienCongeAnnuelPerso'); ?>" ><img src="<?php echo(base_url('images/images-10.jpg')) ?>" title="Congé annuel" width="100px" height="100px"/><br><span style="color: #000;font-size: 11px; margin-left: -10px;">Congé annuel</span></a>
							
							<li id="item6"><a href="<?php echo base_url('control/lienpaternitePerso'); ?>" ><img src="<?php echo(base_url('images/images-1s.png')) ?>" title="Congé de paternité" width="100px" height="100px"/><br><span style="color: #000;font-size: 11px; margin-left: -10px;">Congé de paternité</span></a>

			                <li id="item2"><a href="<?php echo base_url('control/lienmaternitePerso'); ?>" ><img src="<?php echo(base_url('images/images-4.png')) ?>" title="Congé de maternité" width="100px" height="100px"/><br><span style="color: #000;font-size: 11px;margin-left: -10px; ">Congé de Maternité</span></a>
							
							</ul>
					</div>
			</div>
			

			<!--div id="menu"  style="margin-left:40%; margin-top:20%">
			<div id="centre" align="center" valign="middle"></div>
				<ul onmouseover="stopanim();" onmouseout="replayanim();">
					<li id="item1"><img src="Argentina.gif" width="100px" height="100px"/><br>Argentine</li>
					<li id="item2"><img src="Brazil.gif" width="100px" height="100px"/><br>Brésil</li>
					<li id="item3"><img src="Cameroon.gif" width="100px" height="100px"/><br>Cameroun</li>
					<li id="item4"><img src="Canada.gif" width="100px" height="100px"/><br>Canada</li>
					<li id="item5"><img src="France.gif" width="100px" height="100px"/><br>France</li>
					<li id="item6"><img src="Chile.gif" width="100px" height="100px"/><br>Chili</li>
				</ul>
		</div-->

		</div><!-- /container -->
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script-->
		

	</body>
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.lettering.js') ?>"></script>
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>documents/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>documents/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url();?>documents/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>style/lib/anime.min.js"></script>
<script src="<?php echo base_url();?>style/lib/anime.es.js"></script>
</html>
<script type="text/javascript">
	$(function() {
			var body = $('body');
			var backgrounds = new Array(
			"url(<?php echo(base_url())?>images/bga.jpg)",
			"url(<?php echo(base_url())?>images/doc.jpg)",
		    "url(<?php echo(base_url())?>images/ballpen-close-up-desk-955389.jpg)",
		    "url(<?php echo(base_url())?>images/bind-blank-composition-302440.jpg)",
		    "url(<?php echo(base_url())?>images/blur-close-up-commerce-261621.jpg)"
			);
			var current = 0;
			function nextBackground() {
			body.css({
			'background':backgrounds[current = ++current % backgrounds.length]+' no-repeat center center fixed',
			'color':'white',
			'-webkit-background-size': 'cover',
  					'-moz-background-size': 'cover',
  					'-o-background-size': 'cover',
 					 'background-size': 'cover',
 					 '-webkit-transition': 'background-image 4s ease-in-out',
						'transition': 'background-image 4s ease-in-out'
			});
			setTimeout(nextBackground, 9000);
			}
			setTimeout(nextBackground, 9000);
			body.css({
				'background':backgrounds[0]+' no-repeat center center fixed',
				'color':'White',
				'-webkit-background-size': 'cover',
  					'-moz-background-size': 'cover',
  					'-o-background-size': 'cover',
 					 'background-size': 'cover',
 					 '-webkit-transition': 'background-image 4s ease-in-out',
						'transition': 'background-image 4s ease-in-out'
			});
		});

</script>
<script type="text/javascript">
	// Wrap every letter in a span
var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0.7,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
<script language="javascript">
        tab = new Array;
        tab[0]="red";
        tab[1]="red";
        tab[2]="#ffffff";
var init=0;
function change(){
if(init==3)init=0;
if(init<3) {  document.getElementById("couleur").style.color=tab[init];init++;
           } 
setTimeout("change()",500); 
           }
</script>
