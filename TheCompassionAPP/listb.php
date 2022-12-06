<!doctype html>
<html>
	<head>
		<title>The Compassion App.</title>
		<!-- Bootstrap CSS -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  		
      <!--App Icon/Logo-->
      <link rel="icon" href="test/2.png">
      
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
        
      		p.p1 {
 				margin: 35px;
        		font-size: 21px;
        		text-align: center;
        		font-family: "Lucida Fax";
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
            <b>Lists</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/listbt.php"><b>List of Benefactors</b></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/listrt.php">List a Receivers</a></li>
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
      <!-------------------------------------------------------------------------------------------------------------------------------->
  <!-- Table -->
      
      
      <?php
      
      $mysqli = new mysqli('localhost', 'hajela_tcapp', 'UwindsorRocks', 'hajela_tcapp') or die(mysqli_error($mysqli));
      
      $result = $mysqli->query("Select * from trickybenf") or die($mysqli->error);
      $sqlnum=0;
      //pre_r($result);
      //pre_r($result->fetch_assoc());
      ?>
      <script src="myscripts.js"></script> <!----------------------------------------------JS CALLING------------------------------------------------->
      
      <div class="container">
      <table class="table table-primary table-striped table-hover">  	
		<thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Medical Doctor?</th>
      <th scope="col">Location</th>
      <th scope="col">Date Added</th>
    </tr>
  </thead>
  <tbody>
    <script>
	
      var element = document.getElementById('name0');
if(element){
  element.addEventListener("click", myFunction);
}

	function myFunction() {
	  console.log("clicked name0");
	}

    </script>
    <?php
    $num=0;
    	while ($row = $result->fetch_assoc()): ?>
    <tr>
      <th scope="row">
        <button type="button" class="btn" id="name<?php echo $num;?>" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $num;?>">
 		 	<?php echo $row['name'];
          		  $n = $row['name'];
          	?>
	  	</button>
      </th>
      <td>
        <button type="button" class="btn " id="ismd<?php echo $num;?>" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $num;?>">
 		 	<?php echo $row['ismd']; ?>
	  	</button>
      </td>
      <td>
        <button type="button" class="btn " id="county<?php echo $num;?>" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $num;?>">
 		 	<?php echo $row['county']; ?>
	  	</button>
      </td>
      <td>
        <button type="button" class="btn " id="date<?php echo $num;?>" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $num;?>"> 
 		 	<?php echo $num; 
          	
          	//$sqlnum=$num;
          	echo $row['date_added']; 
          
    echo $num4;
          	?>
	  	</button>
      </td>
    </tr>
    <?php //echo $num;
    $num++;
    $num4= $num *4;
    
    endwhile; ?>
        
    <?php
    $sqlnump1=$sqlnum+1;
/*    $sqlnump2=$sqlnum1+1;
    $sqlnump3=$sqlnum2+1;
    $sqlnump4=$sqlnum3+1;
    $sqlnump5=$sqlnum4+1;
    $sqlnump6=$sqlnum5+1;
    $sqlnump7=$sqlnum6+1; */
    
    $resultmodal = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump1;") 
    or die($mysqli->error);
/*    $resultmodal2 = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump2;") 
    or die($mysqli->error);
    $resultmodal3 = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump3;") 
    or die($mysqli->error);
    $resultmodal4 = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump4;") 
    or die($mysqli->error);
    $resultmodal5 = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump5;") 
    or die($mysqli->error);
    $resultmodal6 = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump6;") 
    or die($mysqli->error);
    $resultmodal7 = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump7;") 
    or die($mysqli->error); */
    
    $rowmodal = $resultmodal->fetch_assoc();
    
    	//while ($row = $result->fetch_assoc()): ?>
    <!-- Modal -->
<div class="modal fade" id="Modal<?php echo $sqlnum; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php echo $rowmodal['name']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>      
      <?php //echo $sqlnum;
    //$sqlnum++;
   // endwhile; ?>
    <!--<tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>-->
  </tbody>
      </table>
      </div>
  
    <!-- Button trigger modal -->
  <!--<button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->


      
      <?php
      function  pre_r($array){
       echo '<pre>';
       print_r($array);
       echo'</pre>';
      }
      ?>
     
      <p id="demo"> hi</p>
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