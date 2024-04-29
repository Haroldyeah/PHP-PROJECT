<?php

$host="localhost";
$user="root";
$pass="";
$db="login";


try{
    $conn=new mysqli($host,$user,$pass,$db);
}catch( mysqli_sql_exception){
    echo "Connection Failed";
}
if($conn){
    echo"Connection complete";
}
?>