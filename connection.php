<?php
$database = new mysqli("localhost","root","","onlinedoctor");
if($database->connect_error){
    die("Connection failed: ".$database->connect_error);
}
?>