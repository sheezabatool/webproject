<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
</head>
<body>
<?php
$ServerName = "localhost";
$UserName = "root";
$Password = "";
$DatabaseName = "project_db";

$con = new mysqli($ServerName, $UserName, $Password, $DatabaseName);
if (!$con){
    die();
}
   // echo "connection successfull";
?>
    
</body>
</html>