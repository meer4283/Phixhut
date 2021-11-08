<?php

//login.php

require('../database/config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output=array();
        $logindata=json_decode(file_get_contents("php://input"));


        $order_id=$logindata->order_id;
        $query = "SELECT * FROM `cart` where `order_id` = '$order_id' ";


$run=mysqli_query($link,$query);
if(mysqli_num_rows($run)>0){
    while($row=mysqli_fetch_array($run)){
        $temp=array();
        $temp['service_id']=$row['service_id'];
        array_push($output,$temp);
    }
   
    echo json_encode($output,JSON_UNESCAPED_SLASHES);

}
else{
    echo json_encode($output,JSON_UNESCAPED_SLASHES);
}







        }
?>