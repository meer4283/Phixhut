<?php

//login.php

require('../database/config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output=array();
        $logindata=json_decode(file_get_contents("php://input"));


        $device=$logindata->device;
        
      






$query = "SELECT * FROM `devices` where `slug` = '$device' ";


$run=mysqli_query($link,$query);
if(mysqli_num_rows($run)>0){
    while($row=mysqli_fetch_array($run)){
        $temp=array();
        $temp['device_id']=$row['device_id'];
        $temp['device_name']=$row['device_name'];
        $temp['slug']=$row['slug'];
        $temp['device_img']=$row['device_img'];
        
        
        array_push($output,$temp);
    }
   
    echo json_encode($output,JSON_UNESCAPED_SLASHES);

}
else{
    echo json_encode($output,JSON_UNESCAPED_SLASHES);
}







        }
?>