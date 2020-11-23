<?php 

class control extends CI_Controller
{
function __construct()
{

parent::__construct();
$this->load->model('model','m');
$this->load->model('model');
$this->load->helper('url');
$this->load->library('export_pdf');
}

public function accesAdmin(){
$im = $this->input->post('im');
$pwd = $this->input->post('pwd');
$privi = $this->input->post('privi');
 $this->load->view("pages/adminAccueil");
/*
if($privi =="Admin" || $privi == "admin"){
	$validate  = $this->model->login_admin($im,$pwd,$privi);
	 if($validate->num_rows() > 0){
     $this->load->view("pages/adminAccueil");
	 }else{
	echo("Mot de passe incorrect");
	 }
}else{
	echo("Vous n'est pas Admin");
}
*/
}
//
public function imprimer($id){
$dates = date("Y");
$data = $this->model->pdfCongeAnnuel($id);
echo json_encode($data);
//$this->load->view('pages/report_pdf');
}

public function imprimerAutorisation($id){
$data["data"] = $this->model->pdfAutorisation($id);
$this->load->view('pages/autorisation_pdf',$data);
}

public function imprimerpermission($id){
$data["data"] = $this->model->pdfPermission($id);
$this->load->view('pages/permission_pdf',$data);
}

public function pdfCongeAnnuel($id){
$data["data"] = $this->model->pdfCongeAnnuel($id);
$this->load->view('pages/conge_pdf',$data);
}

public function pdfCongePaternite($id){
$data["data"] = $this->model->pdfCongePaternite($id);
$this->load->view('pages/paternite_pdf',$data);
}
public function pdfCongeMaternite($id){
$data["data"] = $this->model->pdfCongeMaternite($id);
$this->load->view('pages/maternite_pdf',$data);
}

public function pdfPersonnel(){
$data["data"] = $this->model->pdfPersonnel();
$this->load->view('pages/personnel_pdf',$data);
}

public function changeDroit(){
	$this->load->view('pages/persoToadmin');
}

public function changeDroitPerso(){
	$this->load->view('pages/persoAccueil');
}

public function index(){
$this->load->library('session');
if($this->session->has_userdata('user')){
$this->load->view('pages/persoAccueil');
}else{
$this->load->view('pages/authentification');
}
}

public function clear_all_cache()
{
$CI = &get_instance();
$path = $CI->config->item('cache_path');
$cache_path = ($path == '') ? APPPATH.'cache/' : $path;
$handle = opendir($cache_path);
while (($file = readdir($handle))!== FALSE) 
{

if ($file != '.htaccess' && $file != 'index.html')
{
@unlink($cache_path.'/'.$file);
}
}
closedir($handle);
}

public function selectResteAll($im){
if($im) { 
$dates = date("Y");
$data = $this->model->selectResteAll($im, $dates);
echo json_encode($data);
}
}

public function selectResteSomme($im){
if($im) { 
$dates = date("Y");
$data = $this->model->selectResteSomme($im);
$data   = $data->row_array();
$nbjrs_congedroit = $data['nbjrs_congedroit'];
echo json_encode($data);
}
}
public function authentificationxxx(){
$matricule =    $this->input->post('matricule');
$motdepasse =   $this->input->post('motdepasse');
$this->load->model('model');
$validate  = $this->model->login_valider($matricule,$motdepasse);
if($validate){
$this->load->view('pages/persoAccueil');
}else{
$this->load->view('pages/authentification');
}
}

public function authentification(){

$matricule =    $this->input->post('matricule');
$motdepasse =   $this->input->post('motdepasse');
$privilige =    $this->input->post('privilege');
$dates = date("Y");
$this->load->model('model');
$validate  = $this->model->login_valider($matricule,$motdepasse);
$validate2 = $this->model->login_valider2($matricule);
$validate3 = $this->model->login_valider3($matricule);
$validate4 = $this->model->login_valider4($matricule);
$validate5 = $this->model->login_valider5($matricule,$dates);
$validate6 = $this->model->login_valider6($matricule);

echo ($validate);
if($validate->num_rows() > 0){
$data   = $validate->row_array();
$data2  = $validate2->row_array();
$data3  = $validate3->row_array();
$data4  = $validate4->row_array();
$data5  = $validate5->row_array();
$data6  = $validate6->row_array();
$nomPre_perso =  $data2['nomPre_perso'];
$nbjrs_congedroit = $data3['nbjrs_congedroit'];
$dtdec_conge = $data4['dtdec_conge'];
$auto_congedroit = $data5['auto_congedroit'];
$permi_congedroit = $data5['permi_congedroit'];
$dtdec_conge = $data4['dtdec_conge'];
$im_user  = $data['im_user'];
$privi_user  = $data['privi_user'];
$id_user =  $data['id_user'];
$pseudo_user = $data['pseudo_user'];
$email_user = $data['email_user'];
$im_perso = $data6['im_perso'];
$numPhone_user = $data['numPhone_user'];
$avatar_user ='<img style="width:37px;border-color: solid #fff; border-radius: 90%;" src= "'.base_url().'avatar/'.$data['avatar_user']. '">
';
$sesdata = array(
'im_user'  => $im_user,
'id_user'     => $id_user,
'privi_user'     => $privi_user,
'pseudo_user'     => $pseudo_user,
'email_user'     => $email_user,
'avatar_user'     =>$avatar_user,
'numPhone_user'     =>$numPhone_user,
'nomPre_perso'   =>$nomPre_perso,
'nbjrs_congedroit'  =>$nbjrs_congedroit,
'dtdec_conge'  =>$dtdec_conge,
'permi_congedroit'  =>$permi_congedroit,
'auto_congedroit'  =>$auto_congedroit,
'im_perso'      => $im_perso,
'logged_in' => TRUE
);
$this->session->set_userdata('user',$sesdata);
redirect(base_url('control/accueil'));

}else{
//$this->load->view('pages/authentification');
redirect(base_url('control/index'));
}
}

public function accueil(){
$annee = Date("Y");
$this->load->model('model');
$update_all = $this->model->update_all($annee);
$this->load->library('session');
if($this->session->has_userdata('user')){
$this->load->view('pages/persoAccueil');
}else{
redirect(base_url('/'));
}
} 

public function selectNotificationCongeAnnuel(){
$dates =  date("Y");
$data1  = $this->model->selectNotificationCongeAnnuel();
$data2   = $data1->row_array();
$nb =  $data2['nb_conge'];
echo json_encode($nb);
}

public function selectNotificationAuto(){
$dates =  date("Y");
$data1  = $this->model->selectNotificationAuto();
$data2   = $data1->row_array();
$nb =  $data2['nb_auto'];
echo json_encode($nb);
}

public function selectNotificationPermi(){
$dates =  date("Y");
$data1  = $this->model->selectNotificationPermi();
$data2   = $data1->row_array();
$nb =  $data2['nb_permi'];
echo json_encode($nb);
}

public function selectNotificationMatern(){
$dates =  date("Y");
$data1  = $this->model->selectNotificationMatern();
$data2   = $data1->row_array();
$nb =  $data2['nb_matern'];
echo json_encode($nb);
}

public function selectNotificationPatern(){
$dates =  date("Y");
$data1  = $this->model->selectNotificationPatern();
$data2   = $data1->row_array();
$nb =  $data2['nb_patern'];
echo json_encode($nb);
}

public function accueil2(){
		$annee = Date("Y");
$this->load->model('model');
$update_all = $this->model->update_all($annee);
$this->load->library('session');
if($this->session->userdata('user')){
$this->load->view('pages/adminAccueil');
}else{
redirect(base_url('/'));
}
}

public function logout()
{
$this->session->unset_userdata($user);
$this->session->sess_destroy();
redirect(base_url('control/index'));
}

/*--------------------------------------Côté Admin--------------------------------------*/
/* Controleur Login  */

public function home(){
$CongeCours["CongeCours"] = $this->m->congeListe();
$this->load->view("pages/adminHome", $CongeCours);
}

public function listeCongeAnnulerEncours(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongeAnnulerEncours();
foreach ($data as $key => $value) {
$buttons ='

<style>

.icon-info-sign{
color: #1b59ff;
}

.icon-check{
color: #00780d;
}

.icon-remove{
color: #ff0000;
}

</style>


<div class="btn-group">
<a type="button" style="background-color: ;color: #fff;margin-bottom: 0.5%;" onclick="rejeterCongexx('.$value['id_conge'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-info-sign" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="background-color: ;color: #fff;margin-bottom: 0.5%;" onclick="validerConge('.$value['id_conge'].')" data-toggle="modal" data-target="#confirmeModalMod">
<button type="button" class="btn btn-default">
<i class="icon-check" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="background-color: ;color: #fff;margin-bottom: 0.5%;"  onclick="rejeterConge('.$value['id_conge'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-remove" style="font-size: 20px"></i>
</button>
</a>
</div>  
';
$result['data'][$key] = array(
$value['numdec_conge'],
$value['im_conge'],
$value['titre_conge'],
$value['motif_conge'],
$value['nbjrs_conge'],
$value['lieu_conge'],
$value['dtdec_conge'],
$value['dtdep_conge'],
$value['dtrtr_conge'],
$buttons
);

}
echo json_encode($result);
}
public function listePermissionEncours(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listePermissionEncours();
foreach ($data as $key => $value) {
$buttons ='

<style>
.icon-info-sign{
color: #0067c3;
}
.fa-info-circle:hover{
color: #368df2;
}

.icon-check{
color: #009729;
}
.fa-times-circle:hover{
color: #f60000;
}

.icon-remove{
color: #ff0000;
}
.fa-check-circle:hover{
color:#179841;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="rejeterCongexx('.$value['id_permi'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-info-sign" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="validerPermirisation('.$value['id_permi'].')" data-toggle="modal" data-target="#permiValiderConfirme">
<button type="button" class="btn btn-default">
<i class="icon-check" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="rejeterPermirisation('.$value['id_permi'].')" data-toggle="modal" data-target="#confirmeRejeter">
<button type="button" class="btn btn-default">
<i class="icon-remove" style="font-size: 20px"></i>
</button>
</a>	
</div>
	
';

$result['data'][$key] = array(
$value['im_permi'],
$value['annee_permi'],
$value['motif_permi'],
$value['nbjr_permi'],
$value['lieu_permi'],
$value['dtpermi_permi'],
$value['dtdprt_permi'],
$value['dtdrt_permi'],
$buttons
);

}
echo json_encode($result);
}

public function listeAutorisationEncours(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeAutorisationEncours();
foreach ($data as $key => $value) {
$buttons ='

<style>
.icon-info-sign{
color: #0067c3;
}
.fa-info-circle:hover{
color: #368df2;
}

.icon-check{
color: #009729;
}
.fa-times-circle:hover{
color: #f60000;
}

.icon-remove{
color: #ff0000;
}
.fa-check-circle:hover{
color:#179841;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="rejeterCongexx('.$value['id_auto'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-info-sign" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="validerAutorisation('.$value['id_auto'].')" data-toggle="modal" data-target="#autoValiderConfirme">
<button type="button" class="btn btn-default">
<i class="icon-check" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="rejeterAutorisation('.$value['id_auto'].')" data-toggle="modal" data-target="#confirmeRejeter">
<button type="button" class="btn btn-default">
<i class="icon-remove" style="font-size: 20px"></i>
</button>
</a>	
</div>
	
';

$result['data'][$key] = array(
$value['im_auto'],
$value['annee_auto'],
$value['motif_auto'],
$value['nbjr_auto'],
$value['lieu_auto'],
$value['dtauto_auto'],
$value['dtdprt_auto'],
$value['dtdrt_auto'],
$buttons
);

}
echo json_encode($result);
}

public function listePermissionValider(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listePermissionValider();

foreach ($data as $key => $value) {
$buttons ='

<style>
.icon-download-alt{
color: #1b59ff;
}
.fa-info-circle:hover{
color: #368df2;
}

.icon-check{
color: #009729;
}
.fa-times-circle:hover{
color: #f60000;
}

.icon-remove{
color: #ff0000;
}
.fa-check-circle:hover{
color:#179841;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="validerConge('.$value['id_permi'].')" data-toggle="modal" data-target="#confirmeModalMod">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="rejeterConge('.$value['id_permi'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-remove" style="font-size: 20px"></i>
</button>
</a>
</div>
';
$result['data'][$key] = array(
$value['im_permi'],
$value['annee_permi'],
$value['motif_permi'],
$value['nbjr_permi'],
$value['lieu_permi'],
$value['dtpermi_permi'],
$value['dtdprt_permi'],
$value['dtdrt_permi'],
$buttons
);

}
echo json_encode($result);
}

public function listeAutorisationValider(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeAutorisationValider();

foreach ($data as $key => $value) {
$buttons ='

<style>
.icon-download-alt{
color: #1b59ff;
}
.fa-info-circle:hover{
color: #368df2;
}

.icon-check{
color: #009729;
}
.fa-times-circle:hover{
color: #f60000;
}

.icon-remove{
color: #ff0000;
}
.fa-check-circle:hover{
color:#179841;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="validerConge('.$value['id_auto'].')" data-toggle="modal" data-target="#confirmeModalMod">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="rejeterConge('.$value['id_auto'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-remove" style="font-size: 20px"></i>
</button>
</a>
</div>
';
$result['data'][$key] = array(
$value['im_auto'],
$value['annee_auto'],
$value['motif_auto'],
$value['nbjr_auto'],
$value['lieu_auto'],
$value['dtauto_auto'],
$value['dtdprt_auto'],
$value['dtdrt_auto'],
$buttons
);

}
echo json_encode($result);
}

public function listeCongeAnnulerValider(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongeAnnulerValider();
foreach ($data as $key => $value) {
$buttons ='

<style>
.icon-download-alt{
color: #1b59ff;
}

.icon-trash{
color: #ff0000;
}

</style>
<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="imprimerConge('.$value['id_conge'].');">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px"></i>
</button>
</a>

<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="SupCongeValider('.$value['id_conge'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>	
</div>
</div> 
</ul>    
';
$result['data'][$key] = array(
$value['numdec_conge'],
$value['im_conge'],
$value['titre_conge'],
$value['motif_conge'],
$value['nbjrs_conge'],
$value['lieu_conge'],
$value['dtdec_conge'],
$value['dtdep_conge'],
$value['dtrtr_conge'],
$buttons
);
}
echo json_encode($result);
}

public function listePermissionRejeter(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listePermissionRejeter();
foreach ($data as $key => $value) {
$buttons ='
<style>
.fa-print{
color: #999a90;
}
.fa-print:hover{
color: #368df2;
}

.icon-trash{
color: #ff0000;
}
.fa-trash:hover{
color: #f60000;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="SupCongeValider('.$value['id_permi'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>
</div>  
';
$result['data'][$key] = array(
$value['im_permi'],
$value['annee_permi'],
$value['motif_permi'],
$value['nbjr_permi'],
$value['lieu_permi'],
$value['dtpermi_permi'],
$value['dtdprt_permi'],
$value['dtdrt_permi'],
$buttons
);
}
echo json_encode($result);
}


public function listeAutorisationRejeter(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeAutorisationRejeter();
foreach ($data as $key => $value) {
$buttons ='
<style>
.fa-print{
color: #999a90;
}
.fa-print:hover{
color: #368df2;
}

.icon-trash{
color: #ff0000;
}
.fa-trash:hover{
color: #f60000;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="SupCongeValider('.$value['id_auto'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>
</div>  
';
$result['data'][$key] = array(
$value['im_auto'],
$value['annee_auto'],
$value['motif_auto'],
$value['nbjr_auto'],
$value['lieu_auto'],
$value['dtauto_auto'],
$value['dtdprt_auto'],
$value['dtdrt_auto'],
$buttons
);
}
echo json_encode($result);
}

public function listeCongePaterniteValider(){

$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongePaterniteValider();
foreach ($data as $key => $value) {
$buttons ='
<style>
.icon-download-alt{
color: #1b59ff;
}


.icon-trash{
color: #ff0000;
}


</style>


<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;" onclick="imprimerCongePaternitePerso('.$value['id_patern'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" class="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="SupCongeValider('.$value['id_patern'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-trash" class="font-size: 20px"></i>
</button>
</a>
</div>    
';
$result['data'][$key] = array(
$value['im_patern'],
$value['annee_patern'],
$value['nbjrs_patern'],
$value['lieu_patern'],
$value['dtpat_patern'],
$value['dtdep_patern'],
$value['dtdrt_patern'],
$buttons
);
}
echo json_encode($result);
}

public function listeCongeMaterniteValider(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongeMaterniteValider();
foreach ($data as $key => $value) {
$buttons ='
<style>
.icon-download-alt{
color: #1b59ff;
}
.fa-print:hover{
color: #368df2;
}

.icon-trash{
color: #ff0000;
}
.fa-trash:hover{
color: #f60000;
}
</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;" onclick="imprimerCongeMaternitePerso('.$value['id_matern'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="SupCongeValider('.$value['id_matern'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>
</div>   
';
$result['data'][$key] = array(
$value['im_matern'],
$value['annee_matern'],
$value['nbjrs_matern'],
$value['lieu_matern'],
$value['dtmat_matern'],
$value['dtdep_matern'],
$value['dtdrt_matern'],
$buttons
);
}
echo json_encode($result);
}

public function listeCongePaterniteRejeter(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongePaterniteRejeter();

foreach ($data as $key => $value) {
$buttons ='

<style>
.icon-download-alt{
color: #1b59ff;
}
.fa-print:hover{
color: #368df2;
}

.icon-trash{
color: #ff0000;
}
.fa-trash:hover{
color: #f60000;
}

</style>
<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="SupCongeValider('.$value['id_patern'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-trash" class="font-size: 20px"></i>
</button>
</a>
</div>    
';
$result['data'][$key] = array(
$value['im_patern'],
$value['annee_patern'],
$value['nbjrs_patern'],
$value['lieu_patern'],
$value['dtpat_patern'],
$value['dtdep_patern'],
$value['dtdrt_patern'],
$buttons
);
}
echo json_encode($result);
}

public function listeCongeAnnulerRejeter(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongeAnnulerRejeter();
foreach ($data as $key => $value) {
$buttons ='
<style>

.icon-trash{
color: #ff0000;
}
.fa-trash:hover{
color: #f60000;
}
</style>
<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="SupCongeValider('.$value['id_conge'].')" data-toggle="modal" data-target="#confirmeSupValider">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>	
</div>    
';
$result['data'][$key] = array(
$value['numdec_conge'],
$value['im_conge'],
$value['titre_conge'],
$value['motif_conge'],
$value['nbjrs_conge'],
$value['lieu_conge'],
$value['dtdec_conge'],
$value['dtdep_conge'],
$value['dtrtr_conge'],
$buttons
);
}
echo json_encode($result);
}

public function homePerso(){
$this->load->model('model');
$Conge["Conge"] = $this->model->listeCongePerso();
$this->load->view("pages/persoConge", $Conge);
}

public function verifierPass(){
$this->load->model('model');
$privi = $this->input->post('privi');
$pwd = $this->input->post('Password');
$im = $this->input->post('loginIM');
if($privi=='Admin'){
$this->load->model('model');
if($login_id = $this->model->loginAdminVerifier($im,$privi,$pwd)){
foreach ($login_id as $val) {
$detail  = array('nom_user' =>$val['nom_user'] ,
'im_user' => $val['im_user']);
}
$this->session->set_userdata("current_user",$detail);
return redirect(base_url('control/home'));
}else{
return redirect(base_url('control/index'));
}
}else{
$im = $this->input->post('loginIM');
$privi = 'Personnel';
$pwd = $this->input->post('Password');
$this->load->model('model');
$login_id = $this->model->loginUserVerifier($im,$privi,$pwd);
if($login_id){
$user  = array('nom_user' =>$im ,
'im_user' =>$login_id,
'privi_user' =>$pivi_id,
'logged_in' => TRUE );
return redirect(base_url('control/homePerso'));
}else{
return redirect(base_url('control/index'));
}
}
}

/* Controleur Congé annule */
public function congeAnnuel(){
$dataConge["dataConge"] = $this->m->congeListe();
$this->load->view("vueCongeAnnuel", $dataConge);
}

public function getAllConge(){
$this->load->model('model');
$congeListe = $this->model->congeListe();
if(count($congeListe) > 0){
$this->load->view('vueCongeAnnuel', $congeListe);
}
}

public function congePaterniteValider(){
$this->load->model('model');
$result = array('data' => array());
$id = $this->input->post('id_patern');
$msg['success'] = false;
$validation = $this->model->congePaterniteValider($id);
if($validation){
$msg['success'] =true;
}else{
$msg['success'] =false;
}
echo json_encode($msg);
}

public function demandeAutorisationValider(){
$this->load->model('model');
$result = array('data' => array());
$id = $this->input->post('editId_autoV');
$im = $this->input->post('editIm_autoV');
$annee = $this->input->post('editAnnee_autoV');
$nbjr = $this->input->post('editnbjrs_autoV');
$msg['success'] = false;
$validation = $this->model->demandeAutorisationValider($id);
$selectSuffitauto = (int) $this->model->selectSuffitauto($im,$annee);
$reste = $selectSuffitauto - $nbjr;
$upate_Auto = $this->model->updateAuto($im,$annee,$reste);
if($validation){
$msg['success'] =true;
}else{
$msg['success'] =false;
}
echo json_encode($msg);
}

public function demandeAutorisationRejeter(){
$this->load->model('model');
$result = array('data' => array());
$id = $this->input->post('editid_autoR');
$msg['success'] = false;
$validation = $this->model->demandeAutorisationRejeter($id);

if($validation){
$msg['success'] =true;
}else{
$msg['success'] =false;
}
echo json_encode($msg);
}

public function congeMaterniteValider(){
$this->load->model('model');
$result = array('data' => array());
$id = $this->input->post('id_matern');
$msg['success'] = false;
$validation = $this->model->congeMaterniteValider($id);
if($validation){
$msg['success'] =true;
}else{
$msg['success'] =false;
}
echo json_encode($msg);
}

public function congePaterniteRejeter(){
$this->load->model('model');
$result = array('data' => array());
$id = $this->input->post('id_patern');
$msg['success'] = false;
$validation = $this->model->congePaterniteRejeter($id);
if($validation){
$msg['success'] =true;
}else{
$msg['success'] =false;
}
echo json_encode($msg);
}

public function congeMaterniteRejeter(){
$this->load->model('model');
$result = array('data' => array());
$id = $this->input->post('id_matern');
$msg['success'] = false;
$validation = $this->model->congeMaterniteRejeter($id);
if($validation){
$msg['success'] =true;
}else{
$msg['success'] =false;
}
echo json_encode($msg);
}

public function congeValider(){
$this->load->model('model');
$result  = array('data' => array());
$id = $this->input->post("id_conge");
$b = $this->input->post("im_conge");
$c = $this->input->post('annee_conge');
$e = $this->input->post('nbjrs_conge');
$msg['success'] = false;
$selectSuffit = (int) $this->model->selectSuffit($b,$c);
if($comparer = $e <= $selectSuffit){
$conge_valider = $this->model->congeValider($id);
$moisConge = (int) $this->model->moisConge($b,$c,$e);
$resteDecision = $this->model->resteDecision($b,$c,$moisConge);
$msg['success'] = true;
}else{
$an = $c + 1;
$zero = 0;
$aff = $selectSuffit - $e;
$anprec = (int) $this->model->selectDecPrec($b,$an);
$updateDec = $anprec + $aff;
$conge_valider = $this->model->congeValider($id);
$updateDroitActuel = $this->model->updateDroitActuel($b,$c,$zero);
$updateDroitPrecedent = $this->model->updateDroitPrecedent($b,$an,$updateDec);
$msg['success'] = true;
}
echo json_encode($msg);
}

public function autorisationValider(){
$this->load->model('model');
$result  = array('data' => array());
$id = $this->input->post("id_auto");
$b = $this->input->post("im_auto");
$c = $this->input->post('annee_auto');
$e = $this->input->post('nbjrs_auto');
$msg['success'] = false;
echo json_encode($msg);
}

public function congeRejeter(){
$this->load->model('model');
$result  = array('data' => array());
$id_conge = $this->input->post("id_congeR");
$conge_rejeter = $this->model->congeRejeter($id_conge);
$msg['success'] = false;
if($conge_rejeter){
$msg['success'] = true;
}
echo json_encode($msg);
}


public function deletedemandeCongePerso(){
if($id_conge) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$removeMember = $this->model->deletedemandeCongePerso($id_conge);
if($removeMember === true) {
$validator['success'] = true;
}
else {
$validator['success'] = true;
}
echo json_encode($validator);
}
} 

public function annulerDemandeEncoursPerso($id_conge= null){
if($id_conge) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$annuler = $this->model->annulerDemandeEncoursPerso($id_conge);
if($annuler === true) {
$validator['success'] = true;
}
else {
$validator['success'] = flse;
}
echo json_encode($validator);
}
}

public function annulerAutoEncours($id_auto= null){
if($id_auto) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$annuler = $this->model->annulerAutoEncours($id_auto);
if($annuler === true) {
$validator['success'] = true;
}
else {
$validator['success'] = false;
}
echo json_encode($validator);
}
}

public function annulerPermiEncours($id_permi= null){
if($id_permi) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$annuler = $this->model->annulerPermiEncours($id_permi);
if($annuler === true) {
$validator['success'] = true;
}
else {
$validator['success'] = false;
}
echo json_encode($validator);
}
}

public function annulerDemandeEncoursPatern($id_patern = null){
if($id_patern) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$annuler = $this->model->annulerDemandeEncoursPatern($id_patern);
if($annuler === true) {
$validator['success'] = true;
}
else {
$validator['success'] = true;
}
echo json_encode($validator);
}
}

public function annulerDemandeEncoursMatern($id_matern = null){
if($id_matern) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$annuler = $this->model->annulerDemandeEncoursMatern($id_matern);
if($annuler === true) {
$validator['success'] = true;
}
else {
$validator['success'] = true;
}
echo json_encode($validator);
}
}

public function deleteCongeV(){
$im = $this->input->post("im_conge");
$titre = $this->input->post("titre_conge");
$dtdec = $this->input->post("dtdec_conge");
$delete = $this->m->deleteCongeV($im,$titre,$dtdec);
if($delete){ 
return redirect(base_url('control/home'));
}else{  echo "Efa lany zany";
}
}

public function deleteCongeR(){
$im = $this->input->post("im_conge");
$titre = $this->input->post("titre_conge");
$dtdc = $this->input->post('dtdec_conge');
$delete = $this->m->deleteCongeR($im,$titre,$dtdc);
if($delete){ 
return redirect(base_url('control/home'));
}else{  echo "Efa lany zany";
}
}

public function congeRejeterxxx(){
$im = $this->input->post('im_conge');
$an = $this->input->post('titre_conge');
$dt = $this->input->post('dtdec_conge');
$rejeter = $this->m->congeRejeter($im,$an,$dt);
return redirect(base_url('control/home'));	
}

public function addCongeAnnuels(){
$a = $this->input->post('num_dec');
$b = $this->input->post('im');
$c = $this->input->post('titre');
$d = $this->input->post('motif');
$e = $this->input->post('nbjrs');
$f = $this->input->post('lieu');
$g = $this->input->post('dtdc');
$h = $this->input->post('dtdt');
$i = $this->input->post('dtrt');
if( $val1 = $sel =  (int) $this->m->selectDroit($im,$titre) !=0){
$j = "En cours";
$this->load->model('model');
$add_congeA = $this->model->addcongeA($a, $b,$c,$d,$e,$f,$g,$h,$i,$j);
if($add_congeA=="TRUE"){
return redirect(base_url('control/home'));
}
}
}

public function congeConsulter(){
$im = $this->input->post('im_conge');
$this->load->model('model');
$consult['consult'] = $this->model->consulterReste($im);
$this->load->view('pages/adminConsultation',$consult);
}

public function addPersonnel(){
$a = $this->input->post('im_perso');
$b = $this->input->post('nom_perso');
$b1 = $this->input->post('sexe_perso');
$c = $this->input->post('corps_perso');
$d = $this->input->post('grade_perso');
$e = $this->input->post('dir_perso');
$f = $this->input->post('lieuserv_perso');
$g = $this->input->post('budget_perso');
$h = $this->input->post('cbudget_perso');
$msg['success'] = array('success' => false, 'messages' => array());
$this->load->model('model');
$add_perso = $this->model->addperso($a,$b,$b1,$c,$d,$e,$f,$g,$h);
if($add_perso==true){
$msg['success'] = true;
$msg['messages'] = "Le nouveau personnel a été bien ajouté dans la liste";;
}else{
$msg['success'] = false;
$msg['messages'] = "Cet numéro matricule est existe dejà.";
}
echo json_encode($msg);
}

public function selectPersonnelEdit($id_perso) 
{
if($id_perso) {
$data = $this->model->selectPersonnelEdit($id_perso);
echo json_encode($data);
}
}

public function selectPaterniteEdit($id_patern) 
{
if($id_patern) {
$data = $this->model->selectPaterniteEdit($id_patern);
echo json_encode($data);
}
}

public function selectMaterniteEdit($id_matern) 
{
if($id_matern) {
$data = $this->model->selectMaterniteEdit($id_matern);
echo json_encode($data);
}
}

public function selectCongeEncoursEdit($id_conge) 
{
if($id_conge) {
$data = $this->model->selectCongeEncoursEdit($id_conge);
echo json_encode($data);
}
}

public function selectAutoEncoursEdit($id_auto) 
{
if($id_auto) {
$data = $this->model->selectAutoEncoursEdit($id_auto);
echo json_encode($data);
}
}

public function selectPermiEncoursEdit($id_permi) 
{
if($id_permi) {
$data = $this->model->selectPermiEncoursEdit($id_permi);
echo json_encode($data);
}
}

public function selectCongeValider($id_conge) 
{
if($id_conge) {
$data = $this->model->selectCongeValider($id_conge);
echo json_encode($data);
}
}

public function selectAutoValider($id_auto) 
{
if($id_auto) {
$data = $this->model->selectAutoValider($id_auto);
echo json_encode($data);
}
}

public function selectAutoRejeter($id_auto) 
{
if($id_auto) {
$data = $this->model->selectAutoValider($id_auto);
echo json_encode($data);
}
}

public function selectPaterniteValider($id_patern) 
{
if($id_patern) {
$data = $this->model->selectPaterniteValider($id_patern);
echo json_encode($data);
}
}

public function selectMaterniteValider($id_matern) 
{
if($id_matern) {
$data = $this->model->selectMaterniteValider($id_matern);
echo json_encode($data);
}
}

public function selectPaterniteRejeter($id_patern) 
{
if($id_patern) {
$data = $this->model->selectPaterniteRejeter($id_patern);
echo json_encode($data);
}
}

public function selectMaterniteRejeter($id_matern) 
{
if($id_matern) {
$data = $this->model->selectMaterniteRejeter($id_matern);
echo json_encode($data);
}
}

public function editPersonnel() 
{       $id = $this->input->post('id_perso');
$a = $this->input->post('im_perso');
$b = $this->input->post('nom_perso');
$b1 = $this->input->post('sexe_perso');
$c = $this->input->post('corps_perso');
$d = $this->input->post('grade_perso');
$e = $this->input->post('dir_perso');
$f = $this->input->post('lieuserv_perso');
$g = $this->input->post('budget_perso');
$h = $this->input->post('cbudget_perso');
$this->load->model('model');
$edit = $this->model->editPersonnel($id,$a,$b,$b1,$c,$d,$e,$f,$g,$h);
$msg['success'] = false;
if($edit){
$msg['success'] = true;
}
echo json_encode($msg);
}

public function editPaternitePerso() 
{   

$this->load->model('model');
$id = $this->input->post('id_patern');
$im  = $this->input->post('im_patern');
$lieu  = $this->input->post('lieu_patern');
$c  = $this->input->post('editdtdeped_patern');
$rt = 15;
$dtpat = date("d-m-Y");
$dtdep = date("d-m-Y",strtotime($c));
$dtrtr = date("d-m-Y",strtotime($c.'+'.$rt.'days'));
$encours ="En cours";
$edit = $this->model->editPaternitePerso($id,$dtpat,$dtdep,$dtrtr,$lieu,$encours);
$msg['success'] = false;
if($edit){
$msg['success'] = true;
}
echo json_encode($msg);
}

public function editAutorisationPerso() 
{   
$this->load->model('model'); 
$msg['success'] = array('success' => false, 'messages' => array());
$id = $this->input->post('editid_auto');
$im  = $this->input->post('editim_auto');
$lieu  = $this->input->post('editlieu_auto');
$motif  = $this->input->post('editmotif_auto');
$nbjr  = $this->input->post('editnbjr_auto');
$c  = $this->input->post('editdtdp_auto');
$dtauto = date("d-m-Y");
$dtdep = date("d-m-Y",strtotime($c));
$dtrtr = date("d-m-Y",strtotime($c.'+'.$nbjr.'days'));
$encours ="En cours";
$edit = $this->model->editAutorisationPerso($id,$dtauto,$nbjr,$dtdep,$dtrtr,$lieu,$motif,$encours);
if($edit){
$msg['success'] = true;
$msg['messages'] = "Votre demande a été bien envoyé";
}else{
$msg['success'] = false;
$msg['messages'] = "Erreur lors de traitement de données, Veuillez réssayer SVP.";
}
echo json_encode($msg);
}

public function editPermissionPerso() 
{   

$this->load->model('model'); 
$msg['success'] = array('success' => false, 'messages' => array());
$id = $this->input->post('editid_permi');
$im  = $this->input->post('editim_permi');
$lieu  = $this->input->post('editlieu_permi');
$motif  = $this->input->post('editmotif_permi');
$nbjr  = $this->input->post('editnbjr_permi');
$c  = $this->input->post('editdtdp_permi');
$dtpermi = date("d-m-Y");
$dtdep = date("d-m-Y",strtotime($c));
$dtrtr = date("d-m-Y",strtotime($c.'+'.$nbjr.'days'));
$encours ="En cours";
$edit = $this->model->editPermissionPerso($id,$dtpermi,$nbjr,$dtdep,$dtrtr,$lieu,$motif,$encours);
if($edit){
$msg['success'] = true;
$msg['messages'] = 'Votre demande a été bien modifié';
}else{
$msg['success'] = false;
$msg['messages'] = 'Erreur lors de traitement de donnéés, Veuillez réssayer SVP.';	
}
echo json_encode($msg);
}

public function editMaternitePerso() 
{   

$this->load->model('model');
$id = $this->input->post('id_matern');
$im  = $this->input->post('im_matern');
$lieu  = $this->input->post('lieu_matern');
$c  = $this->input->post('dtdep_matern');
$rt = 90;
$dtpat = date("d-m-Y");
$dtdep = date("d-m-Y",strtotime($c));
$dtrtr = date("d-m-Y",strtotime($c.'+'.$rt.'days'));
$encours ="En cours";
$edit = $this->model->editMaternitePerso($id,$dtpat,$dtdep,$dtrtr,$lieu,$encours);
$msg['success'] = false;
if($edit){
$msg['success'] = true;
}
echo json_encode($msg);
}
// 
public function deletedemandeautorisation($id_auto = null)
{
if($id_auto) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$delete = $this->model->deleteAutoValider($id_auto);
if($delete === true) {
$validator['success'] = true;
$validator['messages'] = "Votre demande a été bien supprimé";
}
else {
$validator['success'] = flase;
$validator['messages'] = "Erreur lors de traitement de données,Veuillez réssayer SVP.";
}
echo json_encode($validator);
}
}

public function deletedemandePermission($id_permi = null)
{
if($id_permi) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$delete = $this->model->deletedemandePermission($id_permi);
if($delete === true) {
$validator['success'] = true;
$validator['messages'] = "Votre demande a été bien supprimé";
}
else {
$validator['success'] = flase;
$validator['messages'] = "Erreur lors de traitement de données,Veuillez réssayer SVP.";
}
echo json_encode($validator);
}
}

public function deleteCongeValider($id_conge = null)
{
if($id_conge) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$removeMember = $this->model->deleteCongeValider($id_conge);
if($removeMember === true) {
$validator['success'] = true;
$validator['messages'] = "Successfully removed";
}
else {
$validator['success'] = true;
$validator['messages'] = "Successfully removed";
}
echo json_encode($validator);
}
}

public function deletePersonnel($id_perso = null){
if($id_perso) {
$validator = array('success' => false, 'messages' => array());
$this->load->model('model');
$del= $this->model->deletePersonnel($id_perso);
if($del === true) {
$validator['success'] = true;
$validator['messages'] = 'Le personnel a été bien supprimé';
}
else {
$validator['success'] = false;
$validator['messages'] = 'Erreur lors de traitement de données';
}
echo json_encode($validator);
}
}


public function listeDecision(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->ListeDecision();
foreach ($data as $key => $value) {
$buttons ='
<style>
.icon-edit{
color: #dc9d00;
}
.icon-edit:hover{

}

.icon-trash{
color: #ff0000;
}
.icon-trash:hover{
color: #ff0000;
}

</style>

<div class="btn-group">
<a type="button" onclick="deleteDecision('.$value['id_congedroit'].')" data-toggle="modal" data-target="#deleteModalPerso">
<button type="button" class="btn btn-default">
<i class="icon-trash" class="font-size:20px"></i>
</button>
</a>	
</div>	    
';
$result['data'][$key] = array(
$value['im_congedroit'],
$value['num_congedroit'],
$value['annee_congedroit'],
$value['nomPre_congedroit'],
$value['nbjrs_congedroit'],
$value['auto_congedroit'],
$value['permi_congedroit'],
$buttons
);
}
echo json_encode($result);
}



public function listePerso(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->ListePerso();
foreach ($data as $key => $value) {
$buttons ='
<style>
.icon-edit{
color: #dc9d00;
}
.fa-edit:hover{
color: #f0901c;
}

.icon-trash{
color: #ff0000;
}
.fa-trash:hover{
color: #f60000;
}

</style>

<div class="btn-group">
<a type="button" id="btnedit" onclick="editPersonnel('.$value['id_perso'].')" data-toggle="modal" data-target="#editModalPerso">
<button type="button" class="btn btn-default">
<i class="icon-edit" style="font-size:20px"></i>
</button>
</a>
<a type="button" onclick="deletePersonnel('.$value['id_perso'].')" data-toggle="modal" data-target="#deleteModalPerso">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size:20px"></i>
</button>
</div>
</a>	    
';
$result['data'][$key] = array(
$value['im_perso'],
$value['nomPre_perso'],
$value['sexe_perso'],
$value['corps_perso'],
$value['grade_perso'],
$value['direction_perso'],
$value['lieuService_perso'],
$value['budget_perso'],
$value['chapitreBudget_perso'],
$buttons
);
}
echo json_encode($result);
}

public function listecomptePerso($im = null){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listecomptePerso($im);
foreach ($data as $key => $value) {
	$buttons ='
<style>
.icon-info-sign{
color : #1b59ff;
}

</style>
<div class="btn-group">
<button type="button" class="btn btn-default">
<a onclick="imprimerPermiEncoursPerso('.$value['id_congedroit'].');"color: #fff;margin-bottom: 0.5%;">
 <i class="icon-info-sign" style=" font-size: 20px;"> </i>
</a>
</button>
</div>    
';
$result['data'][$key] = array(
$value['num_congedroit'],
$value['nbjrs_congedroit'],
$value['auto_congedroit'],
$value['permi_congedroit'],
$value['annee_congedroit'],
$buttons
);
}
echo json_encode($result);
}

public function listeCompte(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->ListeCompte();
foreach ($data as $key => $value) {
$buttons ='
<style>
.fa-edit{
color: #f0901c;
}
.fa-edit:hover{
color: #f0901c;
}

.fa-trash{
color: #f60000;
}
.fa-trash:hover{
color: #f60000;
}
</style>
<div style="margin-top: 15%;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  type="button" onclick="deletePersonnel('.$value['id_user'].')" data-toggle="modal" data-target="#deleteModalPerso"><span class="fas fa-trash" style="font-size: 22px;margin-left: 6%;"></span>&nbsp;&nbsp;
</a> </div>    
';
$avatar ='<img  class="img-circle img-bordered-sm" style="width:50px;border-radius: 70%;" src= "'.base_url().'avatar/'.$value['avatar_user']. '">
';
$result['data'][$key] = array(
$avatar,
$value['im_user'],
$value['pseudo_user'],
$value['email_user'],
$value['numPhone_user'],
$buttons
);
}
echo json_encode($result);
}

public function adminCompte(){
$this->load->view('pages/adminCompte');
}

public function addCompte(){
$this->load->model('model');
$addCompte = array(
'im_user' =>  $this->input->post('im_user'),
'pseudo_user' =>  $this->input->post('pseudo_user'),
'numPhone_user' =>  $this->input->post('numPhone_user'),
'email_user' =>  $this->input->post('email_user'),
'pass_user' =>  $this->input->post('pass_user'),
'avatar_user' =>  $this->upload_image()
);
$this->model->addCompte($addCompte);
}

public function upload_image(){
if(isset($_FILES['avatar_user'])){
$extention = explode('.', $_FILES['avatar_user']['name']);
$new_name =rand(). '.' . $extention[1];
$destination = './avatar/' .$new_name;
move_uploaded_file($_FILES['avatar_user']['tmp_name'], $destination);
return $new_name;
}
}

public function deleteCompte($im){
$this->m->deleteCompte($im);
return redirect(base_url('control/listeCompteUser'));
}

public function lienDecisionAdmin(){
//$Dec["Dec"] = $this->m->listeDecision();
$this->load->view('pages/adminDecision');
}

public function listeDecision2(){
$Dec["Dec"] = $this->m->listeDecision();
$this->load->view('pages/persoDecision',$Dec);
}

public function addDecision(){
$this->load->model('model');
$msg= array('success' => false, 'messages' => array());
$b = $this->input->post('im_congedroit');
$a = $this->input->post('numdec_congedroit');
$g = $this->input->post('annee_congedroit');
$d = 30;
$f = 20;
$e = 15;
if($c = $this->model->nomDec($b)){
if(!$ok = $this->model->selectExist($b,$g)){  

$addDecision = $this->model->addDecision($a,$b,$c,$d,$e,$f,$g); 
if($addDecision === true) {
$msg['success'] = true;
$msg['messages'] = "La décision de congé pour l'année ".$g." a été bien ajouté";
}
else {
$msg['success'] = false;
$msg['messages'] = "Erreur lors de traitement de données, Veuillez réssayer SVP.";
}
}else{
$msg['success'] = false;
$msg['messages'] = "Vous ne pouvez pas avoir deux décision de conge en une année.";
}
}else{
$msg['success'] = false;
$msg['messages'] = "Veuillez saisir un numéro matricule correct.";
}
echo json_encode($msg);
}

public function  deleteDecision($id_congedroit){
$this->load->model('model');
$im = $this->input->post('im_congedroit');
$an = $this->input->post('annee_congedroit');
$deleteDec = $this->model->deleteDecision($id_congedroit);
if($deleteDec === true) {
$validator['success'] = true;
}
else {
$validator['success'] = false;
}
echo json_encode($validator);
}     	

public function listeCongePaterniteEncours(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongePaterniteEncours();

foreach ($data as $key => $value) {
$buttons ='
<style>
.icon-check{
color: #00780d;
}

.icon-remove{
color: #ff0000;
}


</style>


<div class="btn-group"><a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="validerPaternite('.$value['id_patern'].')" data-toggle="modal" data-target="#paterniteValider">
<button type="button" class="btn btn-default">
<i class="icon-check" style="font-size: 20px"></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="RejeterPaternite('.$value['id_patern'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-remove" style="font-size: 20px"></i>
</button>
</a>
</div>
    
';
$result['data'][$key] = array(
$value['im_patern'],
$value['annee_patern'],
$value['nbjrs_patern'],
$value['lieu_patern'],
$value['dtpat_patern'],
$value['dtdep_patern'],
$value['dtdrt_patern'],
$buttons
);
}
echo json_encode($result);
}

public function listeCongeMaterniteEncours(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongeMaterniteEncours();
foreach ($data as $key => $value) {
$buttons ='
<style>
.icon-remove{
color: #ff0000;
}
.fa-print:hover{
color: #368df2;
}

.icon-check{
color: #009729;
}
.fa-trash:hover{
color: #f60000;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="validerMaternite('.$value['id_matern'].')" data-toggle="modal" data-target="#paterniteValider">
<button type="button" class="btn btn-default">
<i class="icon-check" font-size: 20px></i>
</button>
</a>
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="RejeterMaternite('.$value['id_matern'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-remove" font-size: 20px></i>
</button>
</a>
</div>
   
';
$result['data'][$key] = array(
$value['im_matern'],
$value['annee_matern'],
$value['nbjrs_matern'],
$value['lieu_matern'],
$value['dtmat_matern'],
$value['dtdep_matern'],
$value['dtdrt_matern'],
$buttons
);
}
echo json_encode($result);
}

public function listeCongeMaterniteRejeter(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeCongeMaterniteRejeter();
foreach ($data as $key => $value) {
$buttons ='
<style>

.fa-print:hover{
color: #368df2;
}

.icon-trash{
color: #ff0000;
}

</style>

<div class="btn-group">
<a type="button" style="color: #fff;margin-bottom: 0.5%;"  onclick="RejeterPaternite('.$value['id_matern'].')" data-toggle="modal" data-target="#editModalRejeter">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>
</div>    
';
$result['data'][$key] = array(
$value['im_matern'],
$value['annee_matern'],
$value['nbjrs_matern'],
$value['lieu_matern'],
$value['dtmat_matern'],
$value['dtdep_matern'],
$value['dtdrt_matern'],
$buttons
);
}
echo json_encode($result);
}

public function listeMaterniteAdmin(){
$this->load->model('model');
$Maternite["Maternite"] = $this->model->listeMaterniteAdmin();
$this->load->view("pages/adminMaternite",$Maternite);
}

public function paternValider(){
$this->load->model('model');
$a = $this->input->post("im_patern");
$b = $this->input->post("annee_patern");
$c = $this->input->post("dtpat_patern");
$valider = $this->model->paternValider($a,$b,$c);
return redirect(base_url('control/listePaterniteAdmin'));
}

public function paternRejeter(){
$this->load->model('model');
$a = $this->input->post("im_patern");
$b = $this->input->post("annee_patern");
$c = $this->input->post("dtpat_patern");
$rejeter = $this->model->paternRejeter($a,$b,$c);
return redirect(base_url('control/listePaterniteAdmin'));
}

public function maternValider(){
$this->load->model('model');
$a = $this->input->post("im_matern");
$b = $this->input->post("annee_matern");
$c = $this->input->post("dtmat_matern");
$valider = $this->model->maternValider($a,$b,$c);
return redirect(base_url('control/listeMaterniteAdmin'));
}

public function maternRejeter(){
$this->load->model('model');
$a = $this->input->post("im_matern");
$b = $this->input->post("annee_matern");
$c = $this->input->post("dtmat_matern");
$valider = $this->model->maternRejeter($a,$b,$c);
return redirect(base_url('control/listeMaterniteAdmin'));
}

public function lienPersonnelAdmin(){
$this->load->view('pages/adminPerso');
}

public function lienCongeAnnuelAdmin(){
$this->load->view('pages/adminHome');
}

public function lienAutorisationPerso(){
$this->load->view('pages/persoAutorisation');
}

public function lienAutorisationAdmin(){
$this->load->view('pages/adminAutorisation');
}

public function lienpermissionAdmin(){
$this->load->view('pages/adminPermission');
}

public function lienpaterniteAdmin(){
$this->load->view('pages/adminPaternite');
}

public function lienMaterniteAdmin(){
$this->load->view('pages/adminMaternite');
}
public function lienCompteAdmin(){
  $this->load->view('pages/adminCompte');
}

/*--------------------------------------Côté Personnel--------------------------------------*/

public function selectNumDec($im=null){
	$selectNumDec = $this->model->selectNumDec($im);

	echo json_encode($selectNumDec);
}

public function demandeAutorisation(){
$this->load->model('model');
$numdec = $this->input->post('numdec_auto');
$im = $this->input->post('im_auto');
$annee = $this->input->post('annee_auto');
$motif = $this->input->post('motif_auto');
$nbjr = $this->input->post('nbjrs_auto');
$lieu = $this->input->post('lieu_auto');
$datedp1 = $this->input->post('dtdp_auto');
$rt = $nbjr;
$dtauto = date("d-m-Y");
$dtdep = date("d-m-Y",strtotime($datedp1));
$dtrtr = date("d-m-Y",strtotime($datedp1.'+'.$rt.'days'));
$status = "En cours";
$trois = 3;
$zero = 0;
$msg= array('success' => false, 'messages' => array());
$selectdroitauto  = $this->model->selectdroitauto($im,$annee);
if($selectdroitauto){
if($nbjr <= $trois || $nbjr == 0){
$selectSuffitauto = (int) $this->model->selectSuffitauto($im,$annee);
$reste = $selectSuffitauto - $nbjr;
if($selectSuffitauto >= 1){
$add_Auto = $this->model->demandeAutorisation($im,$nbjr,$dtauto,$dtdep,$dtrtr,$annee,$lieu,$motif,$status);
$msg['success']=true;
$msg['messages']="Votre demande a été bien anvoyé";
}else{ 
$msg['success']=false;
$msg['messages']="Votre solde est insuffisant il vous reste '".$selectSuffitauto."'";
}
}else{
$msg['success']=false;
$msg['messages']="Le nombre de jour d'autorisation d'absence est inférieur ou égale à 3";
}
}else{
$msg['success']=false;
$msg['messages']="Vous n'avez pas de décision de pour pout l'année '".$annee."'";
}
echo  json_encode($msg);
}

public function demandePermission(){
$this->load->model('model');
$im = $this->input->post('im_permi');
$annee = $this->input->post('annee_permi');
$motif = $this->input->post('motif_permi');
$nbjr = $this->input->post('nbjrs_permi');
$lieu = $this->input->post('lieu_permi');
$datedp1 = $this->input->post('dtdp_permi');
$rt = $nbjr;
$dtpermi = date("d-m-Y");
$dtdep = date("d-m-Y",strtotime($datedp1));
$dtrtr = date("d-m-Y",strtotime($dtdep.'+'.$rt.'days'));
$status = "En cours";
$trois = 1;
$zero = 0;
$msg= array('success' => false, 'messages' => array());
$selectdroitpermi  = $this->model->selectdroitPermi($im,$annee);
if($selectdroitpermi){
if($nbjr <= $trois || $nbjr == 0){
$selectSuffitpermi = (int) $this->model->selectSuffitpermi($im,$annee);
$reste = $selectSuffitpermi - $nbjr;
if($selectSuffitpermi >= 1){
$add_permi = $this->model->demandePermission($im,$nbjr,$dtpermi,$dtdep,$dtrtr,$annee,$lieu,$motif,$status);
$msg['success']=true;
$msg['messages']="Votre demande a été bien anvoyé";
}else{
$msg['success']=false;
$msg['messages']="Vtre solde est insuffisant il vous reste '".$selectSuffitpermi."'";
}
}else{
$msg['success']=false;
$msg['messages']="Vous ne pouvez pas prendre supérieur à 3 ou égale à 0";
}
}else{
$msg['success']=false;
$msg['messages']="Vous n'avez pas de décision de pour pout l'année '".$annee."'";
}
echo  json_encode($msg);
}

public function demandeCongeAnnuel(){
$this->load->model('model');
$a = $this->input->post('numdec_conge');
$b = $this->input->post('im_conge');
$c = $this->input->post('annee_conge');
$d = $this->input->post('motif_conge');
$e = $this->input->post('nbjrs_conge');
$f = $this->input->post('lieu_conge');
$datedec = $this->input->post('dtdec_conge');
$datedp = $this->input->post('dtdp_conge');
$rt = $e;
$g = date("d-m-Y");
$h = date("d-m-Y",strtotime($datedp));
$i = date("d-m-Y",strtotime($datedp.'+'.$rt.'days'));
$j = "En cours";
$msg= array('success' => false, 'messages' => array());
$v1 = date("Y",strtotime($datedp));
$selectDernierCongePerso = $this->model->selectDernierCongePerso($b);
//if(strtotime($selectDernierConge)  strtotime($h)){}
$selectObligatoire = $this->model->selectObligatoire($b,$c);
$obligatoire = 15;
$msg['success']=false;
if($selectObligatoire ==false && $obligatoire !=$e){
$msg['success']=false;
$msg['messages']="Pour la nouvelle décision, 15 jours est obligatoire xxx";
}else{
$selectMatricule = $this->model->selectMatricule($b);
if($selectMatricule){
if($selectDec = $this->model->selectDec($b,$c)){
//$selectDernierConge = $this->model->selectDernierConge($b,$c);
//if($selectConge = $this->model->selectConge($b,$c,$g)){
//$selectDernierConge = $this->model->selectDernierConge($b,$c,$dateok,$i);
$selectSuffit = (int) $this->model->selectSuffit($b,$c);
if($comparer = $e <= $selectSuffit){
$add_congeA = $this->model->demandeCongeAnnuel($a, $b,$c,$d,$e,$f,$g,$h,$i,$j);
if($add_congeA=="TRUE"){      
$msg['success']=true;
$msg['messages']="Votre demande a été bien envoyé";
}else{
$msg['success'] = false;
$msg['messages']="Erreur lors de traitement de données, Veuillez réssayer SVP";
}
}else{
$an = $c + 1;
if($anprec = (int) $this->model->selectDecPrec($b,$an)){
$add_congeA = $this->model->demandeCongeAnnuel($a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
$msg['success']=true;
$msg['messages']="Votre demande a été bien anvoyé";
}else{
$msg['success'] = false;
$msg['messages']="Vous devez prendre une nouvelle décision de congé</br> pour cumulé votre congé";
}
}
}else{
$msg['success'] = false;
$msg['messages']="Cette numéro de décision de congé </br> n'existe pas";
}
}else{
$msg['success'] = false;
$msg['messages']="Veuillez saisir un numéro matricule correct";
}
}
echo  json_encode($msg);
}


public function demandeCongeAnnuelModifier(){
$this->load->model('model');
$a = $this->input->post('numdec_conge');
$b = $this->input->post('im_conge');
$id = $this->input->post('id_conge');
$c = $this->input->post('annee_conge');
$d = $this->input->post('motif_conge');
$e = $this->input->post('nbjrs_conge');
$f = $this->input->post('lieu_conge');
$datedec = $this->input->post('dtdec_conge');
$datedp = $this->input->post('dtdp_conge');
$rt = $e;
$g = date("d-m-Y");
$h = date("d-m-Y",strtotime($datedp));
$i = date("d-m-Y",strtotime($datedp.'+'.$rt.'days'));
$j = "En cours";
$msg= array('success' => false, 'messages' => array());
$selectObligatoire = $this->model->selectObligatoire($b,$c);
$obligatoire = 15;
if($selectObligatoire ==true && $obligatoire !=$e){
$msg['success']=false;
$msg['messages']=" 15 jours est obligatoire";
}else{
if($selectDec = $this->model->selectDec($b,$c)){
$selectSuffit = (int) $this->model->selectSuffit($b,$c);
if($comparer = $e <= $selectSuffit){
if($e <= 15){ 
$add_congeA = $this->model->demandeCongeAnnuelModifier($a, $b,$c,$d,$e,$f,$g,$h,$i,$j,$id);
if($add_congeA=="TRUE"){      
$msg['success']=true;
$msg['messages']="Votre demande a été bien modifié";
}else{
$msg['success'] = false;
$msg['messages']="Erreur lors de traitement de données, Veuillez réssayer SVP.";
}
}else{
$msg['success'] = false;
$msg['messages']="Le nombres de jours maximum pour le congé annuel est 15 jours.";}
}else{
if($e <= 15){
$an = $c + 1;
if($anprec = (int) $this->model->selectDecPrec($b,$an)){
$add_congeA = $this->model->demandeCongeAnnuelModifier($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$id);
$msg['success']=true;
$msg['messages']="Votre demande a été bien modifié";
}else{
$msg['success'] = false;
$msg['messages']="Votre solde pour l'année '".$sc."' est insiffisant</br> pour cumuler votre solde, Veuillez  ajouter une nouvelle décision de congé";
}
}else{
$msg['success'] = false;
$msg['messages']="Le nombres de jours maximum pour le congé annuel est 15 jours.";
}
}
}else{
$msg['success'] = false;
$msg['messages']="Le numéro de décision de congé que vous avez saisir est incorrect, Veuillez saisir un numéro correct.";
}
}
echo  json_encode($msg);
}

public function demandePaternite(){
$this->load->model('model');
$msg= array('success' => false, 'messages' => array());
$a = $this->input->post('im_patern');
$b = date("Y");
$c = 15;
$motif = "Congé de paternité";
$datedep = $this->input->post('dtdp_patern');
$e = date("d-m-Y");
$d = date("d-m-Y",strtotime($datedep));
$f = date("d-m-Y",strtotime($datedep.'+ 15 days'));
$g = "En cours";
$h = $this->input->post('lieu_patern');
$msg['success'] =false;
$selectSexe = $this->model->selectSexe($a);
if($selectSexe=="M"){
$addPatern = $this->model->addPatern($a,$b,$c,$e,$e,$d,$f,$h,$g,$motif);
$msg['success'] =true;
$msg['messages'] ="Votre demande a été bien envoyé";
}else{
$msg['success'] =false;
$msg['messages'] ="Vous ne pouvez pas cette option, car elle pour une femme seulement";
}
echo json_encode($msg);	
}

public function demandeMaternite(){
$this->load->model('model');
$msg= array('success' => false, 'messages' => array());
$im = $this->input->post('im_matern');
$annee = date("Y");
$nbjrs = 90;
$motif = "Congé de maternité";
$a = $this->input->post('dtdp_matern');
$datmat = date("d-m-Y");
$datedep = date("d-m-Y",strtotime($a));
$dtrtr = date("d-m-Y",strtotime($a.'+ 90 days'));
$status = "En cours";
$lieu = $this->input->post('lieu_matern');
$msg['success'] =false;
$selectSexe = $this->model->selectSexe($im);
if($selectSexe=="F"){
$addPatern = $this->model->addMatern($im,$annee,$nbjrs,$datmat,$datedep,$dtrtr,$lieu,$status,$motif);
$msg['success'] =true;
$msg['messages'] ="Votre deamnde a été bien envoyé";
}else{
$msg['success'] =false;
$msg['success'] ="Vous ne pouvez pas cette option, car elle pour un homme seulement";
}
echo json_encode($msg);	
}

public function listeCongePerso(){
$this->load->model('model');
$result  = array('data' => array());

$data = $this->model->listeCongePerso();

foreach ($data as $key => $value) {
if($value['status_conge']=='En cours'){

$buttons ='
<style>
.icon-edit{
color: #e9b500;
}
.icon-reply{
color: #ff0000;
}
</style>

<div class="btn-group">
<button type="button" class="btn btn-default">
<a id="ok" href="#" onclick="editCongeEncoursPerso('.$value['id_conge'].')" data-toggle="modal" data-target="#editDemandeencours">
<i class="icon-edit" style="font-size: 20px;">
</i>
</a>
</button>
<button type="button" class="btn btn-default">
<a href="#" margin-bottom: 0.5%;" onclick="annulerDemandeEncoursPerso('.$value['id_conge'].')" data-toggle="modal" data-target="#annulerDemandeEncours"><i class="icon-reply" style="font-size: 20px;"></i>
</a>
</button>
</div>

';

$status='Congé en cours de validation';
$result['data'][$key] = array(
$value['numdec_conge'],
$value['im_conge'],
$value['titre_conge'],
$value['motif_conge'],
$value['nbjrs_conge'],
$value['lieu_conge'],
$value['dtdec_conge'],
$value['dtdep_conge'],
$value['dtrtr_conge'],
$status,
$buttons
);
}else if($value['status_conge']=='Valider'){
$buttons ='
<style>
.icon-download-alt{
color: #0071e3;
}
.icon-trash{
color: #ff0000;
}

</style>
<div class="btn-group">
<a href="#" onclick="imprimerCongePerso('.$value['id_conge'].')" >
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px;""></i>
</button>
</a>
</div>    
';
$expirer =((-strtotime(date('d-m-Y'))+strtotime($value['dtrtr_conge']))/86400);
$status='Congé validé pendant '.$expirer.' jour(s)';
$result['data'][$key] = array(
$value['numdec_conge'],
$value['im_conge'],
$value['titre_conge'],
$value['motif_conge'],
$value['nbjrs_conge'],
$value['lieu_conge'],
$value['dtdec_conge'],
$value['dtdep_conge'],
$value['dtrtr_conge'],
$status,
$buttons
);
}else{
$buttons ='
<style>
.fa-edit{
color: #999a90;
}
.fa-edit:hover{
color: #f0901c;
}

.fa-times-circle{
color: #999a90;
}
.fa-trash:hover{
color: #f60000;
}
</style>
<div class="btn-group">
<a href="#" style=";color: #fff;margin-bottom: 0.5%;" onclick="annulerDemandeEncoursPerso('.$value['id_conge'].')" data-toggle="modal" data-target="#annulerDemandeEncours">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px;"></i>
</button>
</a>
</div>   
';

$status='Demande de congé non validé';
$result['data'][$key] = array(
$value['numdec_conge'],
$value['im_conge'],
$value['titre_conge'],
$value['motif_conge'],
$value['nbjrs_conge'],
$value['lieu_conge'],
$value['dtdec_conge'],
$value['dtdep_conge'],
$value['dtrtr_conge'],
$status,
$buttons
);
}
}
echo json_encode($result);
}

public function listeAutorisationPerso(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->ListeAutorisationPerso();
foreach ($data as $key => $value) {
if($value['status_auto']=='En cours'){
$buttons ='
<style>

.icon-edit{
color: #e9ad00;
}
.icon-reply{
color: #ff0000;
}
</style>

<div class="btn-group">
<button type="button" class="btn btn-default">
<a href="#" onclick="editAutoEncoursPerso('.$value['id_auto'].')" data-toggle="modal" data-target="#modalModifier">
<i class="icon-edit" style="font-size: 20px"></i>
</a>
</button>
<button type="button" class="btn btn-default">
<a href="#" onclick="annulerAutoEncoursPerso('.$value['id_auto'].')" data-toggle="modal" data-target="#annulerAutoEncours">
<i class="icon-reply" style="font-size: 20px"></i>
</a>
</button>
</div>
';
$status='En cours';
$result['data'][$key] = array(
$value['im_auto'],
$value['annee_auto'],
$value['motif_auto'],
$value['nbjr_auto'],
$value['lieu_auto'],
$value['dtauto_auto'],
$value['dtdprt_auto'],
$value['dtdrt_auto'],
$status,
$buttons
);
}else if($value['status_auto']=='Valider'){
$buttons ='
<style>

.icon-download-alt{
color: #007af6;
}
.fa-trash:hover{
color: #f60000;
}
</style>

<div class="btn-group">
<a onclick="imprimerAutorisation('.$value['id_auto'].');">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px"></i>
</button>
</a>
</div>	    
';
$status='Validé';
$result['data'][$key] = array(
$value['im_auto'],
$value['annee_auto'],
$value['motif_auto'],
$value['nbjr_auto'],
$value['lieu_auto'],
$value['dtauto_auto'],
$value['dtdprt_auto'],
$value['dtdrt_auto'],
$status,
$buttons
);
}else{
$buttons ='
<style>
.icon-trash{
color: #ff0000;
}
.fa-edit:hover{
color: #f0901c;
}

.fa-times-circle{
color: #999a90;
}
.fa-trash:hover{
color: #f60000;
}

</style>

<div class="btn-group">
<a href="#" onclick="deletedemandeautorisation('.$value['id_auto'].');">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>
</div>	    
';
$status='Rejet';
$result['data'][$key] = array(
$value['im_auto'],
$value['annee_auto'],
$value['motif_auto'],
$value['nbjr_auto'],
$value['lieu_auto'],
$value['dtauto_auto'],
$value['dtdprt_auto'],
$value['dtdrt_auto'],
$status,
$buttons
);
}
}
echo json_encode($result);
}

public function listePermissionPerso(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listePermissionPerso();
foreach ($data as $key => $value) {
if($value['status_permi']=='En cours'){
$buttons ='
<style>
.icon-edit{
color: #ffb429;
}
.icon-reply{
color: #ff0000;
}
</style>

<div class="btn-group">
<button type="button" class="btn btn-default">
<a href="#" style="color: #fff;margin-bottom: 0.5%;" onclick="editPermiEncoursPerso('.$value['id_permi'].')" data-toggle="modal" data-target="#editDemandeencours">
<i class="icon-edit" style="font-size: 20px;"></i>
</a>
</button>
<button type="button" class="btn btn-default">
<a href="#" style="color: #fff;margin-bottom: 0.5%;" onclick="annulerPermiEncoursPerso('.$value['id_permi'].')" data-toggle="modal" data-target="#annulerPermiEncours">
<i class="icon-reply" style="font-size: 20px;"></i>
</a>
</button>
</div>
';
$status='En cours';
$result['data'][$key] = array(
$value['im_permi'],
$value['annee_permi'],
$value['motif_permi'],
$value['nbjr_permi'],
$value['lieu_permi'],
$value['dtpermi_permi'],
$value['dtdprt_permi'],
$value['dtdrt_permi'],
$status,
$buttons
);
}else if($value['status_permi']=='Valider'){
$buttons ='
<style>
.icon-download-alt{
color: #0082e9;
}
.fa-trash:hover{
color: #f60000;
}
</style>

<div class="btn-group">
<button type="button" class="btn btn-default">
<a href="#" style="font-size: 20px" onclick="imprimerPermission('.$value['id_permi'].')">
<i class="icon-download-alt" style="font-size: 20px;"></i>
</a>
</button>
</div>    
';
$status='Validé';
$result['data'][$key] = array(
$value['im_permi'],
$value['annee_permi'],
$value['motif_permi'],
$value['nbjr_permi'],
$value['lieu_permi'],
$value['dtpermi_permi'],
$value['dtdprt_permi'],
$value['dtdrt_permi'],
$status,
$buttons
);
}else{
$buttons ='
<style>
.fa-edit{
color: #999a90;
}
.fa-edit:hover{
color: #f0901c;
}

.fa-times-circle{
color: #999a90;
}
.icon-trash{
color: #ff0000;
}
</style>

<div class="btn-group">
<button type="button" class="btn btn-default">
<a href="#" onclick="deletedemandePermission('.$value['id_permi'].')">
<i class="icon-trash" class="font-size: 20px"></i>
</a>
</button>
</div>
';
$status='Rejet';
$result['data'][$key] = array(
$value['im_permi'],
$value['annee_permi'],
$value['motif_permi'],
$value['nbjr_permi'],
$value['lieu_permi'],
$value['dtpermi_permi'],
$value['dtdprt_permi'],
$value['dtdrt_permi'],
$status,
$buttons
);
}
}
echo json_encode($result);
}

public function listePaternitePerso(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listePaternitePerso();
foreach ($data as $key => $value) {
if($value['status_patern']=='En cours'){
$buttons ='
<style>
.icon-edit{
color: #efab00;
}
.icon-reply{
color: #ff0000;
}
</style>

<div class="btn-group">
<a href="#" style="background-color: ;color: #fff;margin-bottom: 0.5%;" onclick="editPaternite('.$value['id_patern'].')" data-toggle="modal" data-target="#editModalPaternite">
<button type="button" class="btn btn-default">
  <i class="icon-edit" style="font-size: 20px"></i>
</button>
</a>
<a href="#" style="background-color: ;color: #fff;margin-bottom: 0.5%;" onclick="annulerDemandeEncoursPatern('.$value['id_patern'].')" data-toggle="modal" data-target="#annulerDemandeEncours">
<button type="button" class="btn btn-default">
<i class="icon-reply" style="font-size: 20px"></i>
</button>
</a>
</div>
';
$status='En cours';
$result['data'][$key] = array(
$value['im_patern'],
$value['annee_patern'],
$value['motif_patern'],
$value['lieu_patern'],
$value['nbjrs_patern'],
$value['dtpat_patern'],
$value['dtdep_patern'],
$value['dtdrt_patern'],

$status,
$buttons
);
}else if($value['status_patern']=='Valider'){
$buttons ='
<style>
.icon-download-alt{
color: #007bdc;
}
.fa-trash:hover{
color: #f60000;
}  
</style>
<div class="btn-group">
<a href="#" onclick="imprimerCongePaternitePerso('.$value['id_patern'].')">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px"></i>
</button>
</a>
</div>	    
';
$status='Validé';
$result['data'][$key] = array(
$value['im_patern'],
$value['annee_patern'],
$value['motif_patern'],
$value['lieu_patern'],
$value['nbjrs_patern'],
$value['dtpat_patern'],
$value['dtdep_patern'],
$value['dtdrt_patern'],

$status,
$buttons
);
}else{
$buttons ='
<style>
.fa-edit{
color: #999a90;
}
.fa-edit:hover{
color: #f0901c;
}

.fa-times-circle{
color: #999a90;
}
.icon-trash{
color: #ff0000;
}
</style>

<div class="btn-group">
<a href="#" style=";color: #fff;margin-bottom: 0.5%;" onclick="annulerDemandeEncoursPatern('.$value['id_patern'].')" data-toggle="modal" data-target="#annulerDemandeEncours">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px;"></i>
</button>
</a>
</div>	    
';
$status='Rejet';
$result['data'][$key] = array(
$value['im_patern'],
$value['annee_patern'],
$value['motif_patern'],
$value['lieu_patern'],
$value['nbjrs_patern'],
$value['dtpat_patern'],
$value['dtdep_patern'],
$value['dtdrt_patern'],

$status,
$buttons
);
}
}
echo json_encode($result);
}

public function listeMaternitePerso(){
$this->load->model('model');
$result  = array('data' => array());
$data = $this->model->listeMaternitePerso();
foreach ($data as $key => $value) {
if($value['status_matern']=='En cours'){
$buttons ='
<style>
.icon-edit{
color: #e9bc00;
}
.icon-reply{
color: #ff0000;
}
</style>

<div class="btn-group">
<a href="#" onclick="editCongeEncoursMtern('.$value['id_matern'].')" data-toggle="modal" data-target="#editDemandeencours">
<button type="button" class="btn btn-default">
<i class="icon-edit" style="font-size: 20px"></i>
</button>
</a>
<a href="#" onclick="annulerDemandeEncoursMatern('.$value['id_matern'].')" data-toggle="modal" data-target="#annulerDemandeEncours">
<button type="button" class="btn btn-default">
<i class="icon-reply" style="font-size: 20px"></i>
</button>
</a>
</div>
';
$status='En cours';
$result['data'][$key] = array(
$value['im_matern'],
$value['annee_matern'],
$value['motif_matern'],
$value['lieu_matern'],
$value['nbjrs_matern'],
$value['dtmat_matern'],
$value['dtdep_matern'],
$value['dtdrt_matern'],
$status,
$buttons
);
}else if($value['status_matern']=='Valider'){
$buttons ='
<style>
.icon-download-alt{
color: #0083dc;
}
.fa-trash:hover{
color: #f60000;
}
</style>
<div class="btn-group">
<a href="#" onclick="imprimerCongeMaternitePerso('.$value['id_matern'].')">
<button type="button" class="btn btn-default">
<i class="icon-download-alt" style="font-size: 20px"></i>
</button>
</a>
</div>	    
';
$status='Validé';
$result['data'][$key] = array(
$value['im_matern'],
$value['annee_matern'],
$value['motif_matern'],
$value['lieu_matern'],
$value['nbjrs_matern'],
$value['dtmat_matern'],
$value['dtdep_matern'],
$value['dtdrt_matern'],

$status,
$buttons
);
}else{
$buttons ='
<style>
.icon-trash{
color: #ff0000;
}
.fa-edit:hover{
color: #f0901c;
}
.fa-times-circle{
color: #999a90;
}
.fa-trash:hover{
color: #f60000;
}
</style>

<div class="btn-group">
<a href="#">
<button type="button" class="btn btn-default">
<i class="icon-trash" style="font-size: 20px"></i>
</button>
</a>
</div>	    
';
$status='Rejet';
$result['data'][$key] = array(
$value['im_matern'],
$value['annee_matern'],
$value['motif_matern'],
$value['lieu_matern'],
$value['nbjrs_matern'],
$value['dtmat_matern'],
$value['dtdep_matern'],
$value['dtdrt_matern'],

$status,
$buttons
);
}
}
echo json_encode($result);
}

public function annulerDmd(){
$this->load->model('model');
$im = $this->input->post("im_conge");
$titre = $this->input->post("titre_conge");
$dtdec = $this->input->post("dtdec_conge");
$annuler = $this->model->annulerDmd($im,$titre,$dtdec);
}

public function personnelPerso(){
$this->load->view('pages/adminPerso');
}

public function lienCongeAnnuelPerso(){
$this->load->view('pages/persoConge');
}

public function lienPermissionPerso(){
$this->load->view('pages/persoPermission');
}

public function lienpaternitePerso(){
$this->load->view('pages/persoPaternite');
}

public function lienmaternitePerso(){
$this->load->view('pages/persoMaternite');
}

public function liencomptePerso(){
$this->load->view('pages/persoCompte');
}

//Fin de traitement
}

?>