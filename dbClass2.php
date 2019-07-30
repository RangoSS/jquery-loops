
<?php
class Connecting {

  var $host="localhost";
  var $user="root";
  var $password="";
  var $db_table="sms_data";


  public function getConnection(){

  $conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_table) or die("u are not connected");

  /*if(!$this->conn){
    echo("you are not connected bro");
  }
  */
   // print_r($conn);
  return $conn;

}



public function queryConn($query){

    $conn=$this->getConnection();
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

   return $result; 
}
}
///////////////////extends//////////////////////////////////////////////////
class getingData extends Connecting{

     

    var $first_name="";
     var $last_name="";
     var $cellphone="";
     var $job="";
     var $email="";
     var $password="";

    


  function myResults(){
   

//$totalentries = $this->getTotalEntries();
$valid = $this->getValid();

$result = array('Valid'=>$valid);
 
echo json_encode($result); 
}



function getValid(){
   $count=array();
  $strings="SELECT cellphone,date_logged,raw_text,response_id FROM sms_entries 
  WHERE DATE(date_logged) BETWEEN '2019-06-01' AND '2019-06-02' AND response_id=1"; 

     $res=$this->queryConn($strings); 
   while($row=mysqli_fetch_assoc($res)){
    //print_r($row);
    $count[]=$row;
     
}
return $count;
}

function insertNew(){
  $strings="INSERT INTO user(first_name,last_name,cellphone,job,email,password) 
                      VALUES('$this->first_name','$this->last_name','$this->cellphone','$this->job','$this->email','$this->password')";
  $res=$this->queryConn($strings);
  
   if($res){
  echo "one row has been inserted";
}else{
  echo "something wrong in your inputbox";
}
}

}

  






     
 if(isset($_POST['action']))
{
  $action = $_POST['action'];

  if($action == 'myResults')
  {
        

         $api_object=new getingData();
    $api_object->myResults();
  }
  if($action =='insertNew'){

         $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $cellphone=$_POST['cellphone'];
      $job=$_POST['job'];
      $email=$_POST['email'];
      $password=$_POST['password'];

         $api_object=new getingData();
         $api_object->insertNew();
  }
 
}   

?>   
    
   




