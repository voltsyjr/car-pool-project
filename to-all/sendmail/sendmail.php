<?php
$to_email="vishalsingh2508720@gmail.com";
$subject="Mail From Xamp";
$body="Hi, This is mail From Xamp";
$headers="From:vishalsinghq54@gmail.com";

if(mail($to_email,$subject,$body,$headers)){
    echo "EMAIL SEND SUCEESSFULLY";
}else{
    echo "EMAIL FAILED";
}


?>