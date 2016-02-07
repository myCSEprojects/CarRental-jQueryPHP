/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {

    $("#VehicleInfo").click(function(e) {
        $("#RegisterDiv").hide();
        $("#RegistrationSuccess").hide();
        $("#myCarousel").hide();
        $("#AboutDiv").hide();
        $("#VehicleInfoDiv").show();
        $("#AddRentDiv").hide();
        $("#AddCarDiv").hide();
        $("#AddCarSuccessDiv").hide();
        $("#LoginDiv").hide();
        $("#AddRentSuccessDiv").hide();
        $("#AddOwnerDiv").hide();
        $("#AddBankDiv").hide();
        $("#AddBankSuccessDiv").hide();
        $("#AddCompanyDiv").hide();
        $("#AddCompanySuccessDiv").hide();
        $("#AddIndividualDiv").hide();
        $("#AddIndividualSuccessDiv").hide(); 
	$("#RentalInformationDiv").hide();
        $("#ModifyCarSuccessDiv").hide();         
        $("#ModifyCarRateDiv").hide();
    });

});
