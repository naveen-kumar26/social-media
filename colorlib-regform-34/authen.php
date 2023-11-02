<!DOCTYPE html>
<html>

<head>
	    <title>Insert Page page</title>

        <link rel="stylesheet" href="css/showy.css">

    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">
        <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>



<style>
	.body{
		background-color: blue;
	}
</style>

<body>

   

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


        


			
		

        $username = $_POST['full_name_1'];  
        $password = $_POST['password_1'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from sign_up where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script>alert("Login Successful");</script>';
            $strSQL = "SELECT * FROM sign_up WHERE Username = '$username' AND Password = '$password'";
            $result = mysqli_query($conn,$strSQL);
            $row = mysqli_fetch_assoc($result);
            
            $_SESSION['user_name'] = $username; 
            $_SESSION['pass_word'] = $password;
            $_SESSION['name']= $row['Name'];

            echo '

            <div class="searchbox">
            <form action="searchpage.php" method="post">
            <label>Search Box</label>
            <input class="w3-input w3-animate-input" type="text" name="search" placeholder="Search name or company... " required="" style="width:30%"></p>
            <input name="find" id="find" type="submit" value="search">
            </form>
    
        </div>

            <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
        <div class="col-xl-6 col-md-12">
                                                        <div class="card user-card-full">
                                                            <div class="row m-l-0 m-r-0">
                                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                    <div class="card-block text-center text-white">
                                                                        <div class="m-b-25">
                                                                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                        </div>
                                                                        <h6 class="f-w-600">'.$row['Name'].'</h6>
                                                                        <p>'.$row['Username'].'</p>
                                                                        <a href="postpage.php"><label>Add Post</label> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="card-block">
                                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <p class="m-b-10 f-w-600">Email</p>
                                                                                <h6 class="text-muted f-w-400">'.$row['Email'].'</h6>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <p class="m-b-10 f-w-600">Phone</p>
                                                                                <h6 class="text-muted f-w-400">'.$row['mobileno'].'</h6>
                                                                            </div>
                                                                        </div>
                                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <p class="m-b-10 f-w-600">Recent</p>
                                                                                <h6 class="text-muted f-w-400">Sam Disuja</h6>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                            <p class="m-b-10 f-w-600">Post</p>
                                                                            <h6 class="text-muted f-w-400"><a href="viewpost.php">Posts <i class="bi bi-bookmark-star"></i></a></h6>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     </div>
                                                        </div>
                                                    </div>
            ';
           
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
        
        

		// Close connection
		mysqli_close($conn);
		?>


	
</body>

</html>
