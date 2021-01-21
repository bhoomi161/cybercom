function login(){
	var admin_email=localStorage.getItem("Admin_email");
	var admin_pwd=localStorage.getItem("Admin_pwd");

	var email=document.getElementById('login_email').value;
	var pwd=document.getElementById('login_pwd').value;

	if(admin_email===email && admin_pwd===pwd){
		window.location.href="dashboard.html";
	}
	else{
		alert("Please enter correct credentials...");
	}
}
function chk_pwd(){
	var pwd=document.getElementById('register_pwd').value;
	var cpwd=document.getElementById('register_cpwd').value;

	if(pwd === cpwd){
		document.getElementById(btn_register).disabled=false;
	}
	else{
		alert("Password and confirm password must be matched...");
		document.getElementById(btn_register).disabled=true;
	}
}
function register(){
	var arrAdmin=[];

	var admin_email=document.getElementById('register_email').value;
	var admin_pwd=document.getElementById('register_pwd').value;

	localStorage.setItem('Admin_email',admin_email);
	localStorage.setItem('Admin_pwd',admin_pwd);
}
function chk_registered(){
	var admin_email=localStorage.getItem("Admin_email");
	var admin_pwd=localStorage.getItem("Admin_pwd");

	if(admin_email!=null && admin_pwd!=null){
		document.getElementById(btn_register).disabled=true;
		alert('Admin already registered....');
	}

}
function chk_login(){
	var admin_email=localStorage.getItem("Admin_email");
	var admin_pwd=localStorage.getItem("Admin_pwd");

	if(admin_email!=null && admin_pwd!=null){
		window.addEventListener('load',()=>{
			document.getElementById(Register_Now).disabled=true;});
		
	}
}