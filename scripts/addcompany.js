/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#AddCompany").click(function(e) {
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
        $("#AddBankDiv").hide();
        $("#AddBankSuccessDiv").hide();
        $("#AddCompanyDiv").show();
        $("#AddCompanySuccessDiv").hide();
        $("#AddIndividualDiv").hide();
        $("#AddIndividualSuccessDiv").hide();      
        $("#RentalInformationDiv").hide();
        $("#CompanyReset").click();
        
        $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
    });


    $("#AddCompanyForm").submit(function(e){
           var info=JSON.stringify({
                'name'          : $('input[id=AddCompanyName]').val(),
                'address'       : $('input[id=AddCompanyAddress]').val()                
            });
            var info = JSON.parse(info);
        alert("Company Name: "+info.name+"\n"+
                "Company Adddress: "+info.address);
        $.ajax({
            type : "POST",
            url : "php/addcompany.php",
            dataType : 'json',
            data : {
                'name'          : $('input[id=AddCompanyName]').val(),
                'address'       : $('input[id=AddCompanyAddress]').val()                
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                //console.log(data.message);
                var success=data.success;
                var message = data.message;                                       
                                        
                if(success==1){
                    $("#AddCompanySuccessDiv").show();
                    $("#CompanyReset").click();
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
