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
       <!--script--><script src= "index.js" type="module"> </script>
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
            <b>Register with us!</b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/regb.php"><b>Become a Benefactor</b></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/regr.php">Become a Receiver</a></li>
          </ul>
        </li>
        
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lists
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://thecompassionapp.myweb.cs.uwindsor.ca/listbt.php">List of Benefactors</a></li>
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
</nav><br><br>
      <!-------------------------------------------------------------------------------------------------------------------------------->
  <div class = "container">
      <form action="process2.php" method=post oninput='up2.setCustomValidity(up2.value != trickpass.value ? "Passwords do not match." : "")'>
        
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Name of the Organization</label>
    <input type="text" class="form-control" name = "name" id="validationDefault01" placeholder="The Name of the Organisation" required>
    <div id="emailHelp" class="form-text">Your Name here! This will be Displayed Publicly.</div>
  </div>
  <br>

  <!--<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
        <br>-->
        
  <div class="col-md-4">
    <label for="" class="form-label">City (optional)</label>
    <input type="text" name = "city" class="form-control" id="" >
  </div>
        <br>
        <div class="col-md-4">
    <label for="validationDefault03" class="form-label">State</label>
    <input type="text" name = "state" class="form-control" id="validationDefault03" required>
  </div>
        <br>
        <div class="col-md-4">
    <label for="validationDefault04" class="form-label">Country</label>
    <select class="form-select" name= "country" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
     <option disabled value="">	A	</option>
