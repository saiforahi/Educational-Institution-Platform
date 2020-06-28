const institute = document.getElementById("insitute");
const student = document.getElementById("student");
const container = document.getElementById("container");
const showpass = document.getElementById("showpass");

institute.addEventListener("click", () => {
    container.classList.remove("active_panel");
});
student.addEventListener("click", () => {
    container.classList.add("active_panel");
});

var state = false;
function tooglepass(){
    document.getElementById("passchange").innerText = "Hide";
    if(state){
        document.getElementById("password").setAttribute("type", "password");
        state = false;
        document.getElementById("passchange").innerText = "Show";
    }else{
        document.getElementById("password").setAttribute("type", "text");
        state = true;
    }
}
var st = false;
function con(){
    document.getElementById("conf").innerText = "Hide";
    if(st){
        document.getElementById("confirm_password").setAttribute("type", "password");
        st = false;
        document.getElementById("conf").innerText = "Show";
    }else{
        document.getElementById("confirm_password").setAttribute("type", "text");
        st = true;
    }
}

var select = document.getElementById("instituteName");
var fullName = document.getElementById("fullName");
var phone_number = document.getElementById("phone_number");
var email_address = document.getElementById("email_address");
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");
var address = document.getElementById("address");

function fullNameValid (){
    fullName.placeholder ="Please enter your institute Admin Name";
    fullName.style.border = "1px solid red";
}
function selectValid(){
    select.style.border = "1px solid red";
}
function phoneNumberValid(){
    phone_number.placeholder ="Please enter a valid 11 digit phone number";
    phone_number.style.border = "1px solid red";
}
function emailAddressValid(){
    email_address.placeholder ="Please enter a valid E-mail address";
    email_address.style.border = "1px solid red";
}
function passwordValid(){
    password.placeholder ="Please enter at least 8 character";
    password.style.border = "1px solid red";
}
function blankConfirmPasswordValid(){
    confirm_password.placeholder ="Please enter a similar password";
    confirm_password.style.border = "1px solid red";
}
function confirmPasswordValid(){
    confirm_password.placeholder ="Please enter a similar password";
    confirm_password.style.border = "1px solid red";
}
function addressValid(){
    address.placeholder ="Please enter a valid address";
    address.style.border = "1px solid red";
}

function valid(){
    if(select.value == "select"){
        selectValid ();
        return false;
    }
    if(fullName.value.length <= 0){
        fullNameValid ();
        return false;
    }
    if(phone_number.value.length < 11){
        phoneNumberValid ();
        return false;
    }
    if(email_address.value.length <= 0){
        emailAddressValid();
        return false;
    }
    if(password.value.length < 8){
        password.value = "";
        passwordValid();
        return false;
    }
    if(confirm_password.value.length < 8){
        confirm_password.value = "";
        blankConfirmPasswordValid();
        return false;
    }else if (confirm_password.value !== password.value){
        confirm_password.value = "";
        confirmPasswordValid();
        return false;
    }
    if(address.value.length <= 0){
        addressValid();
        return false;
    }
} 


var stateStu = false;
function tooglepassStu(){
    document.getElementById("passchangeStu").innerText = "Hide";
    if(stateStu){
        document.getElementById("passwordStu").setAttribute("type", "password");
        stateStu = false;
        document.getElementById("passchangeStu").innerText = "Show";
    }else{
        document.getElementById("passwordStu").setAttribute("type", "text");
        stateStu = true;
    }
}
var stStu = false;
function conStu(){
    document.getElementById("confStu").innerText = "Hide";
    if(stStu){
        document.getElementById("confirm_passwordStu").setAttribute("type", "password");
        stStu = false;
        document.getElementById("confStu").innerText = "Show";
    }else{
        document.getElementById("confirm_passwordStu").setAttribute("type", "text");
        stStu = true;
    }
}

var selectStu = document.getElementById("instituteNameStu");
var selectStud = document.getElementById("instituteNameStud");
var fullNameStu = document.getElementById("fullNameStu");
var phone_numberStu = document.getElementById("phone_numberStu");
var email_addressStu = document.getElementById("email_addressStu");
var passwordStu = document.getElementById("passwordStu");
var confirm_passwordStu = document.getElementById("confirm_passwordStu");

