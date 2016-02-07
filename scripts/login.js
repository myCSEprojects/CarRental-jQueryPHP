/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    $("#Login").click(function(e) {
        
        $("#RegisterDiv").hide();
        $("#RegistrationSuccess").hide();
        $("#VehicleInfoDiv").hide();
        $("#myCarousel").hide();
        $("#AboutDiv").hide();
        $("#AddRentDiv").hide();
        $("#AddCarDiv").hide();
        $("#AddCarSuccessDiv").hide();
        $("#LoginDiv").show();
        $("#AddRentSuccessDiv").hide();
        $("#AddOwnerDiv").hide();
        $("#AddBankDiv").hide();
        $("#AddBankSuccessDiv").hide();
        $("#AddCompanyDiv").hide();
        $("#AddCompanySuccessDiv").hide();
        $("#AddIndividualDiv").hide();
        $("#AddIndividualSuccessDiv").hide(); 
        $("#RentalInformationDiv").hide();
        $("#LoginReset").click();
        $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
    });
        
        
    $("#LoginForm").submit(function(e){
        var info=JSON.stringify({
            'email'       : $('input[id=LoginEmail]').val(),
            'password'   : $('input[id=LoginPassword]').val(),                                            
        });
        var info = JSON.parse(info);
        alert("Email: "+info.email+"\n"+
                "Password: "+info.password);
        
        $.ajax({
            
            type : "POST",
            url : "php/login.php",
            dataType : 'json',
            data : {
                'email'       : $('input[id=LoginEmail]').val(),
                'password'   : $('input[id=LoginPassword]').val(),                                            
            },
            cache : false,
            success : function(data, textStatus, xhr) {
                var success=data.success;
                var message = data.message;
                console.log(message);                                    
                if(success==1){
                    $("#LoginReset").click();
                    window.location = 'http://localhost:81/CAR/index.php';         
                }else{
                    if(success==2){
                        $( ".help-block" ).remove();
                        $('#LoginPasswordDiv').append('<div class="help-block col-sm-9 text-right">' + message + '</div>');
                    }else{
                        $( ".help-block" ).remove();
                        $('#LoginEmailDiv').append('<div class="help-block col-sm-9 text-right">' + message + '</div>');
                    }
                                             
                }
                                        
                                        
            },
            error : function(data, textStatus, errorThrown) {
                alert(data+textStatus+errorThrown);
                                        
                                            
            }
        });
		
        return false;
    }); 
                    
        
});
