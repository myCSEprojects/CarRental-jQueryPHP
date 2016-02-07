<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
$json = array();
if (isset($_POST["ssn"]) && isset($_POST["driver_license_no"]) && isset($_POST["name"]) 
        && isset($_POST["address"])){
	
          $ssn = $_POST["ssn"];
          $driver_license_no = $_POST["driver_license_no"];
          $name = $_POST["name"];
          $address = $_POST["address"];
          
        $sql = "INSERT into individual (SSN,Driver_License_No,Name,Address,Owner_ID) values ('$ssn','$driver_license_no','$name','$address','2')";
	$result = mysqli_query($conn,$sql);

       if ($result) {
        $json["success"]=1;
        $json["message"]="Individual added successfully." ;
		echo json_encode($json);
    }
    else{
        $json["success"]=0;
        $json["message"]="Error in Add Individual."; 
        echo json_encode($json);   
    }
    
 
}
	

?>

