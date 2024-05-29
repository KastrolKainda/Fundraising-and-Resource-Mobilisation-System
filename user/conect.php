<?php

$con = new mysqli('localhost', 'root', '', 'NGO' );

if(!$con){
    die(mysqli_error($con));
}
?>