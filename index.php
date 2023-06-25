<?php

$con=new mysqli('localhost','root','','emuna');

if ($con){
    // echo "Connection Successful";
}
else{
    die(mysqli_error($con));
}

?>