<option>	Afghanistan	</option>
<option>	Albania	</option>
<option>	Algeria	</option>
<option>	Andorra	</option>
<option>	Angola	</option>
<option>	Antigua and Barbuda	</option>
<option>	Argentina	</option>
<option>	Armenia	</option>
<option>	Australia	</option>
<option>	Austria	</option>
<option>	Azerbaijan	</option>
<option disabled value="">	B	</option>
<option>	Bahamas, The	</option>
<option>	Bahrain	</option>
<option>	Bangladesh	</option>
<option>	Barbados	</option>
<option>	Belarus	</option>
<option>	Belgium	</option>
<option>	Belize	</option>
<option>	Benin (Dahomey)	</option>
<option>	Bolivia	</option>
<option>	Bosnia and Herzegovina	</option>
<option>	Botswana	</option>
<option>	Brazil	</option>
<option>	Brunei	</option>
<option>	Brunswick and Lüneburg	</option>
<option>	Bulgaria	</option>
<option>	Burkina Faso (Upper Volta)	</option>
<option>	Burma	</option>
<option>	Burundi	</option>
<option disabled value="">	C	</option>
<option>	Cabo Verde	</option>
<option>	Cambodia	</option>
<option>	Cameroon	</option>
<option>	Canada	</option>
<option>	Cayman Islands, The	</option>
<option>	Central African Republic	</option>
<option>	Chad	</option>
<option>	Chile	</option>
<option>	China	</option>
<option>	Colombia	</option>
<option>	Comoros	</option>
<option>	Congo Free State, The	</option>
<option>	Costa Rica	</option>
<option>	Cote d’Ivoire (Ivory Coast)	</option>
<option>	Croatia	</option>
<option>	Cuba	</option>
<option>	Cyprus	</option>
<option>	Czechia	</option>
<option>	Czechoslovakia	</option>
<option disabled value="">	D	</option>
<option>	Democratic Republic of the Congo	</option>
<option>	Denmark	</option>
<option>	Djibouti	</option>
<option>	Dominica	</option>
<option>	Dominican Republic	</option>
<option>	Duchy of Parma, The	</option>
<option disabled value="">	E	</option>
<option>	Ecuador	</option>
<option>	Egypt	</option>
<option>	El Salvador	</option>
<option>	Equatorial Guinea	</option>
<option>	Eritrea	</option>
<option>	Estonia	</option>
<option>	Eswatini	</option>
<option>	Ethiopia	</option>
<option disabled value="">	F	</option>
<option>	Fiji	</option>
<option>	Finland	</option>
<option>	France	</option>
<option disabled value="">	G	</option>
<option>	Gabon	</option>
<option>	Gambia, The	</option>
<option>	Georgia	</option>
<option>	Germany	</option>
<option>	Ghana	</option>
<option>	Grand Duchy of Tuscany, The	</option>
<option>	Greece	</option>
<option>	Grenada	</option>
<option>	Guatemala	</option>
<option>	Guinea	</option>
<option>	Guinea-Bissau	</option>
<option>	Guyana	</option>
<option disabled value="">	H	</option>
<option>	Haiti	</option>
<option>	Hanseatic Republics	</option>
<option>	Hesse	</option>
<option>	Holy See	</option>
<option>	Honduras	</option>
<option>	Hungary	</option>
<option disabled value="">	I	</option>
<option>	Iceland	</option>
<option>	India	</option>
<option>	Indonesia	</option>
<option>	Iran	</option>
<option>	Iraq	</option>
<option>	Ireland	</option>
<option>	Israel	</option>
<option>	Italy	</option>
<option disabled value="">	J	</option>
<option>	Jamaica	</option>
<option>	Japan	</option>
<option>	Jordan	</option>
<option disabled value="">	K	</option>
<option>	Kazakhstan	</option>
<option>	Kenya	</option>
<option>	Kingdom of Serbia	</option>
<option>	Kiribati	</option>
<option>	Korea	</option>
<option>	Kosovo	</option>
<option>	Kuwait	</option>
<option>	Kyrgyzstan	</option>
<option disabled value="">	L	</option>
<option>	Laos	</option>
<option>	Latvia	</option>
<option>	Lebanon	</option>
<option>	Lesotho	</option>
<option>	Lew Chew	</option>
<option>	Liberia	</option>
<option>	Libya	</option>
<option>	Liechtenstein	</option>
<option>	Lithuania	</option>
<option>	Luxembourg	</option>
<option disabled value="">	M	</option>
<option>	Madagascar	</option>
<option>	Malawi	</option>
<option>	Malaysia	</option>
<option>	Maldives	</option>
<option>	Mali	</option>
<option>	Malta	</option>
<option>	Marshall Islands	</option>
<option>	Mauritania	</option>
<option>	Mauritius	</option>
<option>	Mecklenburg-Schwerin	</option>
<option>	Mecklenburg-Strelitz	</option>
<option>	Mexico	</option>
<option>	Micronesia	</option>
<option>	Moldova	</option>
<option>	Monaco	</option>
<option>	Mongolia	</option>
<option>	Montenegro	</option>
<option>	Morocco	</option>
<option>	Mozambique	</option>
<option disabled value="">	N	</option>
<option>	Namibia	</option>
<option>	Nauru	</option>
<option>	Nepal	</option>
<option>	Netherlands, The	</option>
<option>	New Zealand	</option>
<option>	Nicaragua	</option>
<option>	Niger	</option>
<option>	Nigeria	</option>
<option>	North Macedonia	</option>
<option>	Norway	</option>
<option disabled value="">	O	</option>
<option>	Oman	</option>
<option>	Orange Free State	</option>
<option disabled value="">	P	</option>
<option>	Pakistan	</option>
<option>	Palau	</option>
<option>	Panama	</option>
<option>	Papal States	</option>
<option>	Papua New Guinea	</option>
<option>	Paraguay	</option>
<option>	Peru	</option>
<option>	Philippines	</option>
<option>	Piedmont-Sardinia	</option>
<option>	Poland	</option>
<option>	Portugal	</option>
<option disabled value="">	Q	</option>
<option>	Qatar	</option>
<option disabled value="">	R	</option>
<option>	Republic of Genoa	</option>
<option>	Republic of Korea (South Korea)	</option>
<option>	Republic of the Congo	</option>
<option>	Romania	</option>
<option>	Russia	</option>
<option>	Rwanda	</option>
<option disabled value="">	S	</option>
<option>	Saint Kitts and Nevis	</option>
<option>	Saint Lucia	</option>
<option>	Saint Vincent and the Grenadines	</option>
<option>	Samoa	</option>
<option>	San Marino	</option>
<option>	Sao Tome and Principe	</option>
<option>	Saudi Arabia	</option>
<option>	Senegal	</option>
<option>	Serbia	</option>
<option>	Seychelles	</option>
<option>	Sierra Leone	</option>
<option>	Singapore	</option>
<option>	Slovakia	</option>
<option>	Slovenia	</option>
<option>	Solomon Islands, The	</option>
<option>	Somalia	</option>
<option>	South Africa	</option>
<option>	South Sudan	</option>
<option>	Spain	</option>
<option>	Sri Lanka	</option>
<option>	Sudan	</option>
<option>	Suriname	</option>
<option>	Sweden	</option>
<option>	Switzerland	</option>
<option>	Syria	</option>
<option disabled value="">	T	</option>
<option>	Tajikistan	</option>
<option>	Tanzania	</option>
<option>	Thailand	</option>
<option>	Timor-Leste	</option>
<option>	Togo	</option>
<option>	Tonga	</option>
<option>	Trinidad and Tobago	</option>
<option>	Tunisia	</option>
<option>	Turkey	</option>
<option>	Turkmenistan	</option>
<option>	Tuvalu	</option>
<option disabled value="">	U	</option>
<option>	Uganda	</option>
<option>	Ukraine	</option>
<option>	United Arab Emirates, The	</option>
<option>	United Kingdom, The	</option>
<option>	Uruguay	</option>
<option>	Uzbekistan	</option>
<option disabled value="">	V	</option>
<option>	Vanuatu	</option>
<option>	Venezuela	</option>
<option>	Vietnam	</option>
<option disabled value="">	Y	</option>
<option>	Yemen	</option>
<option disabled value="">	Z	</option>
<option>	Zambia	</option>
<option>	Zimbabwe	</option>

    </select>
  </div>
  <br>
        

  
    <div class="col-md-4">
    <label for="username validationDefault01" class="form-label">E-mail address</label>
    <input type="email" class="form-control" id="validationDefault01" name="name2" placeholder="janedoe@email.com" required>
    <div id="emailHelp" class="form-text">Your Email will be the primary source of contacting you!</div>
  </div>
  <br>     
  
  <div class="col-md-4">
  <label for="password1 validationDefault02" class="form-label">Password</label>
  <input id="password1 validationDefault02 exampleInputPassword1" name="trickpass" minlength="4" maxlength="10" type="password" required class="form-control" placeholder="Password" required>
  </div>
     <div id="passwordHelpBlock" class="form-text">
  		Please enter a 4 digit or more M-PIN here. This will be required when you'd want to update or delete this entry in future!
	</div>
  <br>
       
  <div class="col-md-4">      
  <label for="password2 validationDefault02" class="form-label">Confirm password</label>
  <input id="password2 validationDefault02 exampleInputPassword1" type="password" name="up2" class="form-control" placeholder="Password" required>
  </div>
     <div id="passwordHelpBlock" class="form-text">
  		This should match the Password entered above!
	</div>
  <br>
        <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">Password Hint(optional)</label>
    <input type="text" name="passhint" class="form-control" maxlength="49" placeholder="Mom's Maiden name">
    <div id="emailHelp" class="form-text">This will be required in case you forget your password.!</div>
  </div>
        <br>

  <!--<div class="col-md-4">
    <label for="validationDefault02" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationDefault02 exampleInputPassword1" placeholder="Password" >
    <div id="passwordHelpBlock" class="form-text">
  		Please enter a 4 digit or more M-PIN here. This will be required when you'd update or delete this entry in future!
	</div>
  </div>
        <br>-->
        <!-- 
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
-->
        <div class="col-md-4">
        <label for="validationDefault04" class="form-label">Does your Organisations have licencied Medical Doctor?</label>
    <select class="form-select" name = "ismd" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
