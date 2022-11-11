<?php

//login.php

require('../database/config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output=array();
        $logindata=json_decode(file_get_contents("php://input"));


        $device_id=$logindata->device_id;
        $query = "SELECT * FROM `device_services` where `device_id` = '$device_id' ";


$run=mysqli_query($link,$query);
if(mysqli_num_rows($run)>0){
    while($row=mysqli_fetch_array($run)){
        $temp=array();
        $temp['service_id']=$row['service_id'];
        $temp['service_name']=$row['service_name'];
        $temp['service_cost']=$row['service_cost'];
        array_push($output,$temp);
    }
   
    echo json_encode($output,JSON_UNESCAPED_SLASHES);

}
else{
    echo json_encode($output,JSON_UNESCAPED_SLASHES);
}







        }
?>