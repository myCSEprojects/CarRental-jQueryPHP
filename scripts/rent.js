/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    
    
    $("#RentCar").click(function(e) {
        $('#AddRentStartDate').datepicker();
        $('#AddRentReturnDate').datepicker();
        $("#VehicleInfoDiv").hide();
        $("#myCarousel").hide();
        $("#AboutDiv").hide();
        $("#LoginDiv").hide();
        $("#RegisterDiv").hide();
        $("#RegistrationSuccess").hide();
        $("#AddCarDiv").hide();
        $("#AddCarSuccessDiv").hide();
        $("#LoginDiv").hide();
        $("#AddRentDiv").show();
        $("#AddRentSuccessDiv").hide();
        $("#AddOwnerDiv").hide();
        $("#AddBankDiv").hide();
        $("#AddBankSuccessDiv").hide();
        $("#AddCompanyDiv").hide();
        $("#AddCompanySuccessDiv").hide();
        $("#AddIndividualDiv").hide();
        $("#AddIndividualSuccessDiv").hide();
        $("#RentalInformationDiv").hide();
         $("#RentReset").click();
         $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
    });


    $("#AddRentForm").submit(function(e){
 
        var carid=$('#car').val();
         
        $.ajax({
            type : "POST",
            url : "php/addrent.php",
            dataType : 'json',
            data : {
                'dailyweekly'       : $('select[id=DailyWeekly]').val(),
                'activescheduled'   : $('select[id=ActiveSchedule]').val(),
                'startdate'         : $('input[id=AddRentStartDate]').val(),
                'returndate'        : $('input[id=AddRentReturnDate]').val(),                
                'carid'             : $('#car').val()
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                
                var success=data.success;
                var message = data.message;                                       
                var rental_info=data.rentalinfo;
                $("#AddRentDiv").hide();
                $("#AddRentSuccessDiv").show();
                $("#RentalInformationDiv").show();
                $("#car option[value="+carid+"]").remove();
                $("#RentReset").click(); 
                $("#RentalInformation").html("");
                    var listRentalInformationPanelBody = $("#RentalInformation");
                    listRentalInformationPanelBody.empty();
				

                    $.each(rental_info, function(key, rental) {
                        var row = $("<dl class=\"dl-horizontal\"></dl>");
						
                        //alert(JSON.stringify(user));	
                       
                        var DailyWeekly = $("<dt>Daily/Weekly:</dt><dd>"+rental.DailyWeekly+"</dd>");
                        var ActiveScheduled = $("<dt>Active/Scheduled:</dt><dd>"+rental.ActiveScheduled+"</dd>");
                        var No_Of_Days = $("<dt>No Of Days:</dt><dd>"+rental.No_Of_Days+"</dd>");
                        var No_Of_Weeks = $("<dt>No Of Weeks:</dt><dd>"+rental.No_Of_Weeks+"</dd>");
                        var Start_Date = $("<dt>Start Date:</dt><dd>"+rental.Start_Date+"</dd>");
                        var Return_Date = $("<dt>Return Date:</dt><dd>"+rental.Return_Date+"</dd>");
                        var Bill_Amount = $("<dt>Bill Amount:</dt><dd>"+rental.Bill_Amount+"</dd>");
                        var Car_Type = $("<dt>Car Type:</dt><dd>"+rental.Car_Type+"</dd>");
                        var Model = $("<dt>Model:</dt><dd>"+rental.Model+"</dd>");
                        var Model_Year = $("<dt>Model_Year:</dt><dd>"+rental.Model_Year+"</dd>");
                        var printbutton= $("<button id=\"print_id\" class=\"btn btn-warning btn-sm\" style=\"float: right\" onclick=\"printDiv('RentalInformation');\">Print</button>");
                        
												
                        DailyWeekly.appendTo(row);
                        ActiveScheduled.appendTo(row);
                        No_Of_Days.appendTo(row);
                        No_Of_Weeks.appendTo(row);
                        Start_Date.appendTo(row);
                        Return_Date.appendTo(row);
                        Bill_Amount.appendTo(row);
                        Car_Type.appendTo(row);
                        Model.appendTo(row);
                        Model_Year.appendTo(row);
                        printbutton.appendTo(row);
                        

                        row.appendTo(listRentalInformationPanelBody);
					
                    });
               
                                           
            },
            error : function(data, textStatus, errorThrown) {
                alert(data+textStatus+errorThrown);
                console.log("error");                        
                                            
            }
        });
		
        return false;
    }); 


});
