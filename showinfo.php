<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add Form</title>



    <style>

    </style>
</head>

<body>

<?php
include ("connection.php");


$email = "a@gmail";
$password = "1";

$uid="";
$uname = "";
$uemail = "";
$ucity = "";
    $uaddress = "";
    $uphone= "";
    $uimage = "";


$sql = "SELECT * FROM cvuserinfo ";
$result = mysqli_query($db,$sql);
$uid = "";
while($row = mysqli_fetch_assoc($result)){
if($email==$row["uemail"] && $password==$row['upassword']){
    $uid=$row["uid"];
    $uname = $row["uname"];
    $uemail = $row["uemail"];
    $ucity = $row["ucity"];
    $uaddress =$row["uaddress"] ;
    $uphone= $row["uphone"];
    $uimage = $row["uimage"];

}

}


    ?>

    <form method="get" action="useinfoupdatedelete.php">
        <Input type="hidden" name="uid" value=<?php echo $uid;?>>

<table>
    <thead>
        <tr>
            <th>Information</th>
            <th>Delete</th>
            <th>Take Input</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>Name: </b> <?php echo $uname?></td>
            <td><button type="submit" name="delname">Delete</button></td>
            <td><input type="text" name="name"></td>
            <td>
                <button type="submit" name="upname">Update</button>
            </td>

        </tr>
        <tr>
            <td><b>Email:</b> <?php echo $uemail?></td>
            <td><button type="submit" name="delemail" disabled>Delete</button></td>
            <td><input type="text" name="email"></td>
            <td><button type="submit" name="upemail" disabled>Update</button></td>
        </tr>
        <tr>
            <td><b>City:</b> <?php echo $ucity?></td>
            <td><button type="submit" name="delcity">Delete</button></td>
            <td><input type="text" name="city"></td>
            <td><button type="submit" name="upcity">Update</button></td>
        </tr>
        <tr>
            <td><b>Address:</b> <?php echo $uaddress?></td>
            <td><button type="submit" name="deladdress">Delete</button></td>
            <td><input type="text" name="address"></td>
            <td><button type="submit"name="upaddress">Update</button></td>
        </tr>
        <tr>
            <td><b>Phone:</b> <?php echo $uphone?></td>
            <td><button type="submit" name="delphone">Delete</button></td>
            <td><input type="text" name="phone"></td>
            <td><button type="submit"name="upphone">Update</button></td>
        </tr>
</table>
</form>
<form method="post" action="useinfoupdatedelete.php" enctype="multipart/form-data">
<Input type="hidden" name="id" value=<?php echo $uid;?>>
        <table>
        <tr>
            <td><b>Image:</b><img src="images/<?php echo $uimage?>" height="60px" width="60px"></td>
            <td><button type="submit" name="delimage">Delete</button></td>
            <td><input type="file" name="file"></td>
            <td><button type="submit" name="upimage">Update</button></td>
        </tr>
    </tbody>
</table>


<?php
//$sql = "SELECT `id`, `uemail`, `year`, `companyname` FROM cvworkexperience";
$sql = "SELECT * FROM cvworkexperience";
$result = mysqli_query($db,$sql);

echo"<label><b>Work Experience</b></label>";
echo"<br>";
echo"<table>
    <thead>
        <tr>
            <th>Year</th>
            <th>Company Name</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>";
    while($row = mysqli_fetch_assoc($result)){
        if($email==$row["uemail"]){
    
        echo"<tr>
            <td>{$row['year']}</td>
            <td>{$row['companyname']}</td>
            <td><button>Delete</button></td>
            <td><a href = 'http://localhost/mamun/workskillupdate.php?uid=" . $row['id'] . "'>Update</a></td>
        </tr>";
        }
    }  
    echo"</tbody>
</table>";

$sql = "SELECT * FROM workskill";
$result = mysqli_query($db,$sql);

echo"<br><label><b>Work Skills</b></label>";
echo"<br>";
echo"<table>
    <thead>
        <tr>
            <th>Skills Name</th>
            <th>Skill Lavel</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>";
    while($row = mysqli_fetch_assoc($result)){
        if($email==$row["uemail"]){
        echo"<tr>
            <td>{$row['skillname']}</td>
            <td>{$row['skilllevel']}</td>
            <td><button>Delete</button></td>
            <td><a href = 'http://localhost/mamun/skillupdate.php?uid=" . $row['id'] . "'>Update</a></td>
        </tr>";
        }
    }
    echo"</tbody>
</table>";

$sql = "SELECT * FROM education";
$result = mysqli_query($db,$sql);

echo"<br><label><b>Education</b></label>";
echo"<br>";
echo"<table>
    <thead>
        <tr>
            <th>Degree Name</th>
            <th>Institution Name</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>";
    while($row = mysqli_fetch_assoc($result)){
        if($email==$row["uemail"]){
        echo"<tr>
            <td>{$row['degree']}</td>
            <td>{$row['iname']}</td>
            <td><button>Delete</button></td>
            <td><a href = 'http://localhost/mamun/educationupdate.php?uid=" . $row['id'] . "'>Update</a></td>
        </tr>";
        }
    }
    echo"</tbody>
</table>";


?>

<a href="http://localhost/mamun/cvpage.php#">Go Back CV Page</a>


</body>


</html>