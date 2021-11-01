<?php 



















//if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    
  //  $fullname = trim($_POST['name']);
//    $email = trim($_POST['email']);
  //  $password = trim($_POST['password']);
//    $confirm_passowrd = trim($_POST["confirm_password"]);
  //  $password_hash = password_hash($password, PASSWORD_BCRYPT);
//    $error = '';
  //  if($query = $db->prepare("SELECT * FROM users WHERE email =$email")) {
        
    //    $query->bind_param('s', $email);
      //  $query->execute();
        //store the result so we can check if the account exists in the database
    //    $query->store_result();
      //  if ($query->num_rows > 0) {
        //    $error .= '<p class="error">The email address is already registered!</p>';
          //  } else {
            //Validate password
        //    if (strlen($password) < 6) {
            //    $error .= '<p class="error">Password must have at least 6 characters</p>';
//            }
            
            //Validate confirm password
  //          if (empty($confirm_password)) {
    //            $error .= '<p class="error">Password confirm password.</p>';
      //      } else {
        //         if (empty($error) && ($password != $confirm_password)) {
          //      $error .= '<p class="error">Password did not match.</p>';
//            }
  //      }
    
    //    if (empty($error)) {
      //      $insertQuery = $db->prepare("INSERT INTO users (Name, password, email) VALUES ($fullname,$email,$password);");
//            $insertQuery->bind_param("sss", $fullname, $email, $password_hash);
  //          $result = $insertQuery->execute();
    //        if ($result) {
      //          $error .= '<p class="success">Your registration was successful!</p>';
        //    } else {
//                $error .= '<p class="error">Something went wrong!</p>';
  //          }
    //    }  
//     }
  //  }
//    $query->close();
  //  $insertQuery->cloase();
    // Close DB connection
//    myspli_close($db);
//}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Sign Up</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous" />
   <link href="slideshow.css" rel="stylesheet" type="text/css" />
	<!-- Favicons -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous">

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	 crossorigin="anonymous">

	</script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	 crossorigin="anonymous">

	</script>
	<link href="style.css" rel="stylesheet" type="text/css" />
	

	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	<!-- <script src="script.js"> -->
	</script>
</head>

<body>
	<div id="top">
	</div>

	<div class="container">

		<div class="row" style="min-height:150px">
			<div class="col-xs-12">
				<br>
        <h6 style="float: left;"><img src="hargest.png" height="100px" width="300px" border="1px"></h6>
        <div class="center">
        </div>
      </div>             
     
      <h1> &nbsp; &nbsp; &nbsp; James Hargest College in Minecraft</h1>     
    </div>   
               
    
    <header>
    <br>
    <br>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="index.php">JHC minceraft</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="https://kamarportal.jameshargest.school.nz/index.php/home">Kamar <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://www.jameshargest.school.nz/">School page</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#down">Contact us</a>
        </li>
          
          <li class="nav-item">
          <a class="nav-link" href="database.php">Database</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Minecraft Hargest.zip" download>
              <img src="Minecraft Hargest.zip" alt="">Download the map</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="register.php">Registor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>     
    </div>
  </nav>
</header> 
<body>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Register</h2>
                <p>Please fill out this form to create an account.</p>
                
              
                <form action="register_code.php" method="post">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                     <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                   
                   
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </form>
            </div>        
        </div>    
    </div>
    
    
    
    
    
    
    <div class="content">
    <?php
        
        require_once 'connect.php';
        //SQL statement to fetch everything (*) From the B table
            
        $sql = "SELECT * FROM users";
        
        //ESTABLISH CONNECTION WITH$ conn & QUERY THE $sql STATEMENT
        
        $result = $conn->query($sql);
        
        
     ?>
 
        
        
        
        
        
        
  <div id="down">
           <div class="footer">
             <div class="container-fluid">
              <div class="footer-main">
                <div class="row">
                  <div class="col-md-3 ftr-grid">
                    <h3>About</h3>
                    <p>Our goal is to let people visit our school without actually being in here</p>
                  </div>

                  <div class="col-md-3 ftr-grid">
                    <h3>Information</h3>
                    <ul>
                      <li><a href="#top">Gallery</a></li>
                    </ul>
                  </div>

                  <div class="col-md-3 ftr-grid">
                    <h3>Contact Us</h3>

                    <ul>
                    <li><a href="mailto:18338@jhc.school.nz">
                    Forrest Email</a></li>
                    <li><a href="mailto:18381@jhc.school.nz">
                    Michael Email</a></li>
                    <li><a href="mailto:17192@jhc.school.nz">
                    Tony Email</a></li>
                    </ul>
                  </div>
                </div>
                <div class="clearfix"> </div>
                </div>
                <div class="copy-right">
                  <p>© 2021 Minecraft James Hargest Collage . All rights reserved | Design and created by Michael Clinckett & Forrest Lung. Documentor | Tony Huang</p>
                
                </div>
              </div>
            </div>
          </div>


  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }

  </script>
</body>
</html>        