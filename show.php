<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color:#194ff0;
        }
    </style>
</head>
<body>
    <div id="re" >
    <table border="1" style=" background-color:#011267; color:bisque">
        <tr>
            <th style=" padding: 10px 30px;">
                MATH
            </th>
            <th style=" padding: 10px 30px;">
                SCINCE
            </th>
            <th style=" padding: 10px 30px;">
                ENGLISH
            </th>
            <th style=" padding: 10px 30px;">
                STATUS
            </th>
        </tr>
        <?php
        $sql="SELECT * FROM `result`";
        $connect=mysqli_query($root,$sql);
        while($dogs=mysqli_fetch_assoc($connect)){
            echo"<tr>";
            echo"<th  style=' padding: 10px 20px;'>".$dogs["MATH"]."</th>";
            echo"<th style=' padding: 10px 20px;'>".$dogs["SCINCE"]."</th>";
            echo"<th  style=' padding: 10px 20px;'>".$dogs["ENGLISH"]."</th>";
            echo"<th  style=' padding: 10px 20px;'>".$dogs["STATUS"]."</th>";
            echo "</tr>";

        }
           print_r($dogs)
        ?>
    </table>
    </div>
</body>
</html>