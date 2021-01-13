//creating object

var mark={
	name:'mark steve',
	height:1.5,
	mass:80,

	calc_BMI:function(){
		this.BMI=this.mass/(this.height*this.height);
		return this.BMI;
		}
	};

var john={
	name:'john  smith',
	height:1.5,
	mass:90,

	calc_BMI:function(){
	this.BMI=this.mass/(this.height*this.height);
	return this.BMI;
	}
};

var mark_BMI=mark.calc_BMI();
var john_BMI=john.calc_BMI();

if(mark_BMI<john_BMI)
	console.log(john.name + ' has higher BMI than mark and his BMI is: '+john.BMI);
else if(mark_BMI>john_BMI)
	console.log(mark.name + ' has higher BMI than john and his BMI is: '+mark.BMI);
else
	console.log('John and Mark both have same BMI');

console.log(john);
console.log(mark);