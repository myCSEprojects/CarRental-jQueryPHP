<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
$json = array();
 $sql= mysqli_query($conn,"UPDATE car set Daily_Rate='200', Weekly_Rate='1000' where Car_ID = '18'");
        
	echo mysqli_query($conn,$sql);

        
if (isset($_POST["carId"]) && isset($_POST["ModifyDailyRate"]) && isset($_POST["ModifyWeeklyRate"])){
	
          $carID = $_POST["carId"];
          $ModifyDailyRate = $_POST["ModifyDailyRate"];
          $ModifyWeeklyRate = $_POST["ModifyWeeklyRate"];
         
       $sql= mysqli_query($conn,"UPDATE car set Daily_Rate='$ModifyDailyRate', Weekly_Rate='$ModifyWeeklyRate' where Car_ID = '$carID'");
        
	mysqli_query($conn,$sql);

       
        $json["success"]=1;
        $json["message"]="Car rates Modified successfully." ;
		echo json_encode($json);
    }
    
    
 

	

?>

