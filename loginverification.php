<?php

// $host = 'localhost';
// $username = 'root';
// $password = '';
// $db = 'appdata';

// $db = new mysqli($host,$username,$password,$db) or die("Not connected!!!!");

include ('connection.php');

$sql = "SELECT * FROM cvuserinfo";
$result = mysqli_query($db, $sql);

$userEmail = $_POST["un"];
$userPassword = $_POST["pa"];
$checker = 0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        //echo "name: " . $row["uname"]. " email: " . $row["uemail"]. "  password: " . $row["upassword"]. "<br>";

        if($userEmail==$row["uemail"] && $userPassword==$row["upassword"]){
            $checker = 1;
            header("location: http://localhost/mamuncv/cvpage.php");
            break;

            
        }

        
    }


} else {
    echo "0 results";
}

mysqli_close($db);
if($checker==0){
    header("location: http://localhost/mamuncv/loginform.php");

 }


?>