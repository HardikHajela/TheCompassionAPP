<! DOCTYPE html>

<html>
  <head>
    <title>SQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    
    <?php require_once 'process.php';?>
	
    <!--https://www.youtube.com/watch?v=3xRMUDC74Cw-->
    <!--CRUD-->
    <div class= "container">
    <div class="row">
    	<form action="process.php" method="POST">
   <!--Username-->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="email" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
           <!--loc text-->
  <!--<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Loc</label>
     <input type="text" name="loc" class="form-control" placeholder="City" aria-label="City">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>-->
          <!--loc Dropdown-->
          <div class="mb-3">
    <label for="validationDefault04" class="form-label">Loc</label>
    <select class="form-select" name= "loc" id="validationDefault04" required>
      
      <option selected disabled value="">	A	</option>
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
<option selected disabled value="">	B	</option>
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
<option selected disabled value="">	C	</option>
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
<option selected disabled value="">	D	</option>
<option>	Democratic Republic of the Congo	</option>
<option>	Denmark	</option>
<option>	Djibouti	</option>
<option>	Dominica	</option>
<option>	Dominican Republic	</option>
<option>	Duchy of Parma, The	</option>
<option selected disabled value="">	E	</option>
<option>	Ecuador	</option>
<option>	Egypt	</option>
<option>	El Salvador	</option>
<option>	Equatorial Guinea	</option>
<option>	Eritrea	</option>
<option>	Estonia	</option>
<option>	Eswatini	</option>
<option>	Ethiopia	</option>
<option selected disabled value="">	F	</option>
<option>	Fiji	</option>
<option>	Finland	</option>
<option>	France	</option>
<option selected disabled value="">	G	</option>
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
<option selected disabled value="">	H	</option>
<option>	Haiti	</option>
<option>	Hanseatic Republics	</option>
<option>	Hesse	</option>
<option>	Holy See	</option>
<option>	Honduras	</option>
<option>	Hungary	</option>
<option selected disabled value="">	I	</option>
<option>	Iceland	</option>
<option>	India	</option>
<option>	Indonesia	</option>
<option>	Iran	</option>
<option>	Iraq	</option>
<option>	Ireland	</option>
<option>	Israel	</option>
<option>	Italy	</option>
<option selected disabled value="">	J	</option>
<option>	Jamaica	</option>
<option>	Japan	</option>
<option>	Jordan	</option>
<option selected disabled value="">	K	</option>
<option>	Kazakhstan	</option>
<option>	Kenya	</option>
<option>	Kingdom of Serbia	</option>
<option>	Kiribati	</option>
<option>	Korea	</option>
<option>	Kosovo	</option>
<option>	Kuwait	</option>
<option>	Kyrgyzstan	</option>
<option selected disabled value="">	L	</option>
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
<option selected disabled value="">	M	</option>
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
<option selected disabled value="">	N	</option>
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
<option selected disabled value="">	O	</option>
<option>	Oman	</option>
<option>	Orange Free State	</option>
<option selected disabled value="">	P	</option>
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
<option selected disabled value="">	Q	</option>
<option>	Qatar	</option>
<option selected disabled value="">	R	</option>
<option>	Republic of Genoa	</option>
<option>	Republic of Korea (South Korea)	</option>
<option>	Republic of the Congo	</option>
<option>	Romania	</option>
<option>	Russia	</option>
<option>	Rwanda	</option>
<option selected disabled value="">	S	</option>
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
<option selected disabled value="">	T	</option>
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
<option selected disabled value="">	U	</option>
<option>	Uganda	</option>
<option>	Ukraine	</option>
<option>	United Arab Emirates, The	</option>
<option>	United Kingdom, The	</option>
<option>	Uruguay	</option>
<option>	Uzbekistan	</option>
<option selected disabled value="">	V	</option>
<option>	Vanuatu	</option>
<option>	Venezuela	</option>
<option>	Vietnam	</option>
<option selected disabled value="">	Y	</option>
<option>	Yemen	</option>
<option selected disabled value="">	Z	</option>
<option>	Zambia	</option>
<option>	Zimbabwe	</option>

       <option selected disabled value="">Choose...</option>
    </select>
  </div>

          
          <!--Password-->
 <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
          
          <!--Button-->
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
      
    
    <?php
    //$servername = "localhost";
  	//$username = "hajela_tcapp";
  	//$password = "UwindsorRocks";
  	//$dbname = "hajela_tcapp";
    $mysqli = new mysqli('localhost', 'hajela_tcapp', 'UwindsorRocks', 'hajela_tcapp') or die(mysqli_error($mysqli));
    $result = $mysqli->query("Select * from data") or die($mysqli->error);
    //pre_r($result);
    //pre_r($result->fetch_assoc());
    //pre_r($result->fetch_assoc());
    ?>
    
    <div class= "row">
      <table class = table>
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>location</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        
        <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['loc']; ?></td>
          <td><?php ?></td>
        </tr>
        <?php endwhile; ?>        
      </table>
    </div>    
    
    <?php
    function pre_r( $array ){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    }
    ?>
          
      </div>
    
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>