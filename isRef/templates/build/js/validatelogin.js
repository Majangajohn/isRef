function validateregistration(){
    //getting registration input fields
    var username = document.getElementById('username');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var cpassword = document.getElementById('cpassword');
    
    //getting registration input fields error
    var usernameerror = document.getElementById('username-error');
    var emailerror = document.getElementById('email-error');
    var passworderror = document.getElementById('password-error');
    var cpassworderror = document.getElementById('cpassword-error');
    
    if(username.value == ""){
        username.style.border="1px solid #90111A";
        usernameerror.innerHTML = "** provide username** ";
        usernameerror.style.color = "#90111A";
        username.focus();
        return false;
    }
    if(email.value == ""){
        email.style.border="1px solid #90111A";
        emailerror.innerHTML = "** provide email** ";
        emailerror.style.color = "#90111A";
        email.focus();
        return false;
    }
    if(password.value == ""){
        password.style.border="1px solid #90111A";
        passworderror.innerHTML = "** provide password** ";
        passworderror.style.color = "#90111A";
        password.focus();
        return false;
    }
    if(cpassword.value == ""){
        cpassword.style.border="1px solid #90111A";
        cpassworderror.innerHTML = "** confirm password** ";
        cpassworderror.style.color = "#90111A";
        cpassword.focus();
        return false;
    }
    if(password.value != cpassword.value){
        cpassword.style.border="1px solid #90111A";
        cpassworderror.innerHTML = "** Password does not match** ";
        cpassworderror.style.color = "#90111A";
        cpassword.focus();
        return false;
    }
    
        return true;
    }