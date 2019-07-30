
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

     var $date_from="";
     var $date_to="";

    function __construct($malo,$mamba){

     $this->date_from=$malo;
    $this->date_to=$mamba;

  /*$this->date_from=$_POST['date_from'];
    $this->date_to=$_POST['date_to'];*/
}


  function myResults(){
   

$totalentries = $this->getTotalEntries();
$valid = $this->getValid();
$invalid=$this->getInvalid();
$distints=$this->getDistinct();
$duplicata=$this->getDuplicate();
$printings=$this->getPrinting();
 $randomD=$this->random_data();


$result = array('TotalEntries'=>$totalentries, 'Invalid'=>$invalid, 'Valid'=>$valid, 'Duplicates'=>$duplicata ,'Distints'=>$distints, 'GetPrinting'=>$printings,'randomD'=>$randomD);
 
echo json_encode($result); //this convert Arrays to string

}

function getTotalEntries()
{
   $strings="SELECT date_logged,count(response_id) FROM sms_entries 
  WHERE DATE(date_logged) BETWEEN '$this->date_from' AND ' $this->date_to'"; 

  $res=$this->queryConn($strings); 
  $row=mysqli_fetch_assoc($res);
  // print_r($row);
    $totaletriescount=$row['count(response_id)'];
    return $totaletriescount;
}

function getValid(){

  $strings="SELECT date_logged,count(response_id) FROM sms_entries 
  WHERE DATE(date_logged) BETWEEN '$this->date_from' AND '$this->date_to' AND response_id=1"; 

     $res=$this->queryConn($strings); 
    $row=mysqli_fetch_assoc($res);
    //print_r($row);
    $count=$row['count(response_id)'];
     return $count;
}

function getInvalid(){

  $strings="SELECT  date_logged,count(response_id) FROM sms_entries 
  WHERE DATE(date_logged) BETWEEN '$this->date_from' AND '$this->date_to' AND response_id=3"; 

     $res=$this->queryConn($strings); 
    $row=mysqli_fetch_assoc($res);
    $count_invals=$row['count(response_id)'];
     return $count_invals;
}
function getDistinct(){

   $strings="SELECT COUNT(Distinct cellphone) as thecount FROM sms_entries 
      WHERE DATE(date_logged) BETWEEN '$this->date_from' AND '$this->date_to'";
  $res=$this->queryConn($strings); 
    $row=mysqli_fetch_assoc($res);
     $count_distnt=$row['thecount'];
     return $count_distnt;
}

function getDuplicate(){
  $strings="SELECT COUNT(cellphone) as cells FROM sms_entries 
  WHERE DATE(date_logged) BETWEEN '$this->date_from' AND '$this->date_to' AND response_id=2"; 
    
    $res=$this->queryConn($strings); 
    $row=mysqli_fetch_assoc($res);
     $count_dups=$row['cells'];
     return $count_dups;
}

function getPrinting(){

  $strings="SELECT  date_logged,cellphone FROM sms_entries 
  WHERE DATE(date_logged) BETWEEN '$this->date_from' AND '$this->date_to' AND response_id=1"; 
      $count_printing=array();
     $res=$this->queryConn($strings); 
    while($row=mysqli_fetch_assoc($res)){
        $count_printing[]=$row;
    }

   
     return $count_printing;
}
/////////////////////////////////////////////////////////////
 function random_data(){
  $data = array();
      $datas="SELECT d.recordid,cellphone,field_1,field_2,field_3 FROM sms_entry_details d
      JOIN sms_entries e
      ON d.master_recordid=e.recordid
      WHERE DATE(date_logged) BETWEEN '$this->date_from' AND '$this->date_to' AND response_id=1";
      $results=$this->queryConn($datas);

      while($row=mysqli_fetch_assoc($results)){
           $data[]=$row;
           
      }
          $ar=array_rand($data,2);
          $dataList[]=$data[$ar[0]];
        return $dataList; 
 }
}

       
 if(isset($_POST['action']))
{
  $action = $_POST['action'];

  if($action == 'myResults')
  {
    $date_from=$_POST['date_from'];
         $date_to=$_POST['date_to'];
         $api_object=new getingData($date_from,$date_to);
    $api_object->myResults();
  }
 
}   
   
?>   
    
   




