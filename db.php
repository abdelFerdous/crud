<?php 
$servername ="db";
$username="Layout";
$password ="Layoutpw";
$dbname="Layout";
//creating connection
$connection=new mysqli($servername , $username , $password , $dbname);
//check connection
if($connection->connect_error){
    die("connection failed: ".$connection->connect_error);
}
?>