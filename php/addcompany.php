<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
$json = array();
if (isset($_POST["name"]) && isset($_POST["address"])){
	
          $name = $_POST["name"];
          $address = $_POST["address"];
          
        $sql = "INSERT into rental_company (C_Name,C_Addr,Owner_ID) values ('$name','$address','3')";
	$result = mysqli_query($conn,$sql);

       if ($result) {
        $json["success"]=1;
        $json["message"]="Company added successfully." ;
		echo json_encode($json);
    }
    else{
        $json["success"]=0;
        $json["message"]="Error in Add Company."; 
        echo json_encode($json);   
    }
    
 
}
	

?>

