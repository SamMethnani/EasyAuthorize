<?php
 include("entities/Auths.php");

 Class IndivAuth_core{

 public function auths ()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
  else{ 
  	$table= Auths::allbyid($_SESSION['unique_id']);
  	require_once('views/all_auths.php');}
  }
  public function new_auth()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
  else{
  
  	 require_once('views/IndivAuth.php');
  }}
  public function add_Auth(){
  	if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
  else{
  	if($_POST['reason']=="Other"){$status="Pending";}
  	else {$status="Approved";}
  	if($_SESSION['role']=="Individual")
  		{
  $reason = $_POST['reason'];  	
   $coment = $_POST['coment'];
   $time = $_POST['time'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $time2 = $_POST['time2'];
   $state2 = $_POST['state2'];
   $city2 = $_POST['city2'];


    $Auths= Auths::ajouter("Individual",$reason,$coment,$time,$time2,$state,$state2,$city,$city2,"NULL","NULL",$status,$_SESSION['unique_id']);
	header("location:?core=IndivAuth&action=auths");}
	else if($_SESSION['role']=="Organization")
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
   if($action_type)
    $Auths= Auths::ajouter("Organization",$reason,$coment,$time,$time2,$state,$state2,$city,$city2,$action_type,$piece_jointe,$status);
	header("location:?core=IndivAuth&action=auths");
  }}






 }
 ?>