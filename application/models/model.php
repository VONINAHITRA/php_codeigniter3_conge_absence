<?php 

class model extends CI_Model {

public function __construct()
{
		parent::__construct();
        $this->load->database();
}

public function selectResteAll($im,$b){
 
if($im) {
    $sql = "SELECT * FROM congedroit WHERE im_congedroit = ? AND annee_congedroit = ?";
    $query = $this->db->query($sql, array($im,$b));
    return $query->row_array();
}
}

public function selectObligatoire($b,$c){
  if($b) {
    $sql = "SELECT * FROM conge WHERE im_conge = ? AND titre_conge = ?";
    $query = $this->db->query($sql, array($b,$c));
    if($query->num_rows()){
      return true;
    }else{
      return false;
    }
}
}

public function pdfPersonnel(){
  $query = $this->db->query("SELECT * FROM personnel ORDER BY lieuService_perso ASC");
  if($query->num_rows() > 0){
    return $query->result();
  }else{
    return false;
  }
}
//
public function pdfCongePaternite($id){
  $query = $this->db->query("SELECT personnel.im_perso,personnel.nomPre_perso,personnel.corps_perso,personnel.grade_perso,personnel.direction_perso,personnel.lieuService_perso,personnel.budget_perso,personnel.chapitreBudget_perso,paternite.annee_patern,paternite.motif_patern,paternite.nbjrs_patern,paternite.lieu_patern,paternite.dtpat_patern,paternite.dtdep_patern,paternite.dtdrt_patern FROM personnel JOIN paternite ON personnel.im_perso = paternite.im_patern WHERE paternite.id_patern='".$id."'");
   if($query->num_rows() > 0 ){
            return $query->result();
           }else{
            return false;
           } 
  //$query = $this->db->query($sql);
  //return $query->num_rows();
}

public function pdfCongeMaternite($id){
  $query = $this->db->query("SELECT personnel.im_perso,personnel.nomPre_perso,personnel.corps_perso,personnel.grade_perso,personnel.direction_perso,personnel.lieuService_perso,personnel.budget_perso,personnel.chapitreBudget_perso,maternite.annee_matern,maternite.motif_matern,maternite.nbjrs_matern,maternite.lieu_matern,maternite.dtmat_matern,maternite.dtdep_matern,maternite.dtdrt_matern FROM personnel JOIN maternite ON personnel.im_perso = maternite.im_matern WHERE maternite.id_matern='".$id."'");
   if($query->num_rows() > 0 ){
            return $query->result();
           }else{
            return false;
           } 
  //$query = $this->db->query($sql);
  //return $query->num_rows();
}
//pdfAutorisation pdfPermission

public function pdfPermission($id){
  $query = $this->db->query("SELECT personnel.im_perso,personnel.nomPre_perso,personnel.corps_perso,personnel.grade_perso,personnel.direction_perso,personnel.lieuService_perso,personnel.budget_perso,personnel.chapitreBudget_perso,permission.annee_permi,permission.motif_permi,permission.nbjr_permi,permission.lieu_permi,permission.dtpermi_permi,permission.dtdprt_permi,permission.dtdrt_permi FROM personnel JOIN permission ON personnel.im_perso = permission.im_permi WHERE permission.id_permi='".$id."'");
   if($query->num_rows() > 0 ){
            return $query->result();
           }else{
            return false;
           } 
  //$query = $this->db->query($sql);
  //return $query->num_rows();
}

public function pdfAutorisation($id){
  $query = $this->db->query("SELECT personnel.im_perso,personnel.nomPre_perso,personnel.corps_perso,personnel.grade_perso,personnel.direction_perso,personnel.lieuService_perso,personnel.budget_perso,personnel.chapitreBudget_perso,autorisation.annee_auto,autorisation.motif_auto,autorisation.nbjr_auto,autorisation.lieu_auto,autorisation.dtauto_auto,autorisation.dtdprt_auto,autorisation.dtdrt_auto FROM personnel JOIN autorisation ON personnel.im_perso = autorisation.im_auto WHERE autorisation.id_auto='".$id."'");
   if($query->num_rows() > 0 ){
            return $query->result();
           }else{
            return false;
           } 
  //$query = $this->db->query($sql);
  //return $query->num_rows();
}

public function pdfCongeAnnuel($id){
  $query = $this->db->query("SELECT personnel.im_perso,personnel.nomPre_perso,personnel.corps_perso,personnel.grade_perso,personnel.direction_perso,personnel.lieuService_perso,personnel.budget_perso,personnel.chapitreBudget_perso,conge.numdec_conge,conge.titre_conge,conge.motif_conge,conge.nbjrs_conge,conge.lieu_conge,conge.dtdec_conge,conge.dtdep_conge,conge.dtrtr_conge FROM personnel JOIN conge ON personnel.im_perso = conge.im_conge WHERE conge.id_conge='".$id."'");
   if($query->num_rows() > 0 ){
            return $query->result();
           }else{
            return false;
           } 
  //$query = $this->db->query($sql);
  //return $query->num_rows();
}

public function selectResteSomme($a){
  $this->db->select_sum('nbjrs_congedroit');
  $this->db->where('im_congedroit',$a);
  $query = $this->db->get('congedroit');
  return $query;

    }

public function selectNotificationCongeAnnuel(){
  $a = "En cours";
  $query = $this->db->query("SELECT COUNT(im_conge) AS nb_conge FROM conge WHERE status_conge='".$a."' ");
   return $query;
    }

public function selectNotificationAuto(){
  $a = "En cours";
  $query = $this->db->query("SELECT COUNT(im_auto) AS nb_auto FROM autorisation WHERE status_auto='".$a."' ");
   return $query;
    }

public function selectNotificationPermi(){
  $a = "En cours";
  $query = $this->db->query("SELECT COUNT(im_permi) AS nb_permi FROM permission WHERE status_permi='".$a."' ");
   return $query;
    }

public function selectNotificationMatern(){
  $a = "En cours";
  $query = $this->db->query("SELECT COUNT(im_matern) AS nb_matern FROM maternite WHERE status_matern='".$a."' ");
   return $query;
    }

public function selectNotificationPatern(){
  $a = "En cours";
  $query = $this->db->query("SELECT COUNT(im_patern) AS nb_patern FROM paternite WHERE status_patern='".$a."' ");
   return $query;
    }

public function login_valider($a,$b){
     $this->db->where('im_user',$a);
     $this->db->where('pass_user',$b);
     $result = $this->db->get('utilisateur');
             return $result;
    }
public function login_admin($a,$b,$c){
     $this->db->where('im_user',$a);
     $this->db->where('pass_user',$b);
     $this->db->where('privi_user',$c);
     $result = $this->db->get('utilisateur');
             return $result;
    }

public function login_valider2($a){
     $this->db->where('im_perso',$a);
     $result = $this->db->get('personnel');
             return $result;
    }

public function login_valider3($a){
  $this->db->select_sum('nbjrs_congedroit');
  $this->db->where('im_congedroit',$a);
  $query = $this->db->get('congedroit');
  return $query;
    }

public function login_valider4($a){
  $this->db->select('dtdec_conge');
  $this->db->where('im_conge',$a);
  $query = $this->db->get('conge');
  return $query;
    }

public function login_valider5($a,$b){
  $this->db->select('*');
  $this->db->where('im_congedroit',$a);
  $this->db->where('annee_congedroit',$b);
  $query = $this->db->get('congedroit');
  return $query;
    }

public function login_valider6($a){
  $this->db->select('*');
  $this->db->where('im_perso',$a);
  $query = $this->db->get('personnel');
  return $query;
    }

public function loginAdminVerifier($im,$privi,$pwd){
$query = $this->db
             ->select('*')
             ->from('utilisateur')
             ->where(['im_user'=>$im,'privi_user'=>$privi,'pass_user'=>$pwd]);
$query = $this->db->get();
if($query->num_rows()){
	return $p = $query->row()->im_user;
}else{
	return FALSE;
}
}

public function loginUserVerifier($im,$privi,$pwd){
$query = $this->db
             ->select('*')
             ->from('utilisateur')
             ->where(['im_user'=>$im,'privi_user'=>$privi,'pass_user'=>$pwd]);
$query = $this->db->get();
if($query->num_rows()){
    return $p = $query->row()->im_user;
}else{
    return FALSE;
}
}

public function ListeCompte(){
        $sql = "SELECT * FROM utilisateur";
        $query = $this->db->query($sql);
return $query->result_array();
}

public function listecomptePerso($im=null){
    $zero = 0;
        $sql = "SELECT * FROM congedroit WHERE im_congedroit=$im AND nbjrs_congedroit !=$zero ORDER BY annee_congedroit ASC";
        $query = $this->db->query($sql);
return $query->result_array();
}

public function verifierCompte1($verifier1){
     $query =$this->db->query("SELECT * FROM personnel WHERE im_perso='".$verifier1."' ");
    if($query->num_rows() > 0 ){
    return $query->result();
   }else{
    return false;
   }   

}

public function verifierCompte2($verifier2){
     $query =$this->db->query("SELECT * FROM utilisateur WHERE im_user='".$verifier2."' ");
    if($query->num_rows() > 0 ){
    return $query->result();
   }else{
    return false;
   }   

}

public function addCompte($data){
$query = $this->db->insert('utilisateur',$data);
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}

}

