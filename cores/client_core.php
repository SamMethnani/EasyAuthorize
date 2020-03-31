<?php
 include("entities/Client.php");

 Class client_core{

  public function signin_signup ()
  {  
  require_once('views/signin_signup.php');}

    public function logout ()
  {  session_unset();
   session_destroy();
  	require_once('views/signin_signup.php');}
  	
   public function sign_up ()
  { 
   $name = $_POST['Name'];
   $password = $_POST['password'];
   $LastName = $_POST['LastName'];
   $password2 = $_POST['password2'];
   $unique_id = $_POST['unique_id'];
   $Country = $_POST['Country'];
   $role = $_POST['role'];

   
   if ($password!=$password2) {
    ?>
      <script>
       Javascript:alert('check your password!')
       document.location.replace("?core=client&action=signin_signup");
       </script>
    <?php 
	} 
	else 
  	{ $client= Client::ajouter($role,$Country,$unique_id,$name,$LastName,$password);


    if(!empty($client)){  ?>
      <script>
       Javascript:alert('sign up succeded ')
       document.location.replace("?core=client&action=signin_signup");
       </script>
    <?php }
    else 
	{  ?>
      <script>
       Javascript:alert('sign up not completed '+ $name )
       document.location.replace("?core=client&action=signin_signup");
       </script>
    <?php }}

  }


	public function sign_in()
  {$password = $_POST['password'];
   $unique_id = $_POST['unique_id'];
   $client= Client::verif($unique_id,$password);
    if(empty($client))
    {
        ?>
      <script>
       Javascript:alert('check your Identification or password!')
       document.location.replace("?core=client&action=signin_signup");
       </script>
    <?php 
    }
    elseif($client->getRole()=="Individual"){
    	 $_SESSION['role'] ="Individual";
                $_SESSION['unique_id'] = $client->getUnique_id();
                $_SESSION['name'] = $client->getName();
   require_once('views/IndivAuth.php');}
    elseif($client->getRole()=="Organization"){
      $_SESSION['role'] ="Individual";
      $_SESSION['unique_id'] = $client->getUnique_id();
      $_SESSION['name'] = $client->getName();
   require_once('views/OrgAuth.php');}
}



}
?>