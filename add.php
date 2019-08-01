<?php
include ("connection.php");
$uemail="fun";
$year = "gfbfg";
$compayname = "bfgbgf";
$skillname = "html";
$skilllavel = "high";
$degree = "bsc";
$iname = "deffodil";
if(isset($_POST['workexp'])){
    $sql = "INSERT INTO `cvworkexperience`(`uemail`, `year`, `companyname`) VALUES ('$uemail','$year','$compayname')";
    mysqli_query($db,$sql);

}

if(isset($_POST['skillbut'])){
    $sql = "INSERT INTO `workskill`(`uemail`, `skillname`, `skilllevel`) VALUES ('$uemail','$skillname','$skilllavel')";
    mysqli_query($db,$sql);
    
}

if(isset($_POST['edubut'])){
    $sql = "INSERT INTO `education`(`uemail`, `degree`, `iname`) VALUES ('$uemail','$degree','$iname')";
    mysqli_query($db,$sql);
}

mysqli_close($db);


?>