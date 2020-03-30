<?PHP 
        
class Client {
  protected $id;
  private $role;
 private $nationality;
  private $unique_id;
  private $name;
  private $last_name;
  private $password;
 // private $state;
 // private $city;
 // private $police_station;

  
 /*******************************/
public function __construct( $id,$role,$nationality,$unique_id,$name,$last_name,$password)
{  $this->id=$id;
   $this->role=$role;
   $this->nationality=$nationality;
   $this->unique_id=$unique_id;
   $this->name=$name;
   $this->last_name=$last_name;
    $this->password=$password;
   }
  /**********************************/
   public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id=$id;
  }
 public function getRole(){
    return $this->role;
  }
 public function setRole($role){
    $this->role=$role;
  }
   public function getNationality(){
    return $this->nationality;
  }
 public function setNationality($nationality){
    $this->nationality=$nationality;
  }
  public function getUnique_id(){
    return $this->unique_id;
  }
 public function setUnique_id($unique_id){
    $this->unique_id=$unique_id;
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
  public function getPassword(){
    return $this->password;
  }
 public function setPassword($password){
    $this->password=$password;
  }
public static function ajouter( $role,$nationality,$unique_id,$name,$last_name,$password)
  {
    $db=Db::getInstance();
     $qry =$db->exec("INSERT INTO client(role,nationality,unique_id,name,last_name,password)
    VALUES ('$role','$nationality','$unique_id','$name','$last_name','$password')");
 }

   public static function verif($unique_id,$password) {
      $liste = [];
      $db = Db::getInstance();
      $req = $db->query("SELECT * from client WHERE ( (unique_id='".$unique_id."') AND (password='".$password."'))");
      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $client) {//foreach: for  // //fetchall->tableau d'après les infos brutes dans l'objet
      $liste[] = new client( $client['id'],$client['role'],$client['nationality'],$client['unique_id'],$client['name'],$client['last_name'],$client['password']);
      }
      return $liste[0];
    } 


  


}