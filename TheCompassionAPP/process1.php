<?php
  //$servername = "localhost";
  //$username = "hajela_tcapp";
  //$password = "UwindsorRocks";
  //$dbname = "hajela_tcapp";

  $mysqli = new mysqli('localhost', 'hajela_tcapp', 'UwindsorRocks', 'hajela_tcapp') or die(mysqli_error($mysqli));

  if (isset($_POST['submit'])){
   
	$rid = $_POST['rid'];
	$name2 = $_POST['name2'];
	$name = $_POST['name'];
	$trickpass	= $_POST['trickpass'];
    $passhint	= $_POST['passhint'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$med_doc_link = $_POST['med_doc_link'];
	$notes = $_POST['notes'];
	$dateadded = $_POST['dateadded'];
    
    $mysqli->query("INSERT INTO `trickyrec` (`rid`, `email`, `name`, `trickpass`, `passhint`, `city`, `state`, `country`, `med_doc_link`, `notes`, `dateadded`) VALUES (NULL, '$name2', '$name', '$trickpass', '$passhint', '$city', '$state', '$country', '$med_doc_link', '$notes', CURDATE())") or 
      die($mysqli->error);
    
  }?>
<html>
  <head></head> <body>
  	<h2>Success! </h2>
      <h3>Your information is now public, and someone out there is seeking to<b> help you!</b></h3>
  
 	<meta http-equiv="refresh" content="5; URL=https://thecompassionapp.myweb.cs.uwindsor.ca/" />
  </body>
</html>
    
      
     