public function deleteCompte($im){
$delete = $this->db->query("DELETE FROM utilisateur WHERE im_user='".$im."' ");
}

public function demandecongeAnnuel($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
$query  = $this->db->query("INSERT INTO conge(id_conge,numdec_conge,im_conge,titre_conge,motif_conge,nbjrs_conge,lieu_conge,dtdec_conge,dtdep_conge,dtrtr_conge,status_conge) VALUES (null,'".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."')");
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}

}

public function demandeAutorisation($im,$nbjr,$dtauto,$dtdep,$dtrtr,$annee,$lieu,$motif,$status){
$query  = $this->db->query("INSERT INTO autorisation(id_auto,im_auto,nbjr_auto,dtauto_auto,dtdprt_auto,dtdrt_auto,annee_auto,lieu_auto,motif_auto,status_auto) VALUES (null,'".$im."','".$nbjr."','".$dtauto."','".$dtdep."','".$dtrtr."','".$annee."','".$lieu."','".$motif."','".$status."')");
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}

}

public function demandePermission($im,$nbjr,$dtpermis,$dtdep,$dtrtr,$annee,$lieu,$motif,$status){
$query  = $this->db->query("INSERT INTO permission(id_permi,im_permi,nbjr_permi,dtpermi_permi,dtdprt_permi,dtdrt_permi,annee_permi,lieu_permi,motif_permi,status_permi) VALUES (null,'".$im."','".$nbjr."','".$dtpermis."','".$dtdep."','".$dtrtr."','".$annee."','".$lieu."','".$motif."','".$status."')");
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}

}

