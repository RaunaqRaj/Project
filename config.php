<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
//     echo"successfully connected";
// }
// else{
    die("error".mysqli_connect_error());
}
?>