document.addEventListener('DOMContentLoaded', (event) => {
    var stMobStu = false;
    function con(){
        document.getElementById("confMob").innerText = "Hide";
        if(stMobStu){
            document.getElementById("confirm_passwordMobStu").setAttribute("type", "password");
            stMobStu = false;
            document.getElementById("confMob").innerText = "Show";
        }else{
            document.getElementById("confirm_passwordMobStu").setAttribute("type", "text");
                stMobStu = true;
        }
    }
    
  })
  var stateMobStu = false;
  function tooglepass(){
      document.getElementById("passchangeMob").innerText = "Hide";
      if(stateMobStu){
          document.getElementById("passwordMobStu").setAttribute("type", "password");
          stateMobStu = false;
          document.getElementById("passchangeMob").innerText = "Show";
      }else{
          document.getElementById("passwordMobStu").setAttribute("type", "text");
          stateMobStu = true;
      }
  }

var selectMobStu = document.getElementById("instituteName_mobileStu");
var selectMobStud = document.getElementById("instituteName_mobileStud");
var fullNameMobStu = document.getElementById("fullNameMobStu");
var phone_numberMobStu = document.getElementById("phone_numberMobStu");
var email_addressMobStu = document.getElementById("email_addressMobStu");
var passwordMobStu = document.getElementById("passwordMobStu");
var confirm_passwordMobStu = document.getElementById("confirm_passwordMobStu");

function fullNameValidMobStu (){
    fullNameMobStu.placeholder ="Please enter your correct Full-Name";
    fullNameMobStu.style.border = "1px solid red";
}
function selectValidMobStu(){
    selectMobStu.style.border = "1px solid red";
}
function selectValidMobStud(){
    selectMobStud.style.border = "1px solid red";
}
function phoneNumberValidMobStu(){
    phone_numberMobStu.placeholder ="Please enter a valid 11 digit phone number";
    phone_numberMobStu.style.border = "1px solid red";
}
function emailAddressValidMobStu(){
    email_addressMobStu.placeholder ="Please enter a valid E-mail address";
    email_addressMobStu.style.border = "1px solid red";
}
function passwordValidMobStu(){
    passwordMobStu.placeholder ="Please enter at least 8 character";
    passwordMobStu.style.border = "1px solid red";
}
function blankConfirmPasswordValidMobStu(){
    confirm_passwordMobStu.placeholder ="Please enter a similar password";
    confirm_passwordMobStu.style.border = "1px solid red";
}
function confirmPasswordValidMobStu(){
    confirm_passwordMobStu.placeholder ="Please enter a similar password";
    confirm_passwordMobStu.style.border = "1px solid red";
}

function validMobStu(){
    if(selectMobStud.value == "select"){
        selectValidMobStud ();
        return false;
    }
    if(selectMobStu.value == "select"){
        selectValidMobStu ();
        return false;
    }
    if(fullNameMobStu.value.length <= 0){
        fullNameValidMobStu ();
        return false;
    }
    if(phone_numberMobStu.value.length < 11){
        phoneNumberValidMobStu ();
        return false;
    }
    if(email_addressMobStu.value.length <= 0){
        emailAddressValidMobStu();
        return false;
    }
    if(passwordMobStu.value.length < 8){
        passwordMobStu.value = "";
        passwordValidMobStu();
        return false;
    }
    if(confirm_passwordMobStu.value.length < 8){
        confirm_passwordMobStu.value = "";
        blankConfirmPasswordValidMobStu();
        return false;
    }else if (confirm_passwordMobStu.value !== passwordMobStu.value){
        confirm_passwordMobStu.value = "";
        confirmPasswordValidMobStu();
        return false;
    }
} 