public function congeListe(){
   #$val = 421089;
   $query = $this->db->query("SELECT * FROM conge");
   if($query->num_rows() > 0 ){
    return $query->result();
   }else{
    return false;
   }     
}

 public function congeCoursListe(){
   #$val = 421089;
    $encours = "En cours";
   $query = $this->db->query("SELECT * FROM conge WHERE status_conge='". $encours."'");
   if($query->num_rows() > 0 ){
    return $query->result();
   }else{
    return false;
   }     
}

public function congeValider($id_conge){
 $ok = "Valider";
 $sql = $this->db->query("UPDATE conge SET status_conge='".$ok."' WHERE id_conge='".$id_conge."' ");
 if($sql === true) {
        return true; 
    } else {
        return false;
    }
}

public function congeRejeter($id_conge){
 $ko = "Rejeter";
 $sql = $this->db->query("UPDATE conge SET status_conge='".$ko."' WHERE id_conge='".$id_conge."' ");
 if($sql === true) {
        return true; 
    } else {
        return false;
    }
}

public function update_all($annee){
  $zero =0;
  $query = $this->db->query("UPDATE congedroit SET auto_congedroit='".$zero."' WHERE annee_congedroit !=$annee ");
  $query = $this->db->query("UPDATE congedroit SET permi_congedroit='".$zero."' WHERE annee_congedroit !=$annee ");
}

public function deleteCongeV($im,$titre,$dtdec){
 $valider = "Valider";
 $delete = $this->db->query("DELETE FROM conge WHERE im_conge='".$im."' AND titre_conge='".$titre."' AND status_conge ='".$valider."' AND dtdec_conge ='".$dtdec."'");
 if($delete){
    return TRUE;
 }else{
    return FALSE;
 }
}

public function deleteCongeR($im,$titre,$dtdec){
    $rejeter = "Rejeter";
 $delete = $this->db->query("DELETE FROM conge WHERE im_conge='".$im."' AND titre_conge='".$titre."' AND status_conge ='".$rejeter."' AND dtdec_conge ='".$dtdec."' ");
 if($delete){
    return TRUE;
 }else{
    return FALSE;
 }

}

 public function congeRejeterxxx($im,$an,$dt){
 $ko="Rejeter";
 $this->db->query("UPDATE conge SET status_conge='".$ko."' WHERE im_conge='".$im."' AND titre_conge='".$an."' AND dtdec_conge='".$dt."'");
}

public function moisConge($im,$an,$jrs){
     $query = $this->db->query("SELECT * FROM congedroit WHERE im_congedroit='".$im."' AND annee_congedroit='".$an."'");
if($query->num_rows()){
    $val = $query->row()->nbjrs_congedroit;
    return $reste = $val - $jrs;
}else{
    return false;
   }  

}

public function moisConge2($im,$an,$jrs){
//$this->db->query("UPDATE congedroit SET status_conge='".$ko."' WHERE im_conge=$im AND titre_conge=$an");
$query = $this->db
             ->select('nbjrs_congedroit')
             ->from('congedroit')
             ->where(['im_congedroit'=>$im,'annee_congedroit'=>$an]);
   $query = $this->db->get();
if($query->num_rows()){
   $val = $query->row()->nbjrs_congedroit;
    return $reste = $val - $jrs; 
}else{
    return FALSE;
}
}

public function updateDroitActuel($im,$an,$rst){
     $this->db->query("UPDATE congedroit SET nbjrs_congedroit='".$rst."' WHERE im_congedroit=$im AND annee_congedroit=$an");
}

public function updateDroitPrecedent($im,$an,$rst){
        $this->db->query("UPDATE congedroit SET nbjrs_congedroit='".$rst."' WHERE im_congedroit=$im AND annee_congedroit=$an");

}

public function resteDecision($im,$an,$rst){
   $this->db->query("UPDATE congedroit SET nbjrs_congedroit='".$rst."' WHERE im_congedroit=$im AND annee_congedroit=$an");
}

public function comparerDate($im,$an){
    $query = $this->db
             ->select('dtrtr_conge')
             ->from('conge')
             ->where(['im_conge'=>$im,'titre_conge'=>$an]);
$query = $this->db->get();
if($query->num_rows()){
    return $p = $query->row()->dtrtr_conge;
}else{
    return FALSE;
}
}
/*
public function selectConge($im,$an,$dec){
$query = $this->db->query("SELECT dtrtr_conge FROM conge WHERE im_conge='".$im."' AND titre_conge='".$an."' AND dtdec_conge='".$dec."'");
if($query->num_rows() > 0 ){
    return $query->result();
}else{
    return false;
   }  
}
*/

