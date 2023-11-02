<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts2/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style2.css">

    <title>Contact Form #10</title>
  </head>
  <body>
  <?php
        session_start(); 
        $_SESSION['pw']=$_SESSION['pass_word'];
    ?>  
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Your post</h3>
            <form class="mb-5" action="publish.php" method="post" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="topic" class="col-form-label">Username</label>
                  <input type="text" class="form-control" name="uname" id="uname" value="<?php echo $_SESSION['user_name'] ?>" placeholder="Your Topic" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="topic" class="col-form-label">Topic</label>
                  <input type="text" class="form-control" name="topic" id="topic" placeholder="Your Topic" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="sub" class="col-form-label">Subject</label>
                  <input type="text" class="form-control" name="sub" id="sub"  placeholder="Subject" required>
                </div>
              </div>

              

              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Message</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message" required></textarea>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" id="submit" name="submit" value="Post" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                </div>
              </div>
              
            </form>

            

          </div>
        </div>
      </div>
    </div>

  </div>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>