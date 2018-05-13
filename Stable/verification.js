function verify()
{
	var email = document.forms["register"]["Email"].value;
	var email_valid=email.search(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
	if(email_valid!=0)
	{
		alert("Invalid Email ID!! >:\( )");
		return false;
	}
}