public function selectDernierConge($b,$c,$h,$i){
  $query =$this->db->query("SELECT * FROM conge WHERE im_conge='".$b."' AND dtrtr_conge BETWEEN '".$h."' AND '".$i."' ");
  if($query->num_rows() > 0 ){
    return true;
}else{
    return false;
   }
}
/*
      $p = $query->row()->id_conge;
      $query2 = $this->db
            ->select('dtrtr_conge')
            ->from('conge')
            ->where(['id_conge'=>$p,'dtrtr_conge'>=$dt]);
      $query2 = $this->db->get();
if($query2->num_rows()){
   return $query2->row()->dtrtr_conge;
   $dta = $query->row()->dtrtr_conge;
   if($dta > $dt){
    return true;
   }else{
    return false;
   }
*/
   //eto tache farany
public function selectDernierCongePerso($im){
     $query = $this->db
             ->select_max('id_conge')
             ->from('conge')
             ->where(['im_conge'=>$im]);
     $query = $this->db->get();
if($query->num_rows()){
    $id = $query->row()->id_conge;
         $query2 = $this->db
             ->select_max('dtrtr_conge')
             ->from('conge')
             ->where(['id_conge'=>$id]);
         $query2 = $this->db->get();
  return $query2->row()->dtrtr_conge;
 }else{
   return false;
}
}

public function selectDecPrec($im,$an){
     $query = $this->db
             ->select('nbjrs_congedroit')
             ->from('congedroit')
             ->where(['im_congedroit'=>$im,'annee_congedroit'=>$an]);
$query = $this->db->get();
if($query->num_rows()){
    return $p = $query->row()->nbjrs_congedroit;
}else{
    return FALSE;
}

}

