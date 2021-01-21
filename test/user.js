function UserAdd(){

	var fname=document.getElementById("fname").value;
	var email=document.getElementById("mail").value;
	var pwd=document.getElementById("d_pwd").value;
	var DOB=document.getElementById("DOB").value;

	var ArrOfUser=[];
	var ObjOfUser={
		name:fname,
		email:email,
		password:pwd,
		DOB:DOB,
	};
	ArrOfUser.push(ObjOfUser);
	localStorage.push("User",JSON.stringify(ArrOfUser));

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
			<td></td>
			<td><a href="edit.html">edit</a><a href="delete.html"></a></td>
			</tr>`);
	}
	var tbody=document.querySelector("#body");
	tbody.innerHTML=TableData;
}