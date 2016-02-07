<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
$json = array();
if (isset($_POST["cartype"]) && isset($_POST["model"]) && isset($_POST["modelyear"]) 
        && isset($_POST["dailyrate"]) && isset($_POST["weeklyrate"]) && isset($_POST["rentallocation"])
         && isset($_POST["available"]) && isset($_POST["owner_id"])){
	
          $cartype = $_POST["cartype"];
          $model = $_POST["model"];
          $modelyear = $_POST["modelyear"];
          $dailyrate = $_POST["dailyrate"];
          $weeklyrate = $_POST["weeklyrate"];
          $rentallocation = $_POST["rentallocation"];
          $available = $_POST["available"];
          $owner_id = $_POST["owner_id"];
        
        $sql = "INSERT INTO car(Car_Type,Model,Model_Year,Daily_Rate,Weekly_Rate,Rental_Location, Available,Owner_ID) VALUES ('$cartype','$model','$modelyear','$dailyrate','$weeklyrate','$rentallocation','$available','$owner_id')";
	$result = mysqli_query($conn,$sql);

       if ($result) {
        $json["success"]=1;
        $json["message"]="Car added successfully." ;
		echo json_encode($json);
    }
    else{
        $json["success"]=0;
        $json["message"]="Error in Add Car."; 
        echo json_encode($json);   
    }
    
 
}
	

?>