public function selectExist($im,$an){
     $query = $this->db->query("SELECT * FROM congedroit WHERE im_congedroit='".$im."' AND annee_congedroit='".$an."'");
if($query->num_rows() > 0 ){
    return $query->result();
}else{
    return false;
   }  

}

 public function addperso($a,$b,$b1,$c,$d,$e,$f,$g,$h){
      $queryVerifier = $this->db
             ->select('im_perso')
             ->from('personnel')
             ->where(['im_perso'=>$a]);
$queryVerifier = $this->db->get();
if($queryVerifier->num_rows()){
  return false;
}else{
$query  = $this->db->query("INSERT INTO personnel(id_perso,im_perso,nomPre_perso,sexe_perso,corps_perso,grade_perso,direction_perso,lieuService_perso,budget_perso,chapitreBudget_perso) VALUES (null,'".$a."','".$b."','".$b1."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."')");
if($this->db->affected_rows() > 0){
    return true;
}else{
    return false;
}
}
}

public function ListePersonnel(){
$query = $this->db->query("SELECT * FROM personnel ORDER BY nomPre_perso ASC");
if($query->num_rows() > 0 ){
    return $query->result();
}else{
    return false;
   }     
}

public function ListePerso(){
$sql = "SELECT * FROM personnel";
$query = $this->db->query($sql);
return $query->result_array();
}

public function ListeDecision(){
$sql = "SELECT * FROM congedroit ORDER BY annee_congedroit DESC";
$query = $this->db->query($sql);
return $query->result_array();
}

 public function ListeAutorisationPerso(){
$sql = "SELECT * FROM autorisation";
$query = $this->db->query($sql);
return $query->result_array();
}

 public function ListePermissionPerso(){
$sql = "SELECT * FROM permission";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeCongePerso(){
$sql = "SELECT * FROM conge";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listePaternitePerso(){
$sql = "SELECT * FROM paternite";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeMaternitePerso(){
$sql = "SELECT * FROM maternite";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeCongeAnnulerEncours(){
$encours = "En cours";
$sql = "SELECT * FROM conge WHERE status_conge='".$encours."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeAutorisationEncours(){
$encours = "En cours";
$sql = "SELECT * FROM autorisation WHERE status_auto='".$encours."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listePermissionEncours(){
$encours = "En cours";
$sql = "SELECT * FROM permission WHERE status_permi='".$encours."' ";
$query = $this->db->query($sql);
return $query->result_array();
}
public function listeCongeAnnulerValider(){
$valider = "Valider";
$sql = "SELECT * FROM conge WHERE status_conge='".$valider."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeAutorisationRejeter(){
$rejeter= "Rejeter";
$sql = "SELECT * FROM autorisation WHERE status_auto='".$rejeter."' ";
$query = $this->db->query($sql);
return $query->result_array();
}
public function listePermissionRejeter(){
$rejeter= "Rejeter";
$sql = "SELECT * FROM permission WHERE status_permi='".$rejeter."' ";
$query = $this->db->query($sql);
return $query->result_array();
}
public function listeAutorisationValider(){
$valider = "Valider";
$sql = "SELECT * FROM autorisation WHERE status_auto='".$valider."' ";
$query = $this->db->query($sql);
return $query->result_array();
}
public function listePermissionValider(){
$valider = "Valider";
$sql = "SELECT * FROM permission WHERE status_permi='".$valider."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeCongePaterniteEncours(){
$encours = "En cours";
$sql = "SELECT * FROM paternite WHERE status_patern='".$encours."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

 public function listeCongeMaterniteEncours(){
$encours = "En cours";
$sql = "SELECT * FROM maternite WHERE status_matern='".$encours."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeCongeMaterniteValider(){
$valider = "Valider";
$sql = "SELECT * FROM maternite WHERE status_matern='".$valider."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeCongeMaterniteRejeter(){
$rejeter = "Rejeter";
$sql = "SELECT * FROM maternite WHERE status_matern='".$rejeter."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeCongePaterniteValider(){
$valider = "Valider";
$sql = "SELECT * FROM paternite WHERE status_patern='".$valider."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function congePaterniteValider($id_patern = null){
$ok = "Valider";
$query = $this->db->query("UPDATE paternite SET status_patern='".$ok."' WHERE id_patern='".$id_patern."'");
if($query){
    return true;
}else{
    return false;
}
}

public function demandeAutorisationValider($id_auto = null){
$ok = "Valider";
$query = $this->db->query("UPDATE autorisation SET status_auto='".$ok."' WHERE id_auto='".$id_auto."'");
if($query){
    return true;
}else{
    return false;
}
}

public function demandeAutorisationRejeter($id_auto = null){
$ko = "Rejeter";
$query = $this->db->query("UPDATE autorisation SET status_auto='".$ko."' WHERE id_auto='".$id_auto."'");
if($query){
    return true;
}else{
    return false;
}
}

public function congeMaterniteValider($id_matern = null){
$ok = "Valider";
$query = $this->db->query("UPDATE maternite SET status_matern='".$ok."' WHERE id_matern='".$id_matern."'");
if($query){
    return true;
}else{
    return false;
}
}

public function congePaterniteRejeter($id_patern = null){
$ko = "Rejeter";
$query = $this->db->query("UPDATE paternite SET status_patern='".$ko."' WHERE id_patern='".$id_patern."'");
if($query){
    return true;
}else{
    return false;
}
}

public function congeMaterniteRejeter($id_matern = null){
$ko = "Rejeter";
$query = $this->db->query("UPDATE maternite SET status_matern='".$ko."' WHERE id_matern='".$id_matern."'");
if($query){
    return true;
}else{
    return false;
}
}

public function listeCongePaterniteRejeter(){
$rejeter = "Rejeter";
$sql = "SELECT * FROM paternite WHERE status_patern='".$rejeter."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function listeCongeAnnulerRejeter(){
$rejeter= "Rejeter";
$sql = "SELECT * FROM conge WHERE status_conge='".$rejeter."' ";
$query = $this->db->query($sql);
return $query->result_array();
}

public function deletePersonnel($id_perso = null){
      $query = $this->db
             ->select('im_perso')
             ->from('personnel')
             ->where(['id_perso'=>$id_perso]);
$query = $this->db->get();
if($query->num_rows()){
    $p = $query->row()->im_perso;
    $query1 = $this->db->query("DELETE FROM utilisateur WHERE im_user = '".$p."' ");
    $query2 = $this->db->query("DELETE FROM personnel WHERE id_perso = '".$id_perso."' ");
    return TRUE;
}else{
    return FALSE;
}

     // $sql = $this->db->query("SELECT im_perso FROM personnel WHERE id_perso='".$id_perso."'");
     // return $im  = $this->db->query($sql);
     // $query1 = $this->db->query("DELETE FROM personnel WHERE id_perso = '".$id_perso."' ");
    //  $query = $this->db->query($sql);
     // $query2 = $this->db->query("DELETE FROM utilisateur WHERE im_user = '".$im."' ");
     // return ($query1 == true) ? true : false;
}

public function deleteAutoValider($id_auto = null) {
if($id_auto) {
    $sql = "DELETE FROM autorisation WHERE id_auto = ?";
    $query = $this->db->query($sql, array($id_auto));
    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function deletedemandePermission($id_permi = null) {
if($id_permi) {
    $sql = "DELETE FROM permission WHERE id_permi = ?";
    $query = $this->db->query($sql, array($id_permi));
    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function deleteCongeValider($id_conge = null) {
if($id_conge) {
    $sql = "DELETE FROM conge WHERE id_conge = ?";
    $query = $this->db->query($sql, array($id_conge));

    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function selectMatricule($im_perso = null){

if($im_perso) {
    $sql = "SELECT * FROM personnel WHERE im_perso = ?";
    $query = $this->db->query($sql, array($im_perso));
    return $query->row_array();
}
} 

public function deletedemandeCongePerso($id_conge = null) {
if($id_conge) {
    $sql = "DELETE FROM conge WHERE id_conge = ?";
    $query = $this->db->query($sql, array($id_conge));

    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function annulerDemandeEncoursPerso($id_conge = null) {
if($id_conge) {
    $sql = "DELETE FROM conge WHERE id_conge = ?";
    $query = $this->db->query($sql, array($id_conge));
    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function annulerAutoEncours($id_auto = null) {
if($id_auto) {
    $sql = "DELETE FROM autorisation WHERE id_auto = ?";
    $query = $this->db->query($sql, array($id_auto));
    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function annulerPermiEncours($id_permi = null) {
if($id_permi) {
    $sql = "DELETE FROM permission WHERE id_permi = ?";
    $query = $this->db->query($sql, array($id_permi));
    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function annulerDemandeEncoursPatern($id_patern = null) {
if($id_patern) {
    $sql = "DELETE FROM paternite WHERE id_patern = ?";
    $query = $this->db->query($sql, array($id_patern));
    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function annulerDemandeEncoursMatern($id_matern = null) {
if($id_matern) {
    $sql = "DELETE FROM maternite WHERE id_matern = ?";
    $query = $this->db->query($sql, array($id_matern));
    // ternary operator
    return ($query === true) ? true : false;            
} // /if
}

public function editPersonnel($id,$a,$b,$b1,$c,$d,$e,$f,$g,$h) 
{
$sql = $this->db->query("UPDATE personnel SET im_perso='".$a."', nomPre_perso='".$b."',sexe_perso='".$b1."', corps_perso='".$c."', grade_perso='".$d."', direction_perso='".$e."', lieuService_perso='".$f."', budget_perso='".$g."', chapitreBudget_perso='".$h."' WHERE id_perso=$id");

if($sql === true) {
        return true; 
    } else {
        return false;
    }

}

public function editPaternitePerso($id,$dtpat,$dtdep,$dtrtr,$lieu,$encours) 
{
$sql = $this->db->query("UPDATE paternite SET dtpat_patern='".$dtpat."', dtdep_patern='".$dtdep."', dtdrt_patern='".$dtrtr."', lieu_patern='".$lieu."' , status_patern='".$encours."' WHERE id_patern=$id");

if($sql === true) {
        return true; 
    } else {
        return false;
    }

}

public function editAutorisationPerso($id,$dtauto,$nbjr,$dtdep,$dtrtr,$lieu,$motif,$encours) 
{
$sql = $this->db->query("UPDATE autorisation SET dtauto_auto='".$dtauto."', dtdprt_auto='".$dtdep."', dtdrt_auto='".$dtrtr."', lieu_auto='".$lieu."',nbjr_auto='".$nbjr."' , motif_auto='".$motif."' , status_auto='".$encours."' WHERE id_auto=$id");

if($sql === true) {
        return true; 
    } else {
        return false;
    }

}

public function editPermissionPerso($id,$dtpermi,$nbjr,$dtdep,$dtrtr,$lieu,$motif,$encours) 
{
$sql = $this->db->query("UPDATE permission SET dtpermi_permi='".$dtpermi."', dtdprt_permi='".$dtdep."', dtdrt_permi='".$dtrtr."', lieu_permi='".$lieu."',nbjr_permi='".$nbjr."' , motif_permi='".$motif."' , status_permi='".$encours."' WHERE id_permi=$id");

if($sql === true) {
        return true; 
    } else {
        return false;
    }

}

public function updateAuto($im,$annee,$reste)
{
$sql = $this->db->query("UPDATE congedroit SET auto_congedroit='".$reste."' WHERE im_congedroit=$im AND annee_congedroit=$annee");

if($sql === true) {
        return true; 
    } else {
        return false;
    }

}

public function editMaternitePerso($id,$dtpat,$dtdep,$dtrtr,$lieu,$encours) 
{
$sql = $this->db->query("UPDATE maternite SET dtmat_matern='".$dtpat."', dtdep_matern='".$dtdep."', dtdrt_matern='".$dtrtr."', lieu_matern='".$lieu."' , status_matern='".$encours."' WHERE id_matern='".$id."' ");

if($sql === true) {
        return true; 
    } else {
        return false;
    }

}

public function selectPersonnelEdit($id_perso = null) 
{
if($id_perso) {
    $sql = "SELECT * FROM personnel WHERE id_perso = ?";
    $query = $this->db->query($sql, array($id_perso));
    return $query->row_array();
}
}

public function selectPaterniteEdit($id_patern = null) 
{
if($id_patern) {
    $sql = "SELECT * FROM paternite WHERE id_patern = ?";
    $query = $this->db->query($sql, array($id_patern));
    return $query->row_array();
}
}

public function selectMaterniteEdit($id_matern = null) 
{
if($id_matern) {
    $sql = "SELECT * FROM maternite WHERE id_matern = ?";
    $query = $this->db->query($sql, array($id_matern));
    return $query->row_array();
}
}


public function selectNumDec($im=null) 
{
if($im) {
    $sql = "SELECT * FROM congedroit WHERE im_congedroit = ?";
    $query = $this->db->query($sql, array($im));
    
      return $query->row_array();
   
}
}
public function selectCongeEncoursEdit($id_conge = null) 
{
if($id_conge) {
    $sql = "SELECT * FROM conge WHERE id_conge = ?";
    $query = $this->db->query($sql, array($id_conge));
    return $query->row_array();
}
}

public function selectAutoEncoursEdit($id_auto = null) 
{
if($id_auto) {
    $sql = "SELECT * FROM autorisation WHERE id_auto = ?";
    $query = $this->db->query($sql, array($id_auto));
    return $query->row_array();
}
}

public function selectPermiEncoursEdit($id_permi = null) 
{
if($id_permi) {
    $sql = "SELECT * FROM permission WHERE id_permi = ?";
    $query = $this->db->query($sql, array($id_permi));
    return $query->row_array();
}
}

public function selectCongeValider($id_conge = null) 
{
if($id_conge) {
    $sql = "SELECT * FROM conge WHERE id_conge = ?";
    $query = $this->db->query($sql, array($id_conge));
    return $query->row_array();
}
}

public function selectAutoValider($id_auto = null) 
{
if($id_auto) {
    $sql = "SELECT * FROM autorisation WHERE id_auto = ?";
    $query = $this->db->query($sql, array($id_auto));
    return $query->row_array();
}
}

public function selectPaterniteValider($id_patern = null) 
{
if($id_patern) {
    $sql = "SELECT * FROM paternite WHERE id_patern = ?";
    $query = $this->db->query($sql, array($id_patern));
    return $query->row_array();
}
}

public function selectMaterniteValider($id_matern = null) 
{
if($id_matern) {
    $sql = "SELECT * FROM maternite WHERE id_matern = ?";
    $query = $this->db->query($sql, array($id_matern));
    return $query->row_array();
}
}

public function selectPaterniteRejeter($id_patern = null) 
{
if($id_patern) {
    $sql = "SELECT * FROM paternite WHERE id_patern = ?";
    $query = $this->db->query($sql, array($id_patern));
    return $query->row_array();
}
}

public function selectMaterniteRejeter($id_matern = null) 
{
if($id_matern) {
    $sql = "SELECT * FROM maternite WHERE id_matern = ?";
    $query = $this->db->query($sql, array($id_matern));
    return $query->row_array();
}
}

public function nomDec($im){
    $query = $this->db
             ->select('nomPre_perso')
             ->from('personnel')
             ->where(['im_perso'=>$im]);
$query = $this->db->get();
if($query->num_rows()){
    return $p = $query->row()->nomPre_perso;
}else{
    return FALSE;
}
}

public function addDecision($a,$b,$c,$d,$e,$f,$g){
    $query  = $this->db->query("INSERT INTO congedroit(id_congedroit,num_congedroit,im_congedroit,nomPre_congedroit,nbjrs_congedroit,auto_congedroit,permi_congedroit,annee_congedroit) VALUES (null,'".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."')");
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}
}

public function deleteDecision($id_congedroit){
 $query = $this->db->query("DELETE FROM congedroit WHERE id_congedroit='".$id_congedroit."'");
 if($query){
    return TRUE;
 }else{
    return FALSE;
 }

}

    
public function selectDroit($im,$titre){
     $query = $this->db
             ->select('nbjrs_congedroit')
             ->from('congedroit')
             ->where(['im_congedroit'=>$im,'annee_congedroit'=>$titre]);
   $query = $this->db->get();
if($query->num_rows()){
    return $query->row()->nbjrs_congedroit;
}else{
    return FALSE;
}
     
}

public function selectDemande($im,$titre,$val){
    $encour = "En cours";
    $query = $this->db
             ->select('nbjrs_conge')
             ->from('conge')
             ->where(['im_conge'=>$im,'titre_conge'=>$titre,'status_conge'=>$encour]);
   $query = $this->db->get();
if($query->num_rows()){
    return $query->row()->nbjrs_conge;
}else{
    return FALSE;
} 
     
}

public function demandeCongeAnnuelModifier($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$id_conge){
 $query = $this->db->query("UPDATE conge SET numdec_conge='".$a."',im_conge='".$b."',titre_conge='".$c."',motif_conge='".$d."',nbjrs_conge='".$e."',lieu_conge='".$f."',dtdec_conge='".$g."',dtdep_conge='".$h."',dtrtr_conge='".$i."',status_conge='".$j."' WHERE id_conge='".$id_conge."'");
 if($query){
    return true;
 }else{
    return false;
 }
}

public function resteDec($im,$titre,$sous){
 $this->db->query("UPDATE congedroit SET nbjrs_congedroit='".$sous."' WHERE im_congedroit='".$im."' AND annee_congedroit='".$titre."'");
}

public function paternValider($im,$an,$dt){
    $ok = "Valider";
    $encours = "En cours";
 $this->db->query("UPDATE paternite SET status_patern='".$ok."' WHERE im_patern='".$im."' AND annee_patern='".$an."' AND dtpat_patern='".$dt."' AND status_patern='".$encours."'");

}

public function paternRejeter($im,$an,$dt){
    $ko = "Rejeter";
    $encours = "En cours";
 $this->db->query("UPDATE paternite SET status_patern='".$ko."' WHERE im_patern='".$im."' AND annee_patern='".$an."' AND dtpat_patern='".$dt."' AND status_patern='".$encours."'");
}

 public function maternValider($im,$an,$dt){
    $ok = "Valider";
    $encours = "En cours";
 $this->db->query("UPDATE maternite SET status_matern='".$ok."' WHERE im_matern='".$im."' AND annee_matern='".$an."' AND dtmat_matern='".$dt."' AND status_matern='".$encours."'");

}

public function maternRejeter($im,$an,$dt){
    $ko = "Rejeter";
    $encours = "En cours";
 $this->db->query("UPDATE maternite SET status_matern='".$ko."' WHERE im_matern='".$im."' AND annee_matern='".$an."' AND dtmat_matern='".$dt."' AND status_matern='".$encours."'");
}


/*--------------------------------------Côté Personnel--------------------------------------*/
public function selectDec($b,$c){
    $query = $this->db->query("SELECT * FROM  congedroit WHERE im_congedroit='".$b."' AND annee_congedroit='".$c."'");
if($query->num_rows() > 0 ){
    return $query->result();
}else{
    return false;
   }   
}

public function demandeConge($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
$query  = $this->db->query("INSERT INTO conge(id_conge,numdec_conge,im_conge,titre_conge,motif_conge,nbjrs_conge,lieu_conge,dtdec_conge,dtdep_conge,dtrtr_conge,status_conge) VALUES (null,'".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."')");
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}
}

public function selectExiste($b,$c){

$query = $this->db->query("SELECT * FROM  congedroit WHERE im_congedroit='".$b."' AND annee_congedroit='".$c."'");
if($query->num_rows() > 0 ){
    return $query->result();
}else{
    return false;
   }   
}

public function selectSuffit($a,$c){
    $query = $this->db
             ->select('nbjrs_congedroit')
             ->from('congedroit')
             ->where(['im_congedroit'=>$a,'annee_congedroit'=>$c]);
   $query = $this->db->get();
if($query->num_rows()){
    return $query->row()->nbjrs_congedroit;
}else{
    return FALSE;
}

}

public function selectSuffitauto($a,$c){
    $query = $this->db
             ->select('auto_congedroit')
             ->from('congedroit')
             ->where(['im_congedroit'=>$a,'annee_congedroit'=>$c]);
   $query = $this->db->get();
if($query->num_rows()){
    return $query->row()->auto_congedroit;
}else{
    return FALSE;
}

}

public function selectSuffitpermi($a,$c){
    $query = $this->db
             ->select('permi_congedroit')
             ->from('congedroit')
             ->where(['im_congedroit'=>$a,'annee_congedroit'=>$c]);
   $query = $this->db->get();
if($query->num_rows()){
    return $query->row()->permi_congedroit;
}else{
    return FALSE;
}

}

public function selectdroitauto($a,$c){
    $query = $this->db
             ->select('*')
             ->from('congedroit')
             ->where(['im_congedroit'=>$a,'annee_congedroit'=>$c]);
   $query = $this->db->get();
if($query->num_rows()){
    return  TRUE;
}else{
    return FALSE;
}

}

public function selectdroitpermi($a,$c){
    $query = $this->db
             ->select('*')
             ->from('congedroit')
             ->where(['im_congedroit'=>$a,'annee_congedroit'=>$c]);
   $query = $this->db->get();
if($query->num_rows()){
    return  TRUE;
}else{
    return FALSE;
}

}

public function getPersonnel($im){
    $query = $this->db->query("SELECT * FROM personnel WHERE im_perso=$im ");
if($query->num_rows() > 0 ){
    return $query->result();
}else{
    return false;
   }   
}

public function annulerDmd($im,$titre,$dtdec){
 $encour = "En cours";
 $delete = $this->db->query("DELETE FROM conge WHERE im_conge='".$im."' AND titre_conge='".$titre."' AND status_conge ='".$encour."' AND dtdec_conge ='".$dtdec."'");
 if($delete){
    return TRUE;
 }else{
    return FALSE;
 }

}

public function selectSexe($im){
     $query = $this->db
             ->select('sexe_perso')
             ->from('personnel')
             ->where(['im_perso'=>$im]);
   $query = $this->db->get();
if($query->num_rows()){
    return $query->row()->sexe_perso;
}else{
    return FALSE;
}

}

public function addPatern($a,$b,$c,$e,$d,$f,$h,$g,$i){
$query  = $this->db->query("INSERT INTO paternite(id_patern,im_patern,annee_patern,nbjrs_patern,dtpat_patern,dtdep_patern,dtdrt_patern,lieu_patern,status_patern,motif_patern) VALUES (null,'".$a."','".$b."','".$c."','".$e."','".$d."','".$f."','".$h."','".$g."','".$i."')");
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}

}

 public function addMatern($im,$annee,$nbjrs,$datmat,$datedep,$dtrtr,$lieu,$status,$motif){
    $encours ="En cours";
$query  = $this->db->query("INSERT INTO maternite(id_matern,im_matern,annee_matern,nbjrs_matern,dtmat_matern,dtdep_matern,dtdrt_matern,lieu_matern,status_matern,motif_matern) VALUES (null,'".$im."','".$annee."','".$nbjrs."','".$datmat."','".$datedep."','".$dtrtr."','".$lieu."','".$status."','".$motif."')");
if($this->db->affected_rows() > 0){
    return TRUE;
}else{
    return FALSE;
}

}

public function listeMaterniteAdmin(){
$query = $this->db->query("SELECT * FROM maternite ");
if($query->num_rows() > 0 ){
    return $query->result();
}else{
    return false;
   }   

}
//Fin de traitement
}

?>