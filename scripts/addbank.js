/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#AddBank").click(function(e) {
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
        $("#AddBankDiv").show();
        $("#AddBankSuccessDiv").hide();
        $("#AddCompanyDiv").hide();
        $("#AddCompanySuccessDiv").hide();
        $("#AddIndividualDiv").hide();
        $("#AddIndividualSuccessDiv").hide();
        $("#RentalInformationDiv").hide();
        $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
        
        $("#BankReset").click();
    });


    $("#AddBankForm").submit(function(e){
        
            
             var info=JSON.stringify({
                'name'          : $('input[id=AddBankName]').val(),
                'address'       : $('input[id=AddBankAddress]').val()                
            });
            var info = JSON.parse(info);
        alert("Bank Name: "+info.name+"\n"+
                "Bank Adddress: "+info.address);
            
            
        $.ajax({
            type : "POST",
            url : "php/addbank.php",
            dataType : 'json',
            data : {
                'name'          : $('input[id=AddBankName]').val(),
                'address'       : $('input[id=AddBankAddress]').val()                
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                //console.log(data.message);
                var success=data.success;
                var message = data.message;                                       
                                        
                if(success==1){
                    $("#AddBankSuccessDiv").show();
                    $("#BankReset").click();
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
