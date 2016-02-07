/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#AddIndividual").click(function(e) {
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
        $("#AddOwnerDiv").show();
        $("#AddCompanyDiv").hide();
        $("#AddBankDiv").hide();
        $("#AddIndividualDiv").show();       
        $("#RentalInformationDiv").hide();
        $("#IndividualReset").click();
        $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
    });


    $("#AddIndividualForm").submit(function(e){
        var info=JSON.stringify({
                'ssn'                   : $('input[id=AddIndividualSSN]').val(),
                'driver_license_no'     : $('input[id=AddIndividualDriver_License_No]').val(),
                'name'                  : $('input[id=AddIndividualName]').val(),
                'address'               : $('input[id=AddIndividualAddress]').val()
            });
            var info = JSON.parse(info);
        alert("SSN: "+info.ssn+"\n"+
                "Driver_License_No: "+info.driver_license_no+"\n"+
                
                "Company Name: "+info.name+"\n"+
                "Company Adddress: "+info.address);
        $.ajax({
            type : "POST",
            url : "php/addindividual.php",
            dataType : 'json',
            data : {
                'ssn'                   : $('input[id=AddIndividualSSN]').val(),
                'driver_license_no'     : $('input[id=AddIndividualDriver_License_No]').val(),
                'name'                  : $('input[id=AddIndividualName]').val(),
                'address'               : $('input[id=AddIndividualAddress]').val()
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                //console.log(data.message);
                var success=data.success;
                var message = data.message;                                       
                                        
                if(success==1){
                    $("#AddIndividualSuccessDiv").show();
                    $("#IndividualReset").click();
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
