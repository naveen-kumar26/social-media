<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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
<body>

<?php
session_start();

$usr = $_SESSION['user_name'];

$conn = mysqli_connect("localhost", "root", "", "smallproject_db");
$sql= "SELECT period,topic,subject,message FROM user_post WHERE user_name='$usr'";
$result = mysqli_query($conn,$sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
?>



<?php foreach($data as $row): ?>
<center>
			<table id="myTable" cellspacing="5px" cellpadding="10px" >
            <tr >
                <td><?= htmlspecialchars($usr) ?></td>
                <td><?= htmlspecialchars($row['topic']) ?></td>
                <td><?= htmlspecialchars($row['period']) ?></td>
            </tr>
            <tr >
                <td colspan="3"><?= htmlspecialchars($row['subject']) ?></td>
            </tr>
            <tr >
                <td colspan="3"><?= htmlspecialchars($row['message']) ?></td>
            </tr>
      </table>
      <br>
</center>
  <?php endforeach ?>
    
</body>
</html>