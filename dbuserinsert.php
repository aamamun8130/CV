<?php
session_start();

include ('connection.php');

if(isset($_POST['submit'])){

    $file = $_FILES['file'];

    ///print_r($file);

    $fileName = $_FILES['file']['name'];

    $filTmpName = $_FILES['file']['tmp_name'];

    $fileSize = $_FILES['file']['size'];

    $fileError = $_FILES['file']['error'];

    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');
    

    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize < 200000){
                $fileNameNew = uniqid('',true). "." .$fileActualExt;
                $fileDestination = 'images/'.$fileNameNew;
                echo $fileDestination;
                move_uploaded_file($filTmpName,$fileDestination);

            }else{
                 echo "too big";
            }

        }else{
            echo "error found";
        }

    }else{
        echo "type not allowed";
    }

}

        

$uname = $_POST["fname"];
$uemail = $_POST["email"];
$upassword = $_POST["pass"];
$uage = $_POST["age"];
$ugender = $_POST["gender"];
$ureligion = $_POST["religion"];
$constatus = $_POST["term"];
$ucity=$_POST["city"];
$uaddress=$_POST["address"];
$uphone=$_POST["phone"];


$sql = "INSERT INTO cvuserinfo VALUES ('$uname','$uemail','$upassword','$uage','$ugender','$ureligion','$constatus', '$ucity','$uaddress','$uphone','$fileNameNew')";
//$passres = 
mysqli_query($db,$sql);
//echo $passres . "is";
mysqli_close($db);
//header("location: test.php");

?>