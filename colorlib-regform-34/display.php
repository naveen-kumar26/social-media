<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<script>
function myFunction() {
  alert("Account created");
}
</script>

<style>
	.body{
		background-color: blue;
	}
</style>

<body onload="myFunction()" >
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "smallproject_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['full_name'];
		$user_name = $_REQUEST['user_name'];
		$email = $_REQUEST['your_email'];
        $password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO sign_up(Name,Username,Email,Password) VALUES ('$name','$user_name','$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>Welcome !</h1>.<p>$name</p>"; 

			echo "<p>Your emailid is $email</p>";
		} 
        else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
