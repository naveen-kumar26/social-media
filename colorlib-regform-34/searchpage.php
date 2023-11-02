<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Option 1: Include in HTML -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<style>
			.tab{
				margin-top:10px;
			}
			#SrchRes{
				border-collapse : collapse;
				border: 1px solid black;
			}
			tr{
				border: 1px solid black;
			}
			th{
				font-size:30px;
				background:  #3D86F6;
				color:white;
				text-align:center;
			}
			td{
				height: 45px;
				text-align:center;
			}

	</style>
</head>
<body>
	
<?php
$servername='localhost';
$username="root";
$password="";



try
{
	$con=new PDO("mysql:host=$servername;dbname=smallproject_db",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo 'connected';
}
catch(PDOException $e)
{
	echo '<br>'.$e->getMessage();
}

session_start();

$searchErr = '';
$employee_details='';
if(isset($_POST['find']))
{
	if(!empty($_POST['search']))
	{
		$search = $_POST['search'];
		$stmt = $con->prepare("select * from sign_up where Username like '%$search%'");
		$stmt->execute();
		$employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($employee_details);

		echo'<div class="tab" ><form action="frnd_notify.php">
		<table id="SrchRes" align="center" width="75%" border="1px">
		<tr>
		<th>Username</th>
		<th>Name</th>
		<th>Email</th>
		<th>Add Friend</th>
		</tr>';
        foreach($employee_details as $row):
			
			echo "<tr><td>";			
			echo $row['Username'];
			echo "</td><td>";
			echo $row['Name'];
			echo "</td><td>";
			echo $row['Email'];
			echo "</td><td>";
			$_SESSION['uname']=$row['Username'];
			$_SESSION['Name']=$row['Name'];
			$_SESSION['Email']=$row['Email'];
			echo '<button type="submit" ><i class="bi bi-person-plus-fill"></i> Add Friend</button>';

			echo "</td></tr>";
			
				endforeach ;
			
		echo'
		</form>
		</table></div>';
            
		
       
        
    }
	else
	{
		$searchErr = "Please enter the information";
        echo $searchErr;
	}
   
}
?>

</body>
</html>
