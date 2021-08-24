<?php 
    $connection = mysqli_connect('localhost','root','','loginapp');
    if(!$connection){
        echo "failed to connect";
    }
?>