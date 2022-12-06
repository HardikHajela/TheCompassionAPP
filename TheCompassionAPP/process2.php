<?php
  //$servername = "localhost";
  //$username = "hajela_tcapp";
  //$password = "UwindsorRocks";
  //$dbname = "hajela_tcapp";

  $mysqli = new mysqli('localhost', 'hajela_tcapp', 'UwindsorRocks', 'hajela_tcapp') or die(mysqli_error($mysqli));

  if (isset($_POST['submit'])){
   	
	$bid = $_POST['bid'];
	$name2 = $_POST['name2'];
	$name = $_POST['name'];
	$ismd= $_POST['ismd'];
	$med_reg_no= $_POST['med_reg_no'];
	$trickpass	= $_POST['trickpass'];
	$passhint= $_POST['passhint'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$med_doc_link = $_POST['med_doc_link'];
	$notes = $_POST['notes'];
	$dateadded = $_POST['dateadded'];
    
    $mysqli->query("INSERT INTO `trickybenf` (`bid`, `email`, `name`, `ismd`, `med_reg_no`, `trickypass`, `passhint`, `city`, `state`, `county`, `med_doc_link`, `notes`, `date_added`) VALUES 
      										(NULL, '$name2', '$name', '$ismd', '$med_reg_no', '$trickpass', '$passhint', '$city', '$state', '$country', '$med_doc_link', '$notes', CURDATE()) ") or 
      
     
      die($mysqli->error);
      }
	
?>

<html>
  <head></head> <body>
  	<h2>Success! </h2>
      <h3>Thank you. Your information is now public, and someone out there is seeking <b> your Help!</b></h3>
  
 	<meta http-equiv="refresh" content="5; URL=https://thecompassionapp.myweb.cs.uwindsor.ca/" />
  </body>
</html>
    
      
     