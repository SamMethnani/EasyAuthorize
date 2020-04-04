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

  public function auths_ar ()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup_ar");}
  else{ 
    $table= Auths::allbyid($_SESSION['unique_id']);
    require_once('views/all_auths_ar.php');}
  }

  public function new_auth()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
  else{
  
  	 require_once('views/IndivAuth.php');
  }}

  public function new_auth_ar()
  { if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup_ar");}
  else{
  
     require_once('views/IndivAuth_ar.php');
  }}
  public function add_Auth(){
  	if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup");}
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


    $Auths= Auths::ajouter("Individual",$reason,$coment,$time,$time2,$state,$state2,$city,$city2,"NULL","NULL",$status,$_SESSION['unique_id']);
	header("location:?core=IndivAuth&action=auths");
	}}

  public function add_Auth_ar(){
    if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=client&action=signin_signup_ar");}
  else{
    if($_POST['reason']=="آخر"){$status="قيد الانتظار";}
    else {$status="موافق ";}
 
  $reason = $_POST['reason'];   
   $coment = $_POST['coment'];
   $time = $_POST['time'];
   $state = $_POST['state'];
   $city = $_POST['city'];
   $time2 = $_POST['time2'];
   $state2 = $_POST['state2'];
   $city2 = $_POST['city2'];


    $Auths= Auths::ajouter("Individual",$reason,$coment,$time,$time2,$state,$state2,$city,$city2,"NULL","NULL",$status,$_SESSION['unique_id']);
  header("location:?core=IndivAuth&action=auths_ar");
  }}

 }
 ?>