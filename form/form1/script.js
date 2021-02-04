//function for validating fields
function validateForm() {
	//fetching values of the fields
	let name=document.getElementById("name").value;
	let password=document.getElementById('password').value;
	let address=document.getElementById('address').value;
	let hocky=document.getElementById('hocky').checked;
	let football=document.getElementById('football').checked;
	let badminton=document.getElementById('badminton').checked;
	let cricket=document.getElementById('cricket').checked;
	let vollyball=document.getElementById('vollyball').checked;
	let male=document.getElementById('male').checked;
	let female=document.getElementById('female').checked;
	let age=document.getElementById('age').value;
	let file=document.getElementById('file').value;

	//calling function for validation of fields
	checkName(name);
	checkPassword(password);
	checkAddress(address);
	checkGame(hocky,football,badminton,cricket,vollyball);
	checkGender(male,female);
	checkAge(age);
	checkFile(file);
}
//function for checking name field
function checkName(name){
	let pattern=/^[A-Za-z]*[A-Za-z]$/;
	if(name ==="" || !name.match(pattern) || name.length<3){
		alert('Name is required and length must be greater than or equal to 3');
	}
}
//function for checking password field
function checkPassword(password){
	let pattern=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	if(password ==="" || !password.match(pattern)){
		alert('Password is required and length must be greater than or equal to 8');
	}
}
//function for checking address field
function checkAddress(address){
	if(address===""){
		alert('Please enter address');
	}
}
//function for checking age field
function checkAge(age){
	if(age===""){
		alert('Please select age');
	}
}

//function for checking gender field
function checkGender(male,female){
	if(!male && !female){
		alert('Please choose gender');
	}
}

//function for checking game field
function checkGame(hocky,football,badminton,cricket,vollyball){
	if(!hocky&& !football && !badminton && !cricket && !vollyball){
		alert('Please select at least 1 game');
	}
}
//function for checking file field
function checkFile(file){
	if(file===""){
		alert('Please choose the file');
	}
}