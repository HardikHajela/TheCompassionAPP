/**Event listner Down

and EL se Variable mei store https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener

call js <script src >

Button name retrive https://www.w3schools.com/jsref/met_html_click.asp

output sqlnum 
$resultmodal = $mysqli->query("SELECT * FROM ( SELECT ROW_NUMBER() OVER (ORDER BY bid) AS row_num, bid, email, name, ismd, med_reg_no, trickypass , passhint, city, state, county, med_doc_link, notes, date_added FROM trickybenf ) AS sub WHERE row_num = $sqlnump1;") 
    or die($mysqli->error);**/

const element = document.getElementById("name0");
element.addEventListener("click", myFunction);

function myFunction() {
  console.log("clicked name0");
}
