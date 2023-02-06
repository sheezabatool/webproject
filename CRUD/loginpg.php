<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginpg</title>
</head>

<body>
    <?php
include 'connection.php'; 

$Email = $_REQUEST['user_email'];
$Pswrd = $_REQUEST['user_pswrd'];


$sql = "SELECT * FROM user_tb WHERE user_email = '$Email' and
 user_pswrd = '$Pswrd'  ";

$record = $con->query($sql);

if($record->num_rows > 0){
    while ($row = $record->fetch_assoc()){
      //  echo "user record found";

    if ($row['user_status'] == "supervisor"){
        echo "welcome to dashboard";
        header('location: adminpannel.php');
    }
    if($row['user_status'] == "manager"){
        header('location:wbuyerform.php');
    }
}}
// else{
//   echo  "wrong information";
//   //  header('location: loginform.php');
// }
    ?>
</body>

</html>