const cbx1 = document.getElementsByClassName('tick_con1')[0];
const cbx2 = document.getElementsByClassName('tick_con2')[0];
const cbx3 = document.getElementsByClassName('tick_con3')[0];

const label1 = document.getElementsByClassName('r1')[0];
const label2 = document.getElementsByClassName('r2')[0];
const label3 = document.getElementsByClassName('r3')[0];

const cb1 = document.getElementById('cb1');
const cb2 = document.getElementById('cb2');
const cb3 = document.getElementById('cb3');

label1.addEventListener('click', () => {
    if(cb2.hasAttribute('disabled') && cb3.hasAttribute('disabled')){
        cb2.disabled = false ;
        cb3.disabled = false ;
    }else if(!cb1.hasAttribute('disabled')){
        cb2.disabled = true ;
        cb3.disabled = true ;
    }
})
label2.addEventListener('click', () => {
    if(cb1.hasAttribute('disabled') && cb3.hasAttribute('disabled')){
        cb1.disabled = false ;
        cb3.disabled = false ;
    }else if(!cb2.hasAttribute('disabled')){
        cb1.disabled = true ;
        cb3.disabled = true ;
    }
})
label3.addEventListener('click', () => {
    if(cb1.hasAttribute('disabled') && cb2.hasAttribute('disabled')){
        cb1.disabled = false ;
        cb2.disabled = false ;
    }else if(!cb3.hasAttribute('disabled')){  
        cb1.disabled = true ;
        cb2.disabled = true ;
    }
})

const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    validate();
})

const isEmail = (emailVal) => {
    var atSymbol = emailVal.indexOf('@');
    if(atSymbol < 1) return false;
    var dot = emailVal.lastIndexOf('.');
    if(dot <= atSymbol + 2) return false;
    if(dot === emailVal.length - 1) return false;
    return true;
}

const validate = () => {
    const emailVal = email.value.trim();
    const passwordVal = password.value.trim();
    const erMsgUiE = document.getElementById('errorE');
    const erMsgUiP = document.getElementById('errorP');
    const erMsgUiC = document.getElementById('errorC');

    // Email
    if ( emailVal === ''){
        setError(email, 'Email cannot be blank', erMsgUiE);
    }else if(!isEmail(emailVal)){
        setError(email, 'Not a valid Email, please enter a valid Email', erMsgUiE);
    }else{
        setSuccess(email, 'Success', erMsgUiE);
    }

    // Password
    if ( passwordVal === ''){
        setError(password, 'Password cannot be blank', erMsgUiP);
    }else{
        setSuccess(password, 'Success', erMsgUiP);
    }

    // Checkbox
    if(!cb1.checked && !cb2.checked && !cb3.checked){
        setErrorC('Please check atleast one checkbox', erMsgUiC);
    }else{
        setSuccessC('Success', erMsgUiC);
    }
}

function setError(input, erMsg, erMsgUiCtrl){
    erMsgUiCtrl.style.display = 'block' ;
    erMsgUiCtrl.innerText = erMsg ;
    input.style.marginBottom = '0px';
    input.style.border = '2px solid red' ;
}
function setSuccess(input, sMsg, sMsgUiCtrl){
    sMsgUiCtrl.innerText = sMsg;
    sMsgUiCtrl.style.color = '#2196f3';
    input.style.border = '2px solid var(--col_5)' ;
}
function setErrorC(erMsg, erMsgUiCtrl){
    erMsgUiCtrl.style.display = 'block' ;
    erMsgUiCtrl.innerText = erMsg ;
}
function setSuccessC(sMsg, sMsgUiCtrl){
    sMsgUiCtrl.innerText = sMsg;
    sMsgUiCtrl.style.color = '#2196f3';
}