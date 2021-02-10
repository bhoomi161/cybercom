function validate(){

	let title=document.getElementById('title').value;
	let content=document.getElementById('content').value;
	let url=document.getElementById('url').value;
	let metatitle=document.getElementById('metatitle').value;
	let parentcategory=document.getElementById('parentcategory').value;
	let imageToUpload=document.getElementById('imageToUpload').value;
	
	if(!title){
		document.getElementById("titleerror").innerHTML = "Enter Proper Title";
	}else{
		document.getElementById("titleerror").innerHTML = "";
	}
	
	if(!content){
		document.getElementById("contenterror").innerHTML = "Enter Proper Content";
	}else{
		document.getElementById("contenterror").innerHTML = "";
	}
	
	if(!url){
		document.getElementById("urlerror").innerHTML = "Enter Proper URL";
	}else{
		document.getElementById("urlerror").innerHTML = "";
	}
	
	if(!metatitle){
		document.getElementById("metatitleerror").innerHTML = "Enter Proper Meta Title";
	}else{
		document.getElementById("metatitleerror").innerHTML = "";
	}
	
	if(!parentcategory){
		document.getElementById("parentcategoryerror").innerHTML = "Enter Proper Parent Category";
	}else{
		document.getElementById("parentcategoryerror").innerHTML = "";
	}
	
	if(!imageToUpload){
		document.getElementById("imageerror").innerHTML = "Enter Proper Image";
	}else{
		document.getElementById("imageerror").innerHTML = "";
	}
}