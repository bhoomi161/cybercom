function validate(){
	let email=document.getElementById('email').value;
	let password=document.getElementById('password').value;

	//passwordHash=md5(password);

	let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  	if (!email || !email.match(emailPattern)) {
   	 document.getElementById("emailerror").innerHTML = "Enter proper email";
 	 } else {
   	 document.getElementById("emailerror").innerHTML = "";
  	}

  	let passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  	if (!password || !password.match(passwordPattern)) {
   	 document.getElementById("passworderror").innerHTML = "Enter proper password";
 	 } else {
   	 document.getElementById("passworderror").innerHTML = "";
  	}

}

