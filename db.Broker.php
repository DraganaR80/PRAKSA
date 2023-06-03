<?php
$host= "localhost";
$db="praksa";
$username="root";
$password="";

$conn= new mysqli($host,$username,$password,$db);

if($conn->connect_errno){

exit("Connection failed:".$conn->connect_errno);


}





?>