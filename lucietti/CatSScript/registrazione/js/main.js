function validateRegistration(){
    if(ValidateUsername() == false){
        return false;
    }
    if(ValidateEmail() == false){
        return false;
    }
    if(ValidatePassword() == false){
        return false;
    }
    return true;
}

function ValidateUsername(){
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)+$/.test(document.registr.username.value)){
        alert("Username can't be an email");
        return false;
    }
    else if(document.registr.username.value == ""){
        alert("Insert an username");
        return false;
    }
    return true;
}

function ValidateEmail(){
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)+$/.test(document.registr.email.value)){
        return true;
    }
    alert("You have entered an invalid email address!");
    return false;
}

function ValidatePassword(){
    if(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/.test(document.registr.password.value)){
        return true;
    }
    alert("Insert a valid password; a valid password must have at least one uppercase character, one lowercase character, one special character and one number digit.");
    return false;
}