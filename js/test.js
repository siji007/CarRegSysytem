var fullname = document.getElementById('fullName');
var phoneNumber = document.getElementById('phoneNumber');
var error = document.getElementById('error');
var nextOfKin = document.getElementById('nextOfKin');
var carPlateNumber = document.getElementById('plateNumber');
var carColorn= document.getElementById('carColor');

function validateTest(){
    validateTest.preventDefault();

    var testName = /^[A-Z][a-b] $/;
    var nextOfKin = /^[A-Z][a-b] $/;
    var plateNumber = /^A-ZA-ZA-Z[-]0-90-90-9A-Z $/;


    var errorIndex = [];
    if(!fullname.match(testName)){
        errorIndex.push('Name must Contain Letters Only');
        error.innerHTML = errorIndex[0];

    }else if(!nextOfKin.match(nextOfKin)){
        errorIndex.push('Next Must Contain Only letters');
        error.innerHTML = errorIndex[1];
    }else if(phoneNumber > 11){
        errorIndex.push('Phone Number Must Contain 11 digits Only');
        error.innerHTML = errorIndex[2];
    }else if(phoneNumber < 11){
        errorIndex.push('Phone Number must be 11 digits only');
        error.innerHTML = errorIndex[3];
    }else if(carPlateNumber > 9 || carPlateNumber < 9){
        errorIndex.push('Plate Number Length is incorrect');
        error.innerHTML = errorIndex[4];
    }else if(!carPlateNumber.match(plateNumber)){
        errorIndex.push('Plate Number is incorrect');
        error.innerHTML = errorIndex[5];
    }




}