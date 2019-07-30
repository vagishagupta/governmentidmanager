function formValidation()
{
var fname = document.registration.name;
var pass = document.registration.psw;
var repass = document.registration.repsw;
var uemail = document.registration.email; 
var mob = document.registration.phonenumber;

if(name_validation(fname))
{
	if(pass_validation(pass,8,16))
	{  	if(repass_validation(repass,pass))
		{
			if(num_validation(mob))
			{
            	if(email_validation(uemail))
	            {
	                return true;
	            }      
            }
        } 
    }
}
return false;
}
function name_validation(name)
{ 
	var letters = /^[A-Za-z]+(\s[A-Za-z]){0,2}+$/;
    if (name.value="") {
        alert('Name cannot be empty');
        name.focus();
        return false;
    }
	else if(name.value.match(letters))
    	return true;
    else
    {
    	alert('Name must have alphabet characters only');
    	name.focus();
    	return false;
    }
}

function pass_validation(pass,mx,my)
{
	var pass_len = pass.value.length;
    if (pass_len == 0 ||pass_len >= my || pass_len < mx)
    {
        alert("Password should not be empty / length should be between "+mx+" to "+my);
        pass.focus();
        return false;
    }
    return true;
}
function repass_validation(repass,pass)
{
    if(repass.value !== pass.value)
    {
	    alert("Passwords do not match");
	    pass.focus();
	    return false;
    }
    return true; 
}
function email_validation(uemail)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(uemail.value.match(mailformat))
    	return true;
    else
    {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}
function num_validation(number)
{
	var phone=/^\d{10}$/;
	if (number.value.match(phone))
		return true;
	else{
		alert("Enter a valid phone number");
		number.focus();
		return false;
	}
}

function validateLogin()
{
    var email = document.login.email;

    if(email_validation(email))
    {
        return true;
    }
    return false;
}
