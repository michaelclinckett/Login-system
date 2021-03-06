



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Customize</title>

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
	 <script src="script.js"> 
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
    <a class="navbar-brand" href="welcome.php">JHC minceraft</a>

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
            <a class="nav-link" href="custom.php">Customize</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="info.php">Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>     
    </div>
  </nav>
</header> 
<body>
<br>
  
    
    
    
    
    <br>
    
    
        <button class="button" onclick="setbg('red')">Change Colour</button>
        <script>
        function setbg(col) {
        document.body.style.backgroundColor = col;
}
        </script>
 
        
        
        
        
  
        <br><br><br><br><br><br><br><br>
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
                  <p>? 2021 Minecraft James Hargest Collage . All rights reserved | Design and created by Michael Clinckett & Forrest Lung. Documentor | Tony Huang</p>
                
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