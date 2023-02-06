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
    
$Name = $_REQUEST['name'];
$Email = $_REQUEST['user_email'];
$feedback = $_REQUEST['experience'];

if ($Name != ""  && $Email!= ""  && $pdQuantity != "" )
{
$sql = "INSERT into feedback_tb (name, user_email, experience,)
VALUES ('$Name', '$Email', '$feedback')";
if($con->query($sql)===true)
{
    echo "thank you for your feedback!";
}}
else
{
    echo "something went wrong";
}
    ?>
</body>

</html>