function fullNameValidStu (){
    fullNameStu.placeholder ="Please enter your correct Full-Name";
    fullNameStu.style.border = "1px solid red";
}
function selectValidStu(){
    selectStu.style.border = "1px solid red";
}
function selectValidStud(){
    selectStud.style.border = "1px solid red";
}
function phoneNumberValidStu(){
    phone_numberStu.placeholder ="Please enter a valid 11 digit phone number";
    phone_numberStu.style.border = "1px solid red";
}
function emailAddressValidStu(){
    email_addressStu.placeholder ="Please enter a valid E-mail address";
    email_addressStu.style.border = "1px solid red";
}
function passwordValidStu(){
    passwordStu.placeholder ="Please enter at least 8 character";
    passwordStu.style.border = "1px solid red";
}
function blankConfirmPasswordValidStu(){
    confirm_passwordStu.placeholder ="Please enter a similar password";
    confirm_passwordStu.style.border = "1px solid red";
}
function confirmPasswordValidStu(){
    confirm_passwordStu.placeholder ="Please enter a similar password";
    confirm_passwordStu.style.border = "1px solid red";
}

function validStu(){
    if(selectStud.value == "select"){
        selectValidStud ();
        return false;
    }
    if(selectStu.value == "select"){
        selectValidStu ();
        return false;
    }
    if(fullNameStu.value.length <= 0){
        fullNameValidStu ();
        return false;
    }
    if(phone_numberStu.value.length < 11){
        phoneNumberValidStu ();
        return false;
    }
    if(email_addressStu.value.length <= 0){
        emailAddressValidStu();
        return false;
    }
    if(passwordStu.value.length < 8){
        passwordStu.value = "";
        passwordValidStu();
        return false;
    }
    if(confirm_passwordStu.value.length < 8){
        confirm_passwordStu.value = "";
        blankConfirmPasswordValidStu();
        return false;
    }else if (confirm_passwordStu.value !== passwordStu.value){
        confirm_passwordStu.value = "";
        confirmPasswordValidStu();
        return false;
    }
}
var stateMob = false;
function tooglepassMob(){
    document.getElementById("passchangeMob").innerText = "Hide";
    if(stateMob){
        document.getElementById("passwordMob").setAttribute("type", "password");
        stateMob = false;
        document.getElementById("passchangeMob").innerText = "Show";
    }else{
        document.getElementById("passwordMob").setAttribute("type", "text");
        stateMob = true;
    }
}
var stMob = false;
function conMob(){
    document.getElementById("confMob").innerText = "Hide";
    if(stMob){
        document.getElementById("confirm_passwordMob").setAttribute("type", "password");
        stMob = false;
        document.getElementById("confMob").innerText = "Show";
    }else{
        document.getElementById("confirm_passwordMob").setAttribute("type", "text");
        stMob = true;
    }
}

var selectMob = document.getElementById("instituteName_mobile");
var fullNameMob = document.getElementById("fullNameMob");
var phone_numberMob = document.getElementById("phone_numberMob");
var email_addressMob = document.getElementById("email_addressMob");
var passwordMob = document.getElementById("passwordMob");
var confirm_passwordMob = document.getElementById("confirm_passwordMob");
var addressMob = document.getElementById("addressMob");

function fullNameValidMob (){
    fullNameMob.placeholder ="Please enter your institute Admin Name";
    fullNameMob.style.border = "1px solid red";
}
function selectValidMob(){
    selectMob.style.border = "1px solid red";
}
function phoneNumberValidMob(){
    phone_numberMob.placeholder ="Please enter a valid 11 digit phone number";
    phone_numberMob.style.border = "1px solid red";
}
function emailAddressValidMob(){
    email_addressMob.placeholder ="Please enter a valid E-mail address";
    email_addressMob.style.border = "1px solid red";
}
function passwordValidMob(){
    passwordMob.placeholder ="Please enter at least 8 character";
    passwordMob.style.border = "1px solid red";
}
function blankConfirmPasswordValidMob(){
    confirm_passwordMob.placeholder ="Please enter a similar password";
    confirm_passwordMob.style.border = "1px solid red";
}
function confirmPasswordValidMob(){
    confirm_passwordMob.placeholder ="Please enter a similar password";
    confirm_passwordMob.style.border = "1px solid red";
}
function addressValidMob(){
    addressMob.placeholder ="Please enter a valid address";
    addressMob.style.border = "1px solid red";
}

function validMob(){
    if(selectMob.value == "select"){
        selectValidMob ();
        return false;
    }
    if(fullNameMob.value.length <= 0){
        fullNameValidMob ();
        return false;
    }
    if(phone_numberMob.value.length < 11){
        phoneNumberValidMob ();
        return false;
    }
    if(email_addressMob.value.length <= 0){
        emailAddressValidMob();
        return false;
    }
    if(passwordMob.value.length < 8){
        passwordMob.value = "";
        passwordValidMob();
        return false;
    }
    if(confirm_passwordMob.value.length < 8){
        confirm_passwordMob.value = "";
        blankConfirmPasswordValidMob();
        return false;
    }else if (confirm_passwordMob.value !== passwordMob.value){
        confirm_passwordMob.value = "";
        confirmPasswordValidMob();
        return false;
    }
    if(addressMob.value.length <= 0){
        addressValidMob();
        return false;
    }
} 
