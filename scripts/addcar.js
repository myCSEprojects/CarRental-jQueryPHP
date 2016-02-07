/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#AddCar").click(function(e) {
        $("#VehicleInfoDiv").hide();
        $("#myCarousel").hide();
        $("#AboutDiv").hide();
        $("#LoginDiv").hide();
        $("#RegisterDiv").hide();
        $("#RegistrationSuccess").hide();
        $("#AddRentDiv").hide();
        $("#AddCarDiv").show();
        $("#AddCarSuccessDiv").hide();
        $("#AddRentSuccessDiv").hide();
        $("#AddOwnerDiv").hide();
        $("#AddBankDiv").hide();
        $("#AddBankSuccessDiv").hide();
        $("#AddCompanyDiv").hide();
        $("#AddCompanySuccessDiv").hide();
        $("#AddIndividualDiv").hide();
        $("#AddIndividualSuccessDiv").hide(); 
        $("#RentalInformationDiv").hide();
         $("#CarReset").click();
         $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
    });


    $("#AddCarForm").submit(function(e){
        var info=JSON.stringify({
                'cartype'           : $('input[id=AddCarCarType]').val(),
                'model'             : $('input[id=AddCarModel]').val(),
                'modelyear'         : $('input[id=AddCarModelYear]').val(),
                'dailyrate'         : $('input[id=AddCarDailyRate]').val(),
                'weeklyrate'        : $('input[id=AddCarWeeklyRate]').val(),
                'rentallocation'    : $('input[id=AddCarRentalLocation]').val(),
                'available'         : $('input[id=AddCarAvailable]').val(),
                'owner_id'         : $('#owner').val()
            });
            var info = JSON.parse(info);
        alert("Car_Type: "+info.cartype+"\n"+
                "Model: "+info.model+"\n"+
                "Model_Year: "+info.modelyear+"\n"+
                "Daily_Rate: "+info.dailyrate+"\n"+
                "Weekly_Rate: "+info.weeklyrate+"\n"+
                "Rental_Location: "+info.Rental_Location+"\n"+
                "Available: "+info.available+"\n");
        $.ajax({
            type : "POST",
            url : "php/addcar.php",
            dataType : 'json',
            data : {
                'cartype'           : $('input[id=AddCarCarType]').val(),
                'model'             : $('input[id=AddCarModel]').val(),
                'modelyear'         : $('input[id=AddCarModelYear]').val(),
                'dailyrate'         : $('input[id=AddCarDailyRate]').val(),
                'weeklyrate'        : $('input[id=AddCarWeeklyRate]').val(),
                'rentallocation'    : $('input[id=AddCarRentalLocation]').val(),
                'available'         : $('input[id=AddCarAvailable]').val(),
                'owner_id'         : $('#owner').val()
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                //console.log(data.message);
                var success=data.success;
                var message = data.message;                                       
                                        
                if(success==1){
                    $("#AddCarSuccessDiv").show();
                    $("#CarReset").click();
                }else{
                    console.log("error "+message);
                }
                                        
                                        
            },
            error : function(data, textStatus, errorThrown) {
                alert(data+textStatus+errorThrown);
                console.log("error"+message);                        
                                            
            }
        });
		
        return false;
    }); 


});
