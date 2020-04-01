<?php
 include("entities/User.php");
 include("entities/auths.php");

 Class user_core{

  public function signin_signup_user ()
  {  
  require_once('views/signin_signup_user.php');}

    public function logout ()
  {  session_unset();
   session_destroy();
  	require_once('views/signin_signup_user.php');}

public function  updateApprove(){
    if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=user&action=signin_signup_user");}
  else{ 
  $user= Auths::updateApprove($_GET['id']);
    $table= Auths::all();
   require_once('views/userdash.php');
}}
public function  updateRej(){
    if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=user&action=signin_signup_user");}
  else{ 
  $user= Auths::updateRej($_GET['id']);
    $table= Auths::all();
   require_once('views/userdash.php');}
}

   public function sign_up_user ()
  { 
   $name = $_POST['Name'];
   $LastName = $_POST['LastName'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password2 = $_POST['password2'];
   //$location_id = $_POST['location_id'];
   $location_type = $_POST['location_type'];
   $unique_id = $_POST['unique_id'];
   
   
   if ($password!=$password2) {
    ?>
      <script>
       Javascript:alert('check your password!')
       document.location.replace("?core=user&action=signin_signup_user");
       </script>
    <?php 
	} 
	else 
  	{ $user= User::ajouter($name,$LastName,$username,$password,$location_type,$unique_id);
	require_once('views/signin_signup_user.php');}}


	public function sign_in_user()
  {$password = $_POST['password'];
   $username = $_POST['username'];
   $user= User::verif($username,$password);
    if(empty($user))
    {
        ?>
      <script>
       Javascript:alert('check your Identification or password!')
       document.location.replace("?core=user&action=signin_signup_user");
       </script>
    <?php 
    }
    else{
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['unique_id'] = $user->getUnique_id();
                $table= Auths::all();
   require_once('views/userdash.php');}
}



  public function userdash(){
     if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=user&action=signin_signup_user");}
  else{ 
      $table= Auths::all();
 require_once('views/userdash.php');}
}


  public function statistics(){
     if(!isset($_SESSION['unique_id']))
  {
  header("location:?core=user&action=signin_signup_user");}
  else{ 
         $table= Auths::allDISTINCT();
          
    
          $auths= Auths:: nbr_auths();
        
 require_once('views/statistics.php');}
}




}
?>