<?php

$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="ergasia_acropolis_db";
$conn="";
//connection to the mysql DB
    try{
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    }
    catch(mysqli_sql_exception){
        echo"Could not connect to the database<br>";
    }
if($conn){
    //echo"You are connected<br>";
}
else{
    //echo"You could not connect<br>";
}


?>