/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#Register").click(function(e) {
        $("#VehicleInfoDiv").hide();
        $("#myCarousel").hide();
        $("#AboutDiv").hide();
        $("#LoginDiv").hide();
        $("#RegisterDiv").show();
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
        $("#RegisterReset").click();
        $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
    });


    $("#RegisterForm").submit(function(e){
		
   var info=JSON.stringify({
                'name'       : $('input[id=RegisterName]').val(),
                'email'       : $('input[id=RegisterEmail]').val(),
                'password'   : $('input[id=RegisterPassword]').val(),
                'phoneno'    : $('input[id=RegisterPhoneno]').val()
            });
        var info = JSON.parse(info);
        alert("Name: "+info.name+"\n"+
                "Email: "+info.email+"\n"+
                "Password: "+info.password+"\n"+
                "Phoneno: "+info.phoneno);


        $.ajax({
            type : "POST",
            url : "php/register.php",
            dataType : 'json',
            data : {
                'name'       : $('input[id=RegisterName]').val(),
                'email'       : $('input[id=RegisterEmail]').val(),
                'password'   : $('input[id=RegisterPassword]').val(),
                'phoneno'    : $('input[id=RegisterPhoneno]').val()
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                //console.log(data.message);
                var success=data.success;
                var message = data.message;
                                        
                                        
                if(success==1){
                    $("#RegisterReset").click();
                    $("#RegisterDiv").hide();
                    $("#RegistrationSuccess").show();                                        
                                            
                }else{
                    $( ".help-block" ).remove();
                    $('#RegisterEmailDiv').append('<div class="help-block col-sm-9 text-right">' + message + '</div>');
                }
                                        
                                        
            },
            error : function(data, textStatus, errorThrown) {
                alert(data+textStatus+errorThrown);
                                        
                                            
            }
        });
		
        return false;
    }); 


});
