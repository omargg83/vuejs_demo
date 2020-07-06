<?php
class Sagyc{
  public function __construct(){
    date_default_timezone_set("America/Mexico_City");
    try{
      $this->Salud = array();
      $this->dbh = new PDO('mysql:host=sagyc.com.mx;dbname=sagycrmr_apasear', "sagyccom_esponda", "esponda123$");
    }
    catch(PDOException $e){
      return "Database access FAILED!";
    }
  }
  public function set_names(){
    return $this->dbh->query("SET NAMES 'utf8'");
  }
}
function clean_var($val){
  $val=htmlspecialchars(strip_tags(trim($val)));
  return $val;
}
$db = new Sagyc();

?>
