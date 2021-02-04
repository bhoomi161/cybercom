//adds value to the drop down box
function addOption(selectbox,text,value){
	var opt=document.createElement("option");
	opt.text=text;
	opt.value=value;
	selectbox.options.add(opt);
}
function addOption_data(){
	var arr=['january','february','march','april','may','june','july','august','september','october','november','december'];
	for(var i=1;i<=31;i++){
		addOption(document.form3.day_list, i, i);
    }
    for (var i = 0; i <= 11; ++i) {
        addOption(document.form3.month_list, arr[i], arr[i]);
    }
    for (var i = 1950; i < 2015; ++i) {
        addOption(document.form3.year_list, i, i);
    }
}

//function for validating fields
function validateForm() {
	//fetching values of the fields
	let fname=document.getElementById('fname').value;
	let lname=document.getElementById('lname').value;
	let month=document.getElementById('month_list').value;
	let date=document.getElementById('day_list').value;
	let year=document.getElementById('year_list').value;
	let male=document.getElementById('male').checked;
	let female=document.getElementById('female').checked;
	let country=document.getElementById('country').value;
	let email=document.getElementById('email').value;
	let phone=document.getElementById('phone').value;
	let password=document.getElementById('password').value;
	let cpassword=document.getElementById('cpassword').value;
	let agree=document.getElementById('agree').checked;

	//pattern for the different field must be match
	let namepattern=/^[A-Za-z]*[A-Za-z]$/;
	let pwdpattern=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	let emailpattern=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	let phonepattern=/^\d{10}$/;

	//checking for the firstname
	if(fname ==="" || !fname.match(namepattern) || fname.length<3){
		alert('Firstname is required and length must be greater than or equal to 3');
	}
	//checking for the lastname
	if(lname ==="" || !lname.match(namepattern) || lname.length<3){
		alert('Lastname is required and length must be greater than or equal to 3');
	}

	//checking for the date of birth
	if(date==="" || month==="" || year===""){
		alert('Please select D.O.B');
	}
	//checking for gender
	if(!male && !female){
		alert('Please choose gender');
	}
	//checking for gender
	if(!country){
		alert("Please select country");
	}
	//checking for email
	if(email==="" || !email.match(emailpattern)){
		alert('Please enter valid email address');
	}
	//checking for phone
	if(phone==="" || !phone.match(phonepattern)){
		alert("Please enter phone number");
	}
	//checking for password
	if(password==="" || !password.match(pwdpattern)){
		alert('Please enter valid password');
	}
	//password and confirm password must be matched
	if(cpassword !== password){
		alert('Password and confirm password must be same');
	}
	//checking for terms and condition
	if(!agree){
		alert('Please agree to the terms');
	}
}

