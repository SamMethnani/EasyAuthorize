<?php
 include("entities/Auths.php");

 Class OrgAuth_core{

 public function auths ()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=user&action=signin_signup_user");}
  else{ 
  	$table= Auths::allbyid($_SESSION['unique_id']);
  	require_once('views/org_all_auths.php');}
  }
  public function new_auth()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=user&action=signin_signup_user");}
  else{
  
  	 require_once('views/OrgAuth.php');
  }}
  public function add_Auth(){
  	if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=user&action=signin_signup_user");}
  else{
  	if($_POST['reason']=="Other"){$status="Pending";}
  	else {$status="Approved";}

  	 $reason = $_POST['reason'];
  	
   $coment = $_POST['coment'];
   $time = $_POST['time'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $time2 = $_POST['time2'];
   $state2 = $_POST['state2'];
   $city2 = $_POST['city2'];
    $action_type=$_POST['action_type'];
   $piece_jointe= $_POST['piece_jointe'];

    $Auths= Auths::ajouter("Organization",$reason,$coment,$time,$time2,$state,$state2,$city,$city2,$action_type,$piece_jointe,$status);
	header("location:?core=OrgAuth&action=auths");
  }}
}

 ?>