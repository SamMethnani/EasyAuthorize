<?PHP 
        
class Auths {
  protected $id;
  private $role;
 private $reason;
  private $coment;
  private $start_datetime;
  private $end_datetime;
  private $start_state;
  private $end_state;
  private $start_city;
  private $end_city;
  private $action_type;
  private $piece_jointe;
   private $status;
   private $client_id;


 // private $police_station;

  
 /*******************************/
public function __construct( $id,$role,$reason,$coment,$start_datetime,$end_datetime,$start_state,$end_state,$start_city,$end_city,$action_type,$piece_jointe,$status,$client_id)
{  $this->id=$id;
   $this->role=$role;
   $this->reason=$reason;
   $this->coment=$coment;
   $this->start_datetime=$start_datetime;
   $this->end_datetime=$end_datetime;
   $this->start_state=$start_state;
   $this->end_state=$end_state;
   $this->start_city=$start_city;
   $this->end_city=$end_city;
   $this->action_type=$action_type;
   $this->piece_jointe=$piece_jointe;
   $this->status=$status;
   $this->client_id=$client_id;
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
   public function getReason(){
    return $this->reason;
  }
 public function setReason($reason){
    $this->reason=$reason;
  }
  public function getComent(){
    return $this->coment;
  }
 public function setComent($coment){
    $this->coment=$coment;
  }
  public function getStart_datetime(){
    return $this->start_datetime;
  }
 public function setStart_datetime($start_datetime){
    $this->start_datetime=$start_datetime;
  }
  public function getEnd_datetime(){
    return $this->end_datetime;
  }
 public function setEnd_datetime($end_datetime){
    $this->end_datetime=$end_datetime;
  }
  public function getStart_state(){
    return $this->start_state;
  }
 public function setStart_state($start_state){
    $this->start_state=$start_state;
  }
  public function getStart_city(){
    return $this->start_city;
  }
 public function setStart_city($start_city){
    $this->start_city=$start_city;
  }
  public function getEnd_city(){
    return $this->end_city;
  }
 public function setEnd_city($end_city){
    $this->end_city=$end_city;
  }
  public function getAction_type(){
    return $this->action_type;
  }
 public function setAction_type($action_type){
    $this->action_type=$action_type;
  }
  public function getPiece_jointe(){
    return $this->piece_jointe;
  }
 public function setPiece_jointe($piece_jointe){
    $this->piece_jointe=$piece_jointe;
  }
   public function getStatus(){
    return $this->status;
  }
 public function setStatus($status){
    $this->status=$status;
  }
  public function getClient_id(){
    return $this->client_id;
  }
 public function setClient_id($client_id){
    $this->client_id=$client_id;
  }


public static function ajouter( $role,$reason,$coment,$start_datetime,$end_datetime,$start_state,$end_state,$start_city,$end_city,$action_type,$piece_jointe,$status,$client_id)
  { 
    $db=Db::getInstance();
     $qry =$db->exec("INSERT INTO authorization(role, reason, coment, start_datetime, end_datetime,start_state,end_state,start_city,end_city,action_type,piece_jointe,status,client_id)
    VALUES ('$role','$reason','$coment','$start_datetime','$end_datetime','$start_state','$end_state','$start_city','$end_city','$action_type','$piece_jointe','$status','$client_id')");
  
 }


public static function all() {
      $liste = [];
      $db = Db::getInstance();
       //var_dump($results);

       $results =$db->query("SELECT * from authorization  order by id");
      // we create a list of Post objects from the database results
      

      foreach($results->fetchAll() as $auth)
       {//foreach: for  // //fetchall->tableau d'après les infos brutes dans l'objet
     $liste[] = new Auths( $auth['id'],$auth['role'],$auth['reason'],$auth['coment'],$auth['start_datetime'],$auth['end_datetime'],$auth['start_state'],$auth['end_state'],$auth['start_city'],$auth['end_city'],$auth['action_type'],$auth['piece_jointe'],$auth['status'], $auth['client_id']);
      }
      return $liste;
    }

    public static function allbyid($client_id) {
      $liste = [];
      $db = Db::getInstance();
       //var_dump($results);

       $results =$db->query("SELECT * from authorization WHERE client_id='".$client_id."'" );

      foreach($results->fetchAll() as $auth)
       {//foreach: for  // //fetchall->tableau d'après les infos brutes dans l'objet
     $liste[] = new Auths( $auth['id'],$auth['role'],$auth['reason'],$auth['coment'],$auth['start_datetime'],$auth['end_datetime'],$auth['start_state'],$auth['end_state'],$auth['start_city'],$auth['end_city'],$auth['action_type'],$auth['piece_jointe'],$auth['status'],$auth['client_id']);
      }
      return $liste;
    }
    

 public static function updateApprove($id){
   $db=Db::getInstance();
  $qry =$db->exec("UPDATE  authorization SET  status='Approved' WHERE id='".$id."' ");
  echo $qry;
 }
 public static function updateRej($id){
   $db=Db::getInstance();
  $qry =$db->exec("UPDATE  authorization SET  status='Rejected' WHERE id='".$id."' ");
  echo $qry;
 }

}