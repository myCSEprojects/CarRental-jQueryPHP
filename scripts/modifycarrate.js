/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#ModifyCar").click(function(e) {
        $("#VehicleInfoDiv").hide();
        $("#myCarousel").hide();
        $("#AboutDiv").hide();
        $("#LoginDiv").hide();
        $("#RegisterDiv").hide();
        $("#RegistrationSuccess").hide();
        $("#AddRentDiv").hide();
        $("#AddCarDiv").hide();
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
         $("#ModifyCarRateDiv").show();
    });


    $("#ModifyCarRateForm").submit(function(e){
        var info=JSON.stringify({
                'carId'           : $('#carId').val(),
                'ModifyDailyRate'             : $('input[id=ModifyDailyRate]').val(),
                'ModifyWeeklyRate'         : $('input[id=ModifyWeeklyRate]').val()
            });
            var info = JSON.parse(info);
        alert("Car Id: "+info.carId+"\n"+
                "Daily Rate: "+info.ModifyDailyRate+"\n"+
                "Weekly Rate: "+info.ModifyWeeklyRate);
        $.ajax({
            type : "POST",
            url : "php/modifycarrate.php",
            dataType : 'json',
            data : {
                'carId'           : $('#carId').val(),
                'ModifyDailyRate'             : $('input[id=ModifyDailyRate]').val(),
                'ModifyWeeklyRate'         : $('input[id=ModifyWeeklyRate]').val()
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                //console.log(data.message);
                var success=data.success;
                var message = data.message;                                       
                                        
                if(success==1){
                    $("#ModifyCarSuccessDiv").show();
                    $("#ModifyCarReset").click();
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
