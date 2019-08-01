<?php
include ("connection.php");
// $id=$_GET['uid'];
// $updateColumnName = $_GET['press'];

// if($updateColumnName=="upname"){
//     $sql = "UPDATE cvuserinfo set uname='masud' where uid='$id'";
//     mysqli_query($db,$sql);

// }
$uid=$_GET["uid"];
$newName=$_GET["name"];
$newEmail=$_GET["email"];
$newCity=$_GET["city"];
$newAddress=$_GET["address"];
$newPhone=$_GET["phone"];





if(isset($_GET['upname'])){
    $sql = "UPDATE cvuserinfo SET uname='$newName' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

}
else if(isset($_GET['upemail'])){


}
else if(isset($_GET['upcity'])){
    $sql = "UPDATE cvuserinfo SET ucity='$newCity' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

}
else if(isset($_GET['upaddress'])){
    
    $sql = "UPDATE cvuserinfo SET uaddress='$newAddress' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

}

else if(isset($_GET['upphone'])){

    $sql = "UPDATE cvuserinfo SET uphone='$newPhone' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

}
else if(isset($_POST['upimage'])){
    $id = $_POST['id'];
    $file=$_FILES['file'];


    
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
                
                $sql = "UPDATE cvuserinfo SET uimage='$fileNameNew' WHERE uid='$id'";
                 mysqli_query($db,$sql);


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



///  delete 


if(isset($_GET['delname'])){
    $sql = "UPDATE cvuserinfo SET uname='' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

} else if(isset($_GET['delemail'])){
    $sql = "UPDATE cvuserinfo SET uemail='' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

} else if(isset($_GET['delcity'])){
    $sql = "UPDATE cvuserinfo SET ucity='' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

} else if(isset($_GET['deladdress'])){
    $sql = "UPDATE cvuserinfo SET uaddress='' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

} else if(isset($_GET['delphone'])){
    $sql = "UPDATE cvuserinfo SET uphone='' WHERE uid='$uid'"; 
    mysqli_query($db,$sql);

} else if(isset($_POST['delimage'])){
    $id = $_POST['id'];
    $sql = "UPDATE cvuserinfo SET uimage='' WHERE uid='$id'";
    mysqli_query($db,$sql);

}

header("Location: http://localhost/mamun/showinfo.php"); /* Redirect browser */
exit();

?>