function validateLogin(){
    if(document.login.username.value == ""){
        alert("Insert an username");
        return false;
    }
    if(document.login.password.value == ""){
        alert("Insert a password");
        return false;
    }
    return true;
}
