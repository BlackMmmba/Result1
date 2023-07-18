<?php
include_once("config.php");

if (isset($_POST['math'])&&isset($_POST['scince'])&&isset($_POST['english'])) {
    $Math=$_POST['math'];
    $scince=$_POST['scince'];
    $english = $_POST["english"];
    $status=null ;
    if ($english>=25&&$Math>=25&&$scince>=25) {
        $status="PASS";

    }
    else{
        $status="FAIL";
    }
    $result = $Math +$scince + $english;
    $sql="INSERT INTO `result`(`MATH`,`SCINCE`,`ENGLISH`,`STATUS`)VALUES('$Math','$scince','$english','$status')";
    $doos = mysqli_query($root,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div id="result">   
    <form action="put.php" method="post">
        <lable>MATH</lable><input type="text" name="math" autocomplete="none"><br><Br>
        <lable>SCINCE</lable><input type="text" name="scince"  autocomplete="none"><br><br>
        <lable>English</lable><input type="text" name="english"  autocomplete="none"><br><br>
        <input type="submit" value="submit" id="button">
    </form>
    <a href="show.php" id="link">link to result</a>
 </div>
</body>
</html>