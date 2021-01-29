<html>
	<head>
		<title>Form with php</title>
		<style>
         .error {
         	color: #FF0000;
         }
      </style>
	</head>
	<body>
		<?php

		$name=$email=$gender=$class=$time=$subject="";
		$nameError=$emailError=$genderError=$websiteError=$subjectError=$timeError=$checkError="";

		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(empty($_POST['name'])){
				$nameError="Please enter the name";
			} else {
				$name=$_POST['name'];
			}

			if(empty($_POST['email'])){
				$emailError="Please enter the email address";
			} else {
				$email=$_POST['email'];
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailError = "Invalid email format"; 
			}

			if(empty($_POST['time'])){
				$timeError="Please enter the time";
			} else {
				$time=$_POST['time'];
			}

			if (empty($_POST["class"])) {
               $class = "";
            }else {
               $class = $_POST["class"];
            }
            
            if (empty($_POST["gender"])) {
               $genderError = "Choose the gender";
            }else {
               $gender =$_POST["gender"];
            }
            
            if (empty($_POST["subject"])) {
               $subjectError = "Please select 1 or more";
            }else {
               $subject = $_POST["subject"];	
            }

            if(!isset($_POST['checked'])){
            	$checkError="You must agree to terms";
       		}
         }
	}
	?>
		<h1>Student Registration Form</h1>
		<form action="form.php" method="POST">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name">
						<span class = "error">* <?php echo $nameError;?></span>
					</td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email">
						<span class = "error">* <?php echo $emailError;?></span>
					</td>
				</tr>
				<tr>
					<td>Time:</td>
					<td><input type="text" name="time">
						<span class = "error">* <?php echo $timeError;?></span>
					</td>
				</tr>
				<tr>
					<td>Classes:</td>
					<td><textarea name="class" rows="6" cols="40"></textarea>
					</td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
					<input type="radio" name="gender" value="female">Female
					<input type="radio" name="gender" value="male">Male
					<span class = "error">* <?php echo $genderError;?></span>
					</td>
				</tr>
				<tr>
					<td>Select:</td>
					<td>
						<select name="subject[]" size=4 multiple>
							<option value="Android">Android</option>
							<option value="Oracle">Oracle</option>
							<option value="iOS">iOS</option>
							<option value="Data Structure">Data Structure</option>
							<option value="Java">Java</option>
							<option value="Python">Python</option>
						</select>
						<span class = "error">* <?php echo $subjectError;?></span>
					</td>
				</tr>
				<tr>
					<td>Agree</td>
					<td><input type = "checkbox" name = "checked" value = "1">
               		<span class = "error">* <?php echo $checkError; ?></span></td>
               	</tr>
				<tr>
					<td>
					 <input type = "submit" name = "submit" value = "Submit"> 
					</td>
				</tr>
			</table>
		</form>

		<?php
		echo "<h2>Your submitted details are as per below:</h2>";
		echo "Name:$name<br>";
		echo "Email:$email<br>";
		echo "Time of class:$time<br>";
		echo "Class information:$class<br>";
		echo "Gender:$gender<br>";
		echo "Subject:";

		for($i=0;$i< count($subject);$i++){
		echo $subject[$i]." ";

	}
		?>
	</body>
</html>