<option>	Yes	</option>
<option>	No	</option>
    </select>
  </div>
  <br>
        
        <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">NGO/Registration Number(optional)</label>
    <input type="text" class="form-control" name = "med_reg_no" id="username">
    <div id="emailHelp" class="form-text">***This information will be public!*** This makes you look more legitimate and more people are likely reach out to you for help. Please check twice before you submit, since a wrong entry will be considered as fraud.</div>
  </div>
        <br>

  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Documents(optional)</label>
    <input type="text" name = "med_doc_link" class="form-control" value="none">
    <div id="emailHelp" class="form-text">***This information will be public!*** In case you'd like to share any kind of documents, kindly upload the documents on a cloud drive and paste the link here.</div>
  </div>
        <br>
        
   <div class="col-md-6">
  <label for="exampleFormControlTextarea1" class="form-label">Additional Notes(optional)</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" name = "notes" rows="3" maxlength="5000">none</textarea>
  <div id="emailHelp" class="form-text">Anything you'd like to add, here's your chance! Please note that the note is limited to 5000 characters.</div>
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
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" id="" name="submit">Submit form</button>
  </div>
</form>
    </div>

<!--<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="/test/2.png" class="rounded me-2" alt="..." height = "30">
      <strong class="me-auto">TheCompassionAPP: Success!</strong>
      <small>Just now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Your information is now public, and someone out there is seeking to help you!
    </div>
  </div>
</div>
      
      <script> var toastTrigger = document.getElementById('liveToastBtn')
var toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', function () {
    var toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
}</script>-->
      
      
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