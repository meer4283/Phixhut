<?php

//login.php

require('../database/config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output=array();
        $logindata=json_decode(file_get_contents("php://input"));
        
        $zipcode=$logindata->zipcode;
        
      






$query = "SELECT * FROM `zipcodes` where `zipcode` =  '$zipcode' ";


$run=mysqli_query($link,$query);
if(mysqli_num_rows($run)>0){
 
$detail = mysqli_fetch_assoc($run);

echo $detail['eligible_type'];
}
else{
    echo "notfound";
}







        }
?>