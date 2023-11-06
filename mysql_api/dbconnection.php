<?php



function dbconnection(){
$host = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = mysqli_connect($host, $username, $password, $database);


if(mysqli_connect_errno()){
	echo  "No connection successfull <br>" . mysqli_connect_errno();
	
}else{
	
	echo  "Connection Successfull";
	
}

}

echo dbconnection();








?>