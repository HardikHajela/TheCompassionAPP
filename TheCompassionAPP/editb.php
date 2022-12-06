<!doctype html>

<html>
	<head>
		<title>The Compassion App.</title>
            
	  <!-- Bootstrap CSS -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  		
       <!--App Icon/Logo-->
      <link rel="icon" href="test/2.png">
       	
      <!--Manifest-->
      <link rel="manifest" href="manifest.webmanifest">
      
       <!--script for Service Workers-->
      <script src= "index.js" type="module"> </script>
      
      	<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<meta http-equiv="X-UA-Compatible" content="ie=edge">
      
        <!--CSS-->
      <style>
			#pwb-carousel-bg {
				background-color: grey;}
          	.carousel-inner {
				background-color: rgb(11,102,35) !important;}
		
			#pwb-carousel-bgg {
				background-color: grey;}
          	.carousel-innerr {
				background-color: rgb(100,18,38) !important;}
        
        	#pwb-carousel-bggg {
				background-color: grey;}
          	.carousel-innerrr {
				background-color: rgb(10,20,50) !important;}
        
        	.image {
    position: relative;
    width: 400px;
}

.image__img {
    display: block;
    width: 100%;
}

.image__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.2);
    color: #ffffff;
    font-family: 'Quicksand', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s;
}

.image__overlay--blur {
    backdrop-filter: blur(5px);
}

.image__overlay--primary {
    background: #009578;
}

.image__overlay > * {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.image__overlay:hover {
    opacity: 1;
}

.image__overlay:hover > * {
    transform: translateY(0);
}

.image__title {
    font-size: 2em;
    font-weight: bold;
}

.image__description {
    font-size: 1.25em;
    margin-top: 0.25em;
}
        
      		p.p1 {
 				margin: 35px;
        		font-size: 21px;
        		text-align: center;
        		font-family: "Lucida Fax";
			}
        	p.p2 {
 				margin: 35px;
        		font-size: 24px;
        		font-family: "Georgia";
			}
        	p.h1 {
 				font-size: 65px;
        		text-align: center;
        		font-family: "Georgia";
			}
        	p.h2{
        		font-family: "Century Schoolbook";
        	}
        	h3.h1 {
        		font-family: "Century Schoolbook";
        	}
        	
        	div.bggrey {
        		background-color: rgb(225,225,225);
        	}
        
        	.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #000000;
}

.button2:hover {
  background-color: #000000;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button3:hover {
  background-color: #008CBA;
  color: white;
}
.button4 {
  background-color: white; 
  color: black; 
  border: 2px solid #FFAF00;
}

.button4:hover {
  background-color: #FFAF00;
  color: white;
}
        
		</style>
        </head>
  
  	<body>
      
       <!--NavBar-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<!--<div class="container-fluid">-->
    <div class="container">
    <a class="navbar-brand" href="https://thecompassionapp.myweb.cs.uwindsor.ca/"><img src="test/1.png" alt="logo" height= "80"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://thecompassionapp.myweb.cs.uwindsor.ca/">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Register with us!
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/regb.php">Become a Benefactor</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/regr.php">Become a Receiver</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lists
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/listb.php">List of Benefactors</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/listr.php">List a Receivers</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="https://thecompassionapp.myweb.cs.uwindsor.ca/AboutUs.html">About us</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
        
      </ul>
      <!--<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>
      <br>
      <!-------------------------------------------------------------------------------------------------------------------------------->
      
       <?php
      
      $mysqli = new mysqli('localhost', 'hajela_tcapp', 'UwindsorRocks', 'hajela_tcapp') or die(mysqli_error($mysqli));
      
      $result = $mysqli->query("Select * from trickybenf") or die($mysqli->error);
      $sqlnum=0;
      //pre_r($result);
      //pre_r($result->fetch_assoc());
      ?>
      
    <div class = "container">
      <form action="" method=post oninput='up2.setCustomValidity(up2.value != trickpass.value ? "Passwords do not match." : "")'>
        
        <div class="col-md-4">
    		<label for="username validationDefault01" class="form-label">E-mail address</label>
    		<input type="email" class="form-control" id="validationDefault01" name="name2" placeholder="janedoe@email.com" required>
    		<div id="emailHelp" class="form-text">Kindly enter the Email used while creating the account here!</div>
  		</div>
  			<br>     
        
        <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">Password Hint</label>
    <input type="text" name="passhint" class="form-control" maxlength="49" placeholder="" disabled>
    <div id="emailHelp" class="form-text">Your password hint will show up here in case you eenter the wrong password.</div>
  </div>
        <br>
        
        <div class="col-md-4">
  			<label for="password1 validationDefault02" class="form-label">Password</label>
  			<input id="password1 validationDefault02 exampleInputPassword1" name="trickpass" minlength="4" maxlength="10" type="password" required class="form-control" placeholder="Password" required>
  		</div>
     	<div id="passwordHelpBlock" class="form-text">
  			Please enter a 4 digit or more M-PIN here. 
		</div>
 		<br>
        
        <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        <a href="legal.html">Agree to terms and conditions</a>
      </label>
    </div>
  </div>
        <br>
  
  <!--<div class="col-12">
    <button class="btn btn-primary" type="submit" id="" name="submit">Submit form</button>
  </div>-->
        
  <div class="col-12">
    <a href= "process2.php?name2=<?php echo $row['name2']; ?>" class="btn btn-primary" type="submit" id="" name="submit">Submit Form</a>
  </div>   
        <div id="emailHelp" class="form-text">This particular entry will be deleted from our Database, and you can then submit a new entry!</div>
</form>
    </div>
      <!-------------------------------------------------------------------------------------------------------------------------------->
      
      <!--footer-->
    <div class="container-fluid pt-4"><!--1-->
        <div class="bggrey"><!--2-->
        <div class="row"><!--3-->
          <!--About Us-->
           <div class="col-lg"><!--4-->
             <h3 class="h1" class="mb-4">&ensp;About</h3>
             &emsp; <a href="AboutUs.html">About Us</a><br>
           	 &emsp; <a href="mailto:thecompassionapp@example.com?subject=Join the CompassionApp.com team! &body= Dear Team, I will be delighted to become a part of the CompassionApp Team. I am hereby attaching my Resume/LinkedIn.">Join our Team</a><br>
             <br>
           </div><!--4-->
          <!--Support-->
           <div class="col-lg"><!--5-->
             <h3 class="h1">&ensp;Support</h3>
             &emsp;<a href="mailto:thecompassionapp@example.com?subject=Feedbacck">Feedback</a><br>
             &emsp;<a href="mailto:thecompassionapp@example.com">Email</a><br>
             <br>
           </div><!--5-->
          <!--Social-->
           <div class="col-lg"><!--6-->
             <h3 class="h1">&ensp;Social</h3>
             &emsp;<a href="https://twitter.com/?lang=en">Twitter</a><br>
             &emsp;<a href="https://www.instagram.com/">Instagram</a><br>
             <br>
           </div><!--6-->
          
          </div><!--3-->
          <div class="row"><!--7-->
            <div class="col-lg"><!--8-->
            <p class="h2">&ensp;Get our App:</p>
            </div><!--8-->
            <div class="col-lg"><!--9-->
              <button class="button button2" onclick=" window.open('https://www.lifewire.com/thmb/eOg7lnl97PGk496fWLPFCh0vsb4=/650x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/MakeSafariBookmark-9eff4fc5264546418637785165ae8541.jpg','_blank')">Apple</button>
              &emsp;<img src="test/apple.png" alt="Logo" width="54" height="54">
            </div><!--9-->
            <div class="col-lg"><!--10-->
              <button class="button button1" onclick=" window.open('https://support.google.com/chrome/answer/9658361?hl=en&co=GENIE.Platform%3DAndroid&oco=1','_blank')">Android</button>
              &emsp;<img src="test/android.png" alt="Logo" width="54" height="54">
            </div><!--10-->
             <div class="col-lg"><!--11-->
              <button class="button button3" onclick=" window.open('https://support.google.com/chrome/answer/9658361?hl=en&co=GENIE.Platform%3DDesktop','_blank')">Windows</button>
              &emsp;<img src="test/windows.png" alt="Logo" width="53" height="53">
            </div><!--11-->
             <div class="col-lg"><!--12-->
              <button class="button button4" onclick=" window.open('https://support.google.com/chrome/answer/9658361?hl=en&co=GENIE.Platform%3DDesktop','_blank')">Linux</button>
              &emsp;<img src="test/linux.png" alt="Logo" width="53" height="53">
            </div><!--12-->
          </div><!--7-->
          <br>
          <p align="right"><small>The content is owned and created by H. Hajela(University of Windsor).&ensp;</small></p>
      </div><!--2-->        
      </div><!--1-->
      
  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>