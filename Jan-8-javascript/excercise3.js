//JS coding challenge 2

//Declaring variables
var john_match1=89;
var john_match2=120;
var john_match3=103;

var mike_match1=116;
var mike_match2=94;
var mike_match3=123;

//1.Calcualte average score for both team
var avg_JohnTeam=(john_match1+john_match2+john_match3)/3;
var avg_MikeTeam=(mike_match1+mike_match2+mike_match3)/3;

//2.Decide which team wins in average
var compare_avg=avg_MikeTeam > avg_JohnTeam;

if(compare_avg=true)
	console.log("Mike's team is winner and their average score: "+avg_MikeTeam);
else
	console.log("John's team is winner and their average score: "+avg_JohnTeam);

//3.change the score to show different winners

john_match1=140;
john_match2=140;
john_match3=140;

mike_match1=140;
mike_match2=140;
mike_match3=140;

avg_JohnTeam=(john_match1+john_match2+john_match3)/3;
avg_MikeTeam=(mike_match1+mike_match2+mike_match3)/3;

if(avg_MikeTeam > avg_JohnTeam)
	console.log("Mike's team is winner and their average score: "+avg_MikeTeam);
else if(avg_MikeTeam < avg_JohnTeam)
	console.log("John's team is winner and their average score: "+avg_JohnTeam);
else
	console.log("Match is draw both have same average score!!");

//4.Comparison between three team 

var mary_match1=97;
var mary_match2=134;
var mary_match3=105;

avg_JohnTeam=(john_match1+john_match2+john_match3)/3;
avg_MikeTeam=(mike_match1+mike_match2+mike_match3)/3;
var avg_MaryTeam=(mary_match1+mary_match2+mary_match3)/3;

if(avg_JohnTeam>avg_MikeTeam && avg_JohnTeam>avg_MaryTeam)
	console.log("John's team is winner and their average score is: "+avg_JohnTeam);
else if(avg_MikeTeam>avg_JohnTeam && avg_MaryTeam<avg_MikeTeam)
	console.log("Mike's team is winner and their average score is: "+avg_MikeTeam);
else if(avg_MaryTeam>avg_JohnTeam && avg_MaryTeam>avg_MikeTeam)
	console.log("Mary's team is winner and their average score is: "+avg_MaryTeam);
else if(avg_JohnTeam==avg_MikeTeam && avg_JohnTeam!=avg_MaryTeam && avg_JohnTeam>avg_MaryTeam)
	console.log("John and Mike both team have same score:"+avg_JohnTeam + " and they are winner");
else if(avg_JohnTeam==avg_MaryTeam && avg_JohnTeam!=avg_MikeTeam && avg_JohnTeam>avg_MikeTeam)
	console.log("John and Mary both team have same score:"+avg_JohnTeam + " and they are winner");
else if(avg_MikeTeam==avg_MaryTeam && avg_MikeTeam!=avg_JohnTeam && avg_MikeTeam>avg_JohnTeam)
	console.log("Mike and Mary both team have same score:"+avg_MikeTeam + " and they are winner");
else
	console.log("All three team have same score: "+avg_MikeTeam);