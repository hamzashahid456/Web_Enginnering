// For the username
function checkUsername(){
    var len = user.Value;
    if(len < 5 || len > 32){
        console.log("Na vae");
    }
}
var user = document.getElementById('username');
user.onblur = checkUsername;


// For address
function checkAddress(){
   // using string that contains all special characters
    var format = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-=";
    var len = Object.keys(address).length;
    var add = address.Value;

    for(let i = 0; i < len; i++){
        for(let j = 0; j < format.length; j++)
        if(add[i] == format[j]){
            console.log("Address Invalid");
        }
    }
}
var address = document.getElementById("address");
address.onblur = checkAddress;



// For phone number
function checkPhone(){ 
    var phoneNumber = phone.Value;
    if(phoneNumber[0] != '+' && phoneNumber[1] && '9' || phoneNumber[2] != '2'){
        console.log("Invalid Phone");
    }
}
var phone = document.getElementById("phone");
phone.onblur = checkPhone;
