<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">
        <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <style>
			#myTable{
                width: 30%;

            }
            table{
                background-color: #fd2993;
            }
            td{
                background-color: #e6ff75;
                border: 1px solid #e6ff75;
                border-radius: 3px;
            }
		</style>
    </head>
    <body >
    
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
		
		session_start(); 
		// Taking all 5 values from the form data(input)
		$u_name = $_POST['uname'];
		$head = $_POST['topic'];
		$summary = $_POST['sub'];
		$msg = $_POST['message'];
		$pw_word = $_SESSION['pw'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user_post(topic,subject,message,user_name) VALUES ('$head','$summary','$msg','$u_name')";
		
		if(mysqli_query($conn, $sql))
        {
			$strSQL = "SELECT * FROM user_post WHERE topic='$head' AND subject='$summary' AND message='$msg'";
            $result = mysqli_query($conn,$strSQL);
            $row = mysqli_fetch_assoc($result);

			

			echo '
			<center>
			<table id="myTable" cellspacing="5px" cellpadding="10px" >
            <tr >
                <td>'.$u_name.'</td>
                <td>'.$head.'</td>
                <td>'.$row['period'].'</td>
            </tr>
            <tr >
                <td colspan="3">'.$summary.'</td>
            </tr>
            <tr >
                <td colspan="3">'.$msg.'</td>
            </tr>
        	</table>
			</center>

			';

			
		} 
        else{
			echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
		}
		
		// Close connection
        mysqli_close($conn);
    ?>
        
   
    </body>
</html>