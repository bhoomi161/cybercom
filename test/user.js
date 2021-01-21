function UserAdd(){

	var fname=document.getElementById("fname").value;
	var email=document.getElementById("mail").value;
	var pwd=document.getElementById("d_pwd").value;
	var DOB=document.getElementById("DOB").value;

	var cyear=new Date().getFullYear();
	var dobStr=DOB.toString();
	var bdyear=dobStr.substring(0,4);
	var age=cyear-bdyear;
	console.log(age);

	var UserData=localStorage.getItem("UserData");
	var CheckUser=JSON.parse(UserData);
	UserData=CheckUser;
	var ArrOfUser=UserData;

	var ObjOfUser={
		name:fname,
		email:email,
		password:pwd,
		DOB:DOB,
		age:age,
	};
	ArrOfUser.push(ObjOfUser);
	localStorage.setItem("UserData",JSON.stringify(ArrOfUser));

}
function TableOfUser(){
	var UserData=localStorage.getItem("UserData");
	var CheckUser=JSON.parse(UserData);
	UserData=CheckUser;

	if(UserData){
		var TableData=UserData.map((user)=>`
			<tr>
			<td>${user.name}</td>
			<td>${user.email}</td>
			<td>${user.password}</td>
			<td>${user.DOB}</td>
			<td>${user.age}</td>
			<td><a href="javascript:edit()">edit</a>
			&nbsp;<a href="#" onclick="delete()">delete</a></td>

			</tr>`);
	}
	var tbody=document.querySelector("#body");
	tbody.innerHTML=TableData;

function edit(){
		console.log("Edit..");
	}
}