function validate(){
	let prefix=document.getElementById('prefix').;
	let fname=document.getElementById('fname').value;
	let lname=document.getElementById('lname').value;
	let information=document.getElementById('information').value;
	let email=document.getElementById('email').value;
	let phone=document.getElementById('phone').value;
	let password=document.getElementById('password').value;
	let cpassword=document.getElementById('cpassword').value;
	let agree=document.getElementById('agree').checked;

	let namepattern=/^[A-Za-z+\s]*[A-Za-z]$/;
	let pwdpattern=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	let emailpattern=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	let phonepattern=/^\d{10}$/;

	//checking for prefix
	if(prefix===""){
		document.getElementById("prefixerror").innerHTML = "Select prefix";
 	 } else {
   	 document.getElementById("emailerror").innerHTML = "";

	}

	//checking for firstname
	if(fname ==="" || !fname.match(namepattern) || fname.length<3){
		document.getElementById("fnameerror").innerHTML = "Enter proper first name";
 	 } else {
   	 document.getElementById("fnameerror").innerHTML = "";
	}
	//checking for the lastname
	if(lname ==="" || !lname.match(namepattern) || lname.length<3){
		document.getElementById("lnameerror").innerHTML = "Enter proper last name";
 	 } else {
   	 document.getElementById("lnameerror").innerHTML = "";
   	}

   	if (!email || !email.match(emailpattern)) {
   	 document.getElementById("emailerror").innerHTML = "Enter proper email";
 	 } else {
   	 document.getElementById("emailerror").innerHTML = "";
  	}

  	if(phone==="" || !phone.match(phonepattern)){
  		document.getElementById("phoneerror").innerHTML = "Enter proper mobile number";
 	 } else {
   		 document.getElementById("phoneerror").innerHTML = "";
	}


  	if (password==="" || !password.match(pwdpattern)) {
   	 document.getElementById("passworderror").innerHTML = "Enter proper password";
 	 } else {
   	 document.getElementById("passworderror").innerHTML = "";
  	}

  	if ( cpassword==="" ||cpassword!=password) {
   	 document.getElementById("cpassworderror").innerHTML = "Password and confirm password must be same";
 	 } else {
   	 document.getElementById("cpassworderror").innerHTML = "";
  	}

  	if(information===""){
  		 document.getElementById("informationerror").innerHTML = "Please fill the information";
 	 } else {
   	 	document.getElementById("informationerror").innerHTML = "";
  	}
  	if (!agree) {
   	 document.getElementById("agreeerror").innerHTML = "Please agree to the terms and condition";
 	 } else {
   	 document.getElementById("agreeerror").innerHTML = "";
  	}

  	
}