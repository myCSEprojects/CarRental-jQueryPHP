<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
$json = array();
if (isset($_POST["email"]) && isset($_POST["password"])){
    
    $password = $_POST["password"];
    $email = $_POST["email"];
        $sql = "SELECT * FROM customer  WHERE Customer_ID = '$email'";
	$result = mysqli_query($conn,$sql);
 $num_row = mysqli_num_rows($result);
 
 if($num_row >=1){
     $result = mysqli_fetch_array($result);
//       $json["success"]=1;
//                  $json["message"]=$result["Password"];
//     
                if($password==$result["Password"]){
                        
                  $json["success"]=1;
                  $json["message"]="Login successful.";
                  session_start();
                  $_SESSION['emailaddress']=$result['Customer_ID'];
                  
              }else{
                  $json["success"]=2;
                  $json["message"]="Password Incorrect." ;
              }
 }else{
              $json["success"]=3;
              $json["message"]="Email address is not registered."; 
 }
 
 echo json_encode($json);
 
}
	


?>

