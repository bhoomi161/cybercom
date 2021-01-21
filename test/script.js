function login(){
	
	var email=document.getElementById("login_email").value;
	var password=document.getElementById("login_pwd").value;

	var AdminData=localStorage.getItem("AdminData");
	var CheckAdmin=JSON.parse(AdminData);
	AdminData=CheckAdmin;

	var UserData=localStorage.getItem("UserData");
	var CheckUser=JSON.parse(UserData);
	UserData=CheckUser;

	var useremail=UserData.some((user)=>user.email===email);
	var userpwd=UserData.some((user)=>user.password===password);

	if(email===AdminData[0].email && password===AdminData[0].pwd){
		window.location.href="D:/test/dashboard.html";
	}
	else if(useremail && userpwd){
		window.location.href="D:/test/user.html";
	}

	else{
		alert("Please enter correct credentials...");
	}
}
function register_now(){

	window.location.href="D:/test/register.html";

}
function chk_pwd(){
	var pwd=document.getElementById('register_pwd').value;
	var cpwd=document.getElementById('register_cpwd').value;

	if(pwd === cpwd){
		document.getElementById("btn_register").disabled=false;
	}
	else{
		alert("Password and confirm password must be matched...");
		document.getElementById("btn_register").disabled=true;
	}
}
function register(){

	var admin_name=document.getElementById("register_name").value;
	var admin_email=document.getElementById("register_email").value;
	var admin_pwd=document.getElementById("register_pwd").value;
	var admin_city=document.getElementById("city").value;
	var admin_state=document.getElementById("state").value;

	var ArrOfAdmin=[];
	var ObjOfAdmin={
		name:admin_name,
		email:admin_email,
		pwd:admin_pwd,
		city:admin_city,
		state:admin_state,
	};

	ArrOfAdmin.push(ObjOfAdmin);
	console.log(ArrOfAdmin);
	localStorage.setItem("AdminData",JSON.stringify(ArrOfAdmin));

	window.location.href="D:/test/login.html";
	document.getElementById("Register_Now").disabled=true;


}

function chk_login(){
		var AdminData=localStorage.getItem("AdminData");
		var CheckAdmin=JSON.parse(AdminData);

		AdminData=CheckAdmin;
		if(AdminData){
			document.getElementById("Register_Now").disabled=true;
		}
}
