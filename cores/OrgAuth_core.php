<?php
 include("entities/Auths.php");

 Class OrgAuth_core{

 public function auths ()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
  else{ 
  	$table= Auths::allbyid($_SESSION['unique_id']);
  	require_once('views/org_all_auths.php');}
  }
  public function new_auth()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
  else{
  
  	 require_once('views/OrgAuth.php');
  }}
  public function add_Auth(){
  	if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
  else{
    
    $status="Pending";
  	$action_type = $_POST['reason']; 	
   $coment = $_POST['coment'];
   $time = $_POST['time'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $time2 = $_POST['time2'];
   $state2 = $_POST['state2'];
   $city2 = $_POST['city2'];
   $reason = $_POST['reason'];
    //$action_type=$_POST['action_type'];
   $piece_jointe= $_POST['coment'];

    $Auths= Auths::ajouter("Organization",$reason,$coment,$time,$time2,$state,$state2,$city,$city2,$action_type,$piece_jointe,$status,$_SESSION['unique_id']);
	header("location:?core=OrgAuth&action=auths");
  }}


   public function auths_ar ()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup_ar");}
  else{ 
    $table= Auths::allbyid($_SESSION['unique_id']);
    require_once('views/org_all_auths_ar.php');}
  }
  public function new_auth_ar()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup_ar");}
  else{
  
     require_once('views/OrgAuth_ar.php');
  }}
  public function add_Auth_ar(){
    if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup_ar");}
  else{
    
    $status="قيد الانتظار";
    $action_type = $_POST['reason'];  
   $coment = $_POST['coment'];
   $time = $_POST['time'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $time2 = $_POST['time2'];
   $state2 = $_POST['state2'];
   $city2 = $_POST['city2'];
    $reason = $_POST['reason'];
    //$action_type=$_POST['action_type'];
   $piece_jointe= $_POST['coment'];

    $Auths= Auths::ajouter("Organization",$reason,$coment,$time,$time2,$state,$state2,$city,$city2,$action_type,$piece_jointe,$status,$_SESSION['unique_id']);
  header("location:?core=OrgAuth&action=auths_ar");
  }}
}

 ?>