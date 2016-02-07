<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/datepicker.css">
        
        <link rel="stylesheet/less" type="text/css" href="css/datepicker.less" />
        <script src="js/jquery-1.11.0.js" type="text/javascript"></script>
        
        <script src="js/jquery.ui.core.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.ui.datepicker.js" type="text/javascript"></script>
        <script src="js/jquerycarou.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>   
        <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>   
        
        <link rel="stylesheet" type="text/css" href="style/userdefined.css">
        <link rel="stylesheet" type="text/css" href="style/vehicleinfo.css">
        <link rel="stylesheet" type="text/css" href="style/carousel.css">
        <link rel="stylesheet" type="text/css" href="style/socialshare.css">
        
        <script src="scripts/vehicleinfo.js" type="text/javascript"></script>
        <script src="scripts/home.js" type="text/javascript"></script>
        <script src="scripts/aboutus.js" type="text/javascript"></script>
        <script src="scripts/login.js" type="text/javascript"></script>
        <script src="scripts/register.js" type="text/javascript"></script>
        <script src="scripts/addcar.js" type="text/javascript"></script>
        <script src="scripts/addowner.js" type="text/javascript"></script>
        <script src="scripts/rent.js" type="text/javascript"></script>
        <script src="scripts/addcompany.js" type="text/javascript"></script>
        <script src="scripts/addindividual.js" type="text/javascript"></script>
        <script src="scripts/addbank.js" type="text/javascript"></script>
        <script src="scripts/modifycarrate.js" type="text/javascript"></script>
    </head>
    <body style="background-color: aliceblue">
         
        <div>
            <table>
                <tr>
                    <td valign="top" width="18%" style="white-space: nowrap;">
                        <img src="image/Leisure_Car_Rental.png" width="170" height="110">
                        <img src="image/car-rental.png" width="370" height="130">
                        
                    </td>
                </tr>
                
            </table>
        </div>        
        
        <table align="left">
            <tr>  
                <td class="space"></td>
                <td valign="top" width="18%">
                    <div class="btn-group-vertical button-wrapper">
                        <div class="menu" style="text-align: center;">Menu</div>
                        <hr>
                        <button id="Home" type="button" class="btn btn-info">Home</button>  
                         <?php session_start(); ?>
                            <?php if(isset($_SESSION['emailaddress'])){
                          ?>
                        <button id="AddOwner" type="button" class="btn btn-info">Add Owner</button>
                        <button id="AddCar" type="button" class="btn btn-info">Add Car</button>
                        <button id="RentCar" type="button" class="btn btn-info">Rent a Car</button>
                        <button id="ModifyCar" type="button" class="btn btn-info">Modify Car Rates</button>
                        <a href="php/logout.php" class="btn btn-info">Logout</a>
                        <?php }else {?>
                            <button id="Login" type="button" class="btn btn-info">Login</button>
                        <?php } ?>
                        
                        
                        <button id="VehicleInfo" type="button" class="btn btn-info">Vehicle Information</button>
                        <button id="About" type="button" class="btn btn-info">About Us</button>                       
                        
                    </div>                    
                    
                </td>
                <td class="space"></td>
                
                <td>                   
                    
                    <!-- Full Page Image Background Carousel Header -->
                    <header id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="title center-block" style="text-align: center;">Welcome to Car Rental !!!</div>
                        <hr>
                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('image/home.png');">
                                    <table>
                                        <tr>
                                            
                                            <td style="padding:0 25px 0 25px;"></td>
                                            <td>
                                                <img class="img-front" src="image/economy.png" alt="val1"
                                                     width="350" height="250" />                                                
                                            </td>
                                            <td style="padding:0 90px 0 90px;"></td>
                                            <td style="text-align: right">   
                                                <h3>Economy</h3>
                                                <p>
                                                    Kia Rio or similar</br> These rental cars feature:</br> 4 doors</br> Automatic
                                                    Transmission</br> Air Conditioning</br> AM/FM</br> $ 27.96 USD / day
                                                </p> 
                                            </td>
                                        </tr>                                        
                                    </table>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('image/home.png');">
                                    <table>
                                        <tr>
                                            <td style="padding:0 25px 0 25px;"></td>
                                            <td>
                                                <img class="img-front" src="image/compact.png" alt="val1"
                                                     width="350" height="250" />                                                
                                            </td>
                                            <td style="padding:0 90px 0 90px;"></td>
                                            <td style="text-align: right">   
                                                <h3>Compact</h3>
                                                <p>
                                                    Nissan Versa Note or similar</br> These rental cars feature:</br> 4 Doors</br>
                                                    Automatic Transmission</br> Air Conditioning</br> $ 27.98 USD / day
                                                </p>
                                            </td>
                                        </tr>                                        
                                    </table>
                                </div>                                
                            </div>                            
                            
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('image/home.png');">
                                    <table>
                                        <tr>
                                            <td style="padding:0 25px 0 25px;"></td>
                                            <td>
                                                <img class="img-front" src="image/intermediate.png" alt="val1"
                                                     width="350" height="250" />                                                
                                            </td>
                                            <td style="padding:0 90px 0 90px;"></td>
                                            <td style="text-align: right">   
                                                <h3>Intermediate</h3>
                                                <p>
                                                    Toyota Corolla or similar</br> These rental cars feature:</br> 2 or 4
                                                    doors</br> Automatic Transmission</br> Air Conditioning</br> AM/FM CD Player</br> $
                                                    29.98 USD / day
                                                </p>
                                            </td>
                                        </tr>                                        
                                    </table>
                                </div>                                
                            </div>      
                        </div>
                        
                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                        
                    </header>
                    
                    
                    <div class="container" id="LoginDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Login</strong>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" id="LoginForm">
                                            <div class="form-group" id="LoginEmailDiv">
                                                <label for="LoginEmail" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="LoginEmail" placeholder="Email" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group" id="LoginPasswordDiv">
                                                <label for="LoginPassword" class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="LoginPassword" placeholder="Password" required="true">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-success btn-sm">Sign In</button>
                                                    <button type="reset" class="btn btn-default btn-sm" id="LoginReset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="panel-footer">Not Registered? <button id="Register" class="btn btn-warning btn-sm">Register here</button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div id="RegistrationSuccess" class = "alert alert-success alert-dismissable col-md-7" hidden="true">
                        
                        <strong class="">Registration Successful. Please login.</strong>
                    </div>
                    
                    <div class="container" id="RegisterDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Register</strong>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" id="RegisterForm">
                                            <div class="form-group">
                                                <label for="RegisterName" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="RegisterName" placeholder="Name" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group" id="RegisterEmailDiv">
                                                <label for="RegisterEmail" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="RegisterEmail" placeholder="Email" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="RegisterPassword" class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="RegisterPassword" placeholder="Password" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="RegisterPhoneno" class="col-sm-3 control-label">Phone No.</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="RegisterPhoneno" placeholder="Phone No." required="true">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" id="RegisterInfo" class="btn btn-success btn-sm">Register</button>
                                                    <button type="reset" class="btn btn-default btn-sm" id="RegisterReset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div id="AddOwnerDiv" hidden="true">
                        <div class="btn-group" style="margin-bottom: 20px;">
                          <button type="button" class="btn btn-primary" id="AddIndividual" style="margin-right: 5px; margin-left: 200px;">Add Individual</button>                          
                          <button type="button" class="btn btn-primary" id="AddCompany" style="margin-right: 5px;">Add Company</button>
                          <button type="button" class="btn btn-primary" id="AddBank" style="margin-right: 5px;">Add Bank</button>
                        </div>
                        
                        <div id="AddIndividualSuccessDiv" class = "alert alert-success alert-dismissable col-md-7" hidden="true">                        
                        <strong class="">Individual added successfully.</strong>
                        </div>
                    
                        <div class="container" id="AddIndividualDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Add Individual</strong>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" id="AddIndividualForm">
                                            <div class="form-group">
                                                <label for="AddIndividualSSN" class="col-sm-3 control-label">SSN</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddIndividualSSN" placeholder="SSN" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddIndividualDriver_License_No" class="col-sm-3 control-label">Driver License No</label>
                                                <div class="col-sm-9">
                                                    <input type="txt" class="form-control" id="AddIndividualDriver_License_No" placeholder="Driver_License_No" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddIndividualName" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="txt" class="form-control" id="AddIndividualName" placeholder="Name" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddIndividualAddress" class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddIndividualAddress" placeholder="Address" required="true">
                                                </div>
                                            </div>
            
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" id="AddIndividualInfo" class="btn btn-success btn-sm">Add Individual</button>
                                                    <button type="reset" class="btn btn-default btn-sm" id="IndividualReset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        
                         <div id="AddCompanySuccessDiv" class = "alert alert-success alert-dismissable col-md-7" hidden="true">                        
                        <strong class="">Company added successfully.</strong>
                        </div>
                    
                        <div class="container" id="AddCompanyDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Add Company</strong>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" id="AddCompanyForm">
                                            <div class="form-group">
                                                <label for="AddCompanyName" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddCompanyName" placeholder="Name" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddCompanyAddress" class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddCompanyAddress" placeholder="Address" required="true">
                                                </div>
                                            </div>
            
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" id="AddCompanyInfo" class="btn btn-success btn-sm">Add Company</button>
                                                    <button type="reset" class="btn btn-default btn-sm" id="CompanyReset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        
                        
                         <div id="AddBankSuccessDiv" class = "alert alert-success alert-dismissable col-md-7" hidden="true">                        
                        <strong class="">Bank added successfully.</strong>
                        </div>
                    
                        <div class="container" id="AddBankDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Add Bank</strong>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" id="AddBankForm">
                                            <div class="form-group">
                                                <label for="AddBankName" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddBankName" placeholder="Name" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddBankAddress" class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddBankAddress" placeholder="Address" required="true">
                                                </div>
                                            </div>
                                            
            
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" id="AddBankInfo" class="btn btn-success btn-sm">Add Bank</button>
                                                    <button type="reset" class="btn btn-default btn-sm" id="BankReset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div id="AddCarSuccessDiv" class = "alert alert-success alert-dismissable col-md-7" hidden="true">                        
                        <strong class="">Car added successfully.</strong>
                    </div>
                    
                    <div class="container" id="AddCarDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Add Car</strong>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" id="AddCarForm">
                                            <div class="form-group">
                                                <label for="AddCarCarType" class="col-sm-3 control-label">Car Type</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddCarCarType" placeholder="Car Type" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddCarModel" class="col-sm-3 control-label">Model</label>
                                                <div class="col-sm-9">
                                                    <input type="txt" class="form-control" id="AddCarModel" placeholder="Model" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddCarModelYear" class="col-sm-3 control-label">Model Year</label>
                                                <div class="col-sm-9">
                                                    <input type="txt" class="form-control" id="AddCarModelYear" placeholder="Model Year" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddCarDailyRate" class="col-sm-3 control-label">Daily Rate</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddCarDailyRate" placeholder="Daily Rate" required="true">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="AddCarWeeklyRate" class="col-sm-3 control-label">Weekly Rate</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddCarWeeklyRate" placeholder="Weekly Rate" required="true">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="AddCarRentalLocation" class="col-sm-3 control-label">Rental Location</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddCarRentalLocation" placeholder="Rental Location" required="true">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="AddCarAvailable" class="col-sm-3 control-label">Available</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddCarAvailable" placeholder="Available" required="true">
                                                </div>
                                            </div>
            
                        
                                            <div class="form-group">
                                                <label for="AddCarOwner" class="col-sm-3 control-label">Owner</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="owner">
                                                    <?php

                                                    $sql = mysqli_query($conn,"SELECT * FROM owner");
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        $Owner_ID = $row["Owner_ID"];
                                                        $Owner_Type=$row['Owner_Type'];        
                                                        if($Owner_Type=="Individual"){
                                                            $sqlindi=mysqli_query($conn,"SELECT name from individual where Owner_ID = '$Owner_ID'");
                                                            while($rowindi = mysqli_fetch_array($sqlindi)){
                                                                echo "<option value=".$Owner_ID.">".$row['Owner_Type'] . "--" .$rowindi['name'] . "</option>";

                                                            }
                                                        }

                                                        if($Owner_Type=="Company"){
                                                            $sqlcompany=mysqli_query($conn,"SELECT c_name from rental_company where Owner_ID = '$Owner_ID'");
                                                            while($rowcompany = mysqli_fetch_array($sqlcompany)){
                                                            echo "<option value=".$Owner_ID.">".$row['Owner_Type'] . "--" .$rowcompany['c_name'] . "</option>";
                                                            }
                                                        }

                                                        if($Owner_Type=="Bank"){
                                                            $sqlbank=mysqli_query($conn,"SELECT b_name from bank where Owner_ID = '$Owner_ID'");
                                                            while($rowbank = mysqli_fetch_array($sqlbank)){
                                                            echo "<option value=".$Owner_ID.">".$row['Owner_Type'] . "--" .$rowbank['b_name'] . "</option>";
                                                            }
                                                        }

                                                    }
                                                    ?>  
                                                    </select> 
                                                </div>
                                            </div>
                                            
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" id="AddCarInfo" class="btn btn-success btn-sm">Add Car</button>
                                                    <button type="reset" class="btn btn-default btn-sm" id="CarReset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div id="AddRentSuccessDiv" class = "alert alert-success alert-dismissable col-md-7" hidden="true">                        
                        <strong class="">Car has been rented successfully.</strong>
                    </div>
                    
                    <div class="container" id="AddRentDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Rent a Car</strong>
                                        
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" id="AddRentForm">
                                            <div class="form-group">
                                                <label for="AddRentDailyWeekly" class="col-sm-3 control-label">Daily/Weekly</label>
                                                
                                                <div class="col-sm-9" id="AddRentDailyWeeklyDiv">
                                                    <select class="form-control" id="DailyWeekly">
                                                        <option value="Daily">Daily</option>
                                                        <option value="Weekly">Weekly</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddRentActiveScheduled" class="col-sm-3 control-label">Active/Scheduled</label>
                                                 <div class="col-sm-9" id="AddRentActiveScheduledDiv">
                                                    <select class="form-control" id="ActiveSchedule">
                                                        <option value="Active">Active</option>
                                                        <option value="Scheduled">Scheduled</option>
                                                    </select> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddRentStartDate" class="col-sm-3 control-label">Start Date</label>
                                                <div class="col-sm-9">
                                                    <input type="txt" class="form-control" id="AddRentStartDate" placeholder="Start Date" required="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="AddRentReturnDate" class="col-sm-3 control-label">Return Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="AddRentReturnDate" placeholder="Return Date" required="true">
                                                </div>
                                            </div>                                            
                        
                                            <div class="form-group">
                                                <label for="Car" class="col-sm-3 control-label">Car</label>
                                                <div class="col-sm-9" id="AddRentCarDiv">
                                                    <select class="form-control" id="car">
                                                    <?php
                                                    echo "<option selected=\"selected\" disabled=\"disabled\">Select a Car</option>";
                                                    $sql = mysqli_query($conn,"SELECT * FROM car");
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        if($row["Available"]=="0")
                                                        echo "<option value=".$row["Car_ID"].">".$row["Car_ID"] ."--". $row['Car_Type'] . "--" . $row['Model'] . "--". $row['Model_Year'] . "</option>";
                                                    }
                                                    ?>  
                                                    </select> 
                                                </div>
                                            </div>
                                            
          
                                            
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" id="RentInfo" class="btn btn-success btn-sm">Add Rent</button>
                                                    <button type="reset" class="btn btn-default btn-sm" id="RentReset">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="container" id="RentalInformationDiv" hidden="true">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> <strong class="">Car Renting Details</strong>
                                        
                                    </div>
                                    <div class="panel-body" id="RentalInformation">

                                    </div>
                                    </div>
                                 </div>
                             </div>
                          </div>
                          
                    
                    <script>
                        
 function printDiv(divName) {
     
     var DocumentContainer = document.getElementById(divName);
var html = '<html><head>'+
               '</head><body style="background:#ffffff;">'+
               DocumentContainer.innerHTML+
               '</body></html>';
 
    var WindowObject = window.open("", "PrintWindow",
    "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(html);
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();
    document.getElementById('print_id').style.display='block';
     
	}                        
      
</script>
                    
 <div id="ModifyCarSuccessDiv" class = "alert alert-success alert-dismissable col-md-7" hidden="true">                        
                        <strong class="">Car rates has been changed successfully.</strong>
                    </div>
<div class="container" id="ModifyCarRateDiv" hidden="true">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Modify Car Rate</strong>
                    
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" id="ModifyCarRateForm">
                                            
                             <div class="form-group">
                            <label for="Car" class="col-sm-3 control-label">Car</label>
                                <div class="col-sm-9" id="AddRentCarDiv">
                                <select class="form-control" id="carId">
                                <?php
                                echo "<option selected=\"selected\" disabled=\"disabled\">Select a Car</option>";
                                $sql = mysqli_query($conn,"SELECT * FROM car");
                                while ($row = mysqli_fetch_array($sql)){

                                    echo "<option value=".$row["Car_ID"].">".$row["Car_ID"] ."--". $row['Car_Type'] . "--" . $row['Model'] . "--". $row['Model_Year'] . "--". $row['Daily_Rate']. "--". $row['Weekly_Rate']. "</option>";
                                }
                                ?>  
                                </select> 
                                </div>
                              </div>
                                <div class="form-group">
                                    <label for="ModifyDailyRate" class="col-sm-3 control-label">Modify Daily Rate</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ModifyDailyRate" placeholder="Daily Rate" required="true">
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="ModifyWeeklyRate" class="col-sm-3 control-label">Modify Weekly Rate</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="ModifyWeeklyRate" placeholder="Weekly Rate" required="true">
                                    </div>
                                </div>  
                                <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" id="ModifyCarInfo" class="btn btn-success btn-sm">Modify Car Rates</button>
                                <button type="reset" class="btn btn-default btn-sm" id="ModifyCarReset">Reset</button>
                            </div>
                        </div>
                        </form>
                            </div>
                        
                        
                    
                </div>                
            </div>
        </div>
    </div>
</div>
                        



                    
                    
                    <div id="VehicleInfoDiv" hidden="true" >
                        <div class="title center-block" style="text-align: center;">Vehicle Information</div>
                        <hr>
                        <div class="container">
                            <div class="main">
                                <div class="view view-first">
                                    <span><h2></h2>Economy</span> <img src="image/economy.png">
                                    <div class="mask">
                                        <h2>Economy</h2>
                                        <p>
                                            Kia Rio or similar</br> These rental cars feature:</br> 4 doors</br>
                                            Automatic Transmission</br> Air Conditioning</br> AM/FM</br> $ 27.96 USD /
                                            day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Compact</span> <img src="image/compact.png">
                                    <div class="mask">
                                        <h2>Compact</h2>
                                        <p>
                                            Nissan Versa Note or similar</br> These rental cars feature:</br> 4
                                            Doors</br> Automatic Transmission</br> Air Conditioning</br> $ 27.98 USD /
                                            day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Intermediate</span> <img
                                        src="image/intermediate.png">
                                    <div class="mask">
                                        <h2>Intermediate</h2>
                                        
                                        
                                        <p>
                                            Toyota Corolla or similar</br> These rental cars feature:</br> 2 or 4
                                            doors</br> Automatic Transmission</br> Air Conditioning</br> AM/FM CD Player</br>
                                            $ 29.98 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Standard</span> <img src="image/standard.png">
                                    <div class="mask">
                                        <h2>Standard</h2>
                                        <p>
                                            Volkswagan Jetta or similar</br> These rental cars feature:</br> 4
                                            doors</br> Automatic Transmission</br> Air Conditioning</br> AM/FM CD Player</br>
                                            Room to seat 5 passengers</br> $ 33.96 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Full Size</span> <img src="image/fullsize.png">
                                    <div class="mask">
                                        <h2>Full Size</h2>
                                        <p>
                                            Ford Fusion or similar</br> These rental cars feature:</br> 4 doors</br>
                                            Automatic Transmission</br> Air Conditioning</br> AM/FM CD Player</br> $
                                            33.98 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Premium</span> <img src="image/premium.png">
                                    <div class="mask">
                                        
                                        <h2>Premium</h2>
                                        <p>
                                            Chrysler 300 or similar</br> These rental cars feature:</br> 4 doors</br>
                                            Automatic Transmission</br> Air Conditioning</br> AM/FM CD Player</br> $
                                            64.99 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Luxury</span> <img src="image/luxury.png">
                                    <div class="mask">
                                        <h2>Luxury</h2>
                                        <p>
                                            Cadillac DTS or similar</br> Cars feature: 4 doors</br> Automatic
                                            Transmission</br> Air Conditioning</br> AM/FM CD Player</br> 6-8 Cylinder
                                            Performance</br> Tilt/cruise Control</br> $ 99.98 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Minivan</span> <img src="image/minivan.png">
                                    <div class="mask">
                                        <h2>Minivan</h2>
                                        <p>
                                            Dodge Grand Caravan </br> These rental cars feature:</br> Room to seat
                                            7 passengers</br> Automatic Transmission</br> Air Conditioning</br>
                                            6-Cylinder Performance</br> Tilt/cruise Control</br> $ 88.98 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Luxury SUV</span> <img src="image/luxurysuv.png">
                                    <div class="mask">
                                        <h2>Luxury SUV</h2>
                                        <p>
                                            Lincoln Navigator or similar</br> Feature: Auto transmission</br> Power
                                            Locks, Power Mirrors</br> Telescopic/Tilt Wheel</br> Adv Driver and
                                            passenger airbags</br> Room to seat 7 passengers</br> $ 98.98 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Intermediate SUV</span> <img
                                        src="image/intermediatesuv.png">
                                    <div class="mask">
                                        <h2>Intermediate SUV</h2>
                                        <p>
                                            Toyota Rav4 or similar</br> These rental cars feature:</br> Room to
                                            seat 5 Passengers</br> Automatic Transmission</br> Air conditioning</br>
                                            AM/FM CD Player</br> Power windows and locks</br> $ 33.98 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Standard SUV</span> <img
                                        src="image/standardsuv.png">
                                    <div class="mask">
                                        <h2>Standard SUV</h2>
                                        <p>
                                            Hyundai Santa Fe or similar</br> Room to seat 5 passengers</br>
                                            Automatic Transmission</br> Air Conditioning</br> 6-Cylinder
                                            Performance</br> Tilt/cruise Control</br> Split Rear Seat</br> $ 48.98 USD /
                                            day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Large SUV</span> <img src="image/largesuv.png">
                                    <div class="mask">
                                        <h2>Large SUV</h2>
                                        <p>
                                            Chevrolet Tahoe or similar</br> Room to seat 7 passengers</br> V8
                                            engine</br> Air conditioning</br> Audio system with FM/CD</br> Cruise
                                            control</br> Power windows & locks</br> $ 68.98 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Small Pickup</span> <img
                                        src="image/smallpickup.png">
                                    <div class="mask">
                                        <h2>Small Pickup</h2>
                                        <p>
                                            Nissan Frontier or similar model</br> These rental cars feature:</br> 4
                                            doors</br> Automatic transmission</br> Air conditioning</br> $ 49.99 USD /
                                            day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Full Size Crossover</span> <img
                                        src="image/fullsizecrossover.png">
                                    <div class="mask">
                                        <h2>Full Size Crossover</h2>
                                        <p>
                                            Dodge Journey or similar</br> Automatic Transmission</br> Air
                                            Conditioning</br> 6-Cylinder Performance</br> Tilt/cruise Control</br> Split
                                            Rear Seat</br> $ 69.99 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Pickup</span> <img src="image/pickup.png">
                                    <div class="mask">
                                        <h2>Pickup</h2>
                                        <p>
                                            Ram 1500 Quad Cab or similar model</br> These rental cars feature:</br>
                                            4 doors</br> Automatic transmission</br> Air conditioning</br> $ 54.99 USD /
                                            day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Cargo Van</span> <img src="image/cargovan.png">
                                    <div class="mask">
                                        <h2>Cargo Van</h2>
                                        <p>
                                            Chevrolet Express Cargo or similar</br> AM/FM</br> A/C</br> Automatic</br> $
                                            39.99 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Luxury Elite SUV</span> <img
                                        src="image/luxuryelitesuv.png">
                                    <div class="mask">
                                        <h2>Luxury Elite SUV</h2>
                                        <p>
                                            BMW X5 or similar model</br> These rental cars feature:</br> 4 doors</br>
                                            Automatic transmission</br> Air conditioning</br> $ 74.99 USD / day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>Premium Elite SUV</span> <img
                                        src="image/premiumelitesuv.png">
                                    <div class="mask">
                                        <h2>Premium Elite SUV</h2>
                                        <p>
                                            Cadillac SRX or similar model</br> These rental cars feature:</br> 4
                                            doors</br> Automatic transmission</br> Air conditioning</br> $ 84.99 USD /
                                            day
                                        </p>
                                    </div>
                                </div>
                                <div class="view view-first">
                                    <span><h2></h2>9 Passenger Minivan </span> <img
                                        src="image/9passengerminivan.png">
                                    <div class="mask">
                                        <h2>9 Passenger Minivan</h2>
                                        <p>
                                            Toyota Sienna or similar model</br> These rental cars feature:</br> 4
                                            doors</br> Automatic transmission</br> Air conditioning</br> $ 89.99 USD /
                                            day
                                        </p>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    
                    <div id="AboutDiv" hidden="true">
                        <div class="title center-block" style="text-align: center;">About Us</div>
                        <hr>                     
                        <table>
                            <tr>                                                    
                                <td><div class="social-popout">
                                        <img src="image/abt.png" />
                                    </div></td>
                                
                                <td class="space" style="color: black;"><b>Jeetendra Patil</b><br>jeetendra.patil@mavs.uta.edu</td>
                                <td><div class="social-popout">
                                        <img src="image/abt.png" />
                                    </div></td>
                                <td class="space" style="color: black;"><b>Brijesh Dankhara</b><br>brijesh.dankhara@mavs.uta.edu</td>
                            </tr>
                        </table>
                    </div>
                </td>
        </table>
    </body>
</html>
