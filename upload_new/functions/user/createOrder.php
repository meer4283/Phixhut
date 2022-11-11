<?php



require('../database/config.php');




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode(file_get_contents("php://input"));
    
    $fname = $data->fname;
    $lname = $data->lname;
    $username = $data->username;
    $email = $data->email;
    $address = $data->address;
    $address2 = $data->address2;
    $country = $data->country;
    $state = $data->state;
    $zip = $data->zip;


    $insert = "INSERT INTO `orders` (`order_id`, `fname`, `lname`, `username`, `email`, `address`, `address2`, `country`, `state`, `zip`) VALUES (NULL, '$fname', '$lname', '$username', '$email', '$address', '$address2', '$country', '$state', '$zip');";
    $result = mysqli_query($link, $insert);
   
   

    


}





?>