<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connection.php';

    $Name = $_REQUEST['user_name'];
    $Contact = $_REQUEST['user_contact'];
    $Email = $_REQUEST['user_email'];
    $Status = $_REQUEST['user_status'];
    $Pswrd = $_REQUEST['user_pswrd'];

    if($Name != "" && $Contact !="" && $Email !="" && $Pswrd !="" && $Status !=""){
    $sql = "INSERT INTO user_tb(user_name, user_contact, user_email, user_status, user_pswrd)
    vALUES ('$Name', '$Contact', '$Email', '$Status', '$Pswrd')";

    if($con->query($sql)===TRUE){
        echo "account created";
        // header('location: shoppingsite.php');
    }}
    else{
        echo '<script> alert("please enter valid information")</script>';
        echo "account created";
    //   header('location: adduserform.php');
    }
    ?>
</body>
</html>