//declaring variable for bills
var bill_one,bill_two,bill_three;

//assigning value to the variable
bill_one=124;
bill_two=48;
bill_three=268;

//declaring array for storing tip 
var all_tips=[]

//declaring array for final paid amount
var paid_amounts=[]

//creating a function for calculating tip
function tip_calculator(billamount) {
	var tip;
	//calculating tip based on condition
	if(billamount<50)
		tip=billamount*0.2;
	else if(billamount>=50 && billamount<=200)
		tip=billamount*0.15;
	else
		tip=billamount*0.1;
	

	all_tips.push(tip);
	paid_amounts.push(tip + billamount);

}
//calling function
tip_calculator(bill_one);
tip_calculator(bill_two);
tip_calculator(bill_three);

//displaying all the tips and paid amounts
for(var i=0;i<all_tips.length;i++){
	console.log("Tip "+(i+1)+" :"+all_tips[i]);
	console.log("Paid amount "+(i+1)+" :"+paid_amounts[i]);
}
