<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
$json = array();

if (isset($_POST["dailyweekly"]) && isset($_POST["activescheduled"]) && isset($_POST["startdate"]) 
        && isset($_POST["returndate"]) && isset($_POST["carid"])){
	
          $dailyweekly = $_POST["dailyweekly"];
          $activescheduled = $_POST["activescheduled"];
          $startdate = $_POST["startdate"];
          $returndate = $_POST["returndate"];
          session_start(); 
          $Customer_ID = $_SESSION['emailaddress'];
          $car_ID = $_POST["carid"];
        $result = mysqli_query($conn,"SELECT Available from car where Car_ID = '$car_ID'");
        $num_row = mysqli_num_rows($result);
        
        if($dailyweekly == "Daily"){
                $rDate = date("Y-m-d", strtotime($returndate));
                $sDate=date("Y-m-d", strtotime($startdate));
                $days=mysqli_query($conn,"select datediff('$rDate', '$sDate') AS NoOfDays;");
                $r = mysqli_fetch_array($days);
                $noofdays=$r["NoOfDays"];
                $rate = mysqli_query($conn,"SELECT Daily_Rate from car where Car_ID = '$car_ID'");
                $rrate=mysqli_fetch_array($rate);
                $billamount=$noofdays*$rrate["Daily_Rate"];
        }
        else{
            $noofdays='0';
        }
         if($dailyweekly == "Weekly"){
                $rDate = date("Y-m-d", strtotime($returndate));
                $sDate=date("Y-m-d", strtotime($startdate));
                $days=mysqli_query($conn,"select floor((datediff('$rDate', '$sDate'))/7) AS NoOfWeeks;");
                $r = mysqli_fetch_array($days);
                $noofweeks=$r["NoOfWeeks"];
                $rate = mysqli_query($conn,"SELECT Weekly_Rate from car where Car_ID = '$car_ID'");
                $rrate=mysqli_fetch_array($rate);
                $billamount=$noofweeks*$rrate["Weekly_Rate"];
        }
        else{
            $noofweeks='0';
        }
        
        if($num_row >=1){
            $row = mysqli_fetch_array($result);
            if($row["Available"]=="0"){
                $sql = "INSERT INTO rents (DailyWeekly,ActiveScheduled,Start_Date,Return_Date,No_Of_Days,No_Of_Weeks,Bill_Amount,Car_ID,Customer_ID) VALUES ('$dailyweekly','$activescheduled','$startdate','$returndate','$noofdays','$noofweeks','$billamount','$car_ID','$Customer_ID');";
                $result = mysqli_query($conn,$sql);
                $rent_id = mysqli_insert_id($conn);

                if ($result) {
                    $json["success"]=1;
                    $json["message"]="Car rented successfully." ;
                    mysqli_query($conn,"UPDATE car set Available='1' where Car_ID = '$car_ID'");
                    $rent = mysqli_query($conn,"SELECT * from rents where Rental_ID = '$rent_id'");
                    $rental=mysqli_fetch_array($rent);
                    
                    $rentalinfo = array();
                    $rentalinfo["DailyWeekly"]=$rental["DailyWeekly"];
                    $rentalinfo["ActiveScheduled"]=$rental["ActiveScheduled"];
                    $rentalinfo["No_Of_Days"]=$rental["No_Of_Days"];
                    $rentalinfo["No_Of_Weeks"]=$rental["No_Of_Weeks"];
                    $rentalinfo["Start_Date"]=$rental["Start_Date"];
                    $rentalinfo["Return_Date"]=$rental["Return_Date"];
                    $rentalinfo["Bill_Amount"]=$rental["Bill_Amount"];
                    
                    $car = mysqli_query($conn,"SELECT * from car where Car_ID = '$car_ID'");
                    $car=mysqli_fetch_array($car);
                    
                    $rentalinfo["Car_Type"]=$car["Car_Type"];
                    $rentalinfo["Model"]=$car["Model"];
                    $rentalinfo["Model_Year"]=$car["Model_Year"];
                    $json["rentalinfo"]=array();
                    array_push($json["rentalinfo"], $rentalinfo);
                    
                    //echo json_encode($json);
                     echo json_encode($json);
                }
                else{
                    $json["success"]=0;
                    $json["message"]="Error in Add Rent."; 
                    echo json_encode($json);   
                }
            }
            else{
                    $json["success"]=0;
                    $json["message"]="Car is not available. Please select another car."; 
                    echo json_encode($json);   
            }
        }
}
	

?>

