<?PHP 
        
class User {
  protected $id;
  private $name;
 private $last_name;
  private $username;
  private $password;
 // private $location_id;
  private $location_type;
  private $unique_id;
 // private $state;
 // private $city;
 // private $police_station;

  
 /*******************************/
public function __construct( $id,$name,$last_name,$username,$password,$location_type,$unique_id)
{  $this->id=$id;
   $this->name=$name;
   $this->last_name=$last_name;
   $this->username=$username;
   $this->password=$password;
    $this->location_type=$location_type;
    $this->unique_id=$unique_id;
   }
  /**********************************/
   public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id=$id;
  }
 public function getName(){
    return $this->name;
  }
 public function setName($name){
    $this->name=$name;
  }
   public function getLast_name(){
    return $this->last_name;
  }
 public function setLast_name($last_name){
    $this->last_name=$last_name;
  }
  public function getUsername(){
    return $this->username;
  }
 public function setUsername($username){
    $this->username=$username;
  }
  public function getPassword(){
    return $this->password;
  }
 public function setPassword($password){
    $this->password=$password;
  }/*
  public function getLocation_id(){
    return $this->location_id;
  }
 public function setLocation_id($location_id){
    $this->location_id=$location_id;
  }*/
  public function getLocation_type(){
    return $this->location_type;
  }
 public function setLocation_type($location_type){
    $this->location_type=$location_type;
  }
  public function getUnique_id(){
    return $this->unique_id;
  }
 public function setUnique_id($unique_id){
    $this->unique_id=$unique_id;
  }
public static function ajouter($name,$last_name,$username,$password,$location_type,$unique_id)
  {
    $db=Db::getInstance();
     $qry =$db->exec("INSERT INTO user(name,last_name,username,password,location_type,unique_id)
    VALUES ('$name','$last_name','$username','$password','$location_type','$unique_id')");
 }

   public static function verif($username,$password) {
      $liste = [];
      $db = Db::getInstance();
      $req = $db->query("SELECT * from user WHERE ( (username='".$username."') AND (password='".$password."'))");
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $user) {//foreach: for  // //fetchall->tableau d'après les infos brutes dans l'objet
      $liste[] = new user( $user['id'],$user['name'],$user['last_name'],$user['username'],$user['password'],$user['location_type'],$user['unique_id']);
      }
      return $liste[0];
    } 


  


}