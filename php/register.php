<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
 $conn = mysqli_connect($host, $username, $password, $database_name);
 //$sql1 = "INSERT INTO customer(name,password,phone_no) VALUES ('jj','jj','12')";
  //$result1 = mysqli_query($conn,$sql1);
            $json = array();
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phoneno"])){
	
          $name = $_POST["name"];
          
           $password = $_POST["password"];
            $phoneno = $_POST["phoneno"];
            $email = $_POST["email"];
       
        
        $sql = "INSERT INTO customer(Customer_ID,name,password,phone_no) VALUES ('$email','$name','$password','$phoneno')";
	$result = mysqli_query($conn,$sql);

       if ($result) {
        $json["success"]=1;
        $json["message"]="Customer created successfully." ;
		echo json_encode($json);
    }
    else{
        $json["success"]=0;
        $json["message"]="Customer already exists."; 
        echo json_encode($json);   
    }
    
 
}
	
	
	






?>

