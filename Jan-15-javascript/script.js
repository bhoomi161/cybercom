//object creation through function constructor
/*var Person=function(name,YearofBirth,job){
	this.name=name;
	this.YearofBirth=YearofBirth;
	this.job=job
}

Person.prototype.calculateAge=function(){
	console.log(2021-this.YearofBirth);
};

Person.prototype.lastname='smith';
var john=new Person('john',1990,'Programmer');
var mark=new Person('mark',1998,'Designer');

john.calculateAge();
mark.calculateAge();

console.log(john.lastname);
console.log(mark.lastname);*/

//Object.create

/*var personProto={
	calculateAge:function(){
		console.log(2021-this.YearofBirth);
	}
};

var john=Object.create(personProto);
john.name='John';
john.YearofBirth=1998;
john.job='Teacher';

var jane=Object.create(personProto,{
	name:{value:'jane'},
	YearofBirth:{value:1990},
	job:{value:'Programmer'}
});*/

//Objects and function

//primitive
/*var a=10;
var b=a;
a=20

console.log(a);
console.log(b);

//object

var obj1={
	name:'John',
	age:25
};
var obj2=obj1;
obj1.age=30;

console.log(obj1.age);
console.log(obj2.age);

//function

var age=23;
var obj={
	name:'bhumi',
	city:'ahmedabad'
};

function change(a,b){
	a=20,
	b.city='rajkot'
}

change(age,obj)

console.log(age);
console.log(obj.city);*/

var years=[1990,1992,1994,1996,1998];

function arrayCalc(arr,fn){
	var arrRes=[];
	for(i=0;i<arr.length;i++){
		arrRes.push(fn(arr[i]));
	}
	return arrRes;
}

function calcAge(item){
	return 2021-item;
}
var ages=arrayCalc(years,calcAge);
console.log(ages);