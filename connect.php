<?php

$con = new mysqli('localhost', 'username', 'password', 'database');

if(!$con){
    die(mysqli_error($con));
}

?>