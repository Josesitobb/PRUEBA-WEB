<?php

$servername="localhost";
$username ="root";
$password ="";
$db="mydb";
$port= "3306";

$conn=mysqli_connect($servername,$username,$password,$db,$port);

// Probar la conexion
// if(!$conn){
//     die("Muy bot".mysqli_connect_error());
// }
// echo "La conexion esta muy fina"
// ?>