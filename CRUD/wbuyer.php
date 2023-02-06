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

    $CusName = $_REQUEST['cus_name'];
    $CusContact = $_REQUEST['cus_contact'];
    $TotalBill = $_REQUEST['cus_total_bill'];
    $PaidBill = $_REQUEST['cus_paid_bill'];
    $RemBill = $_REQUEST['cus_remaining_bill'];
    $Discount = $_REQUEST['discount'];

    if ($CusName != "" && $CusContact !="" && $TotalBill !="" && $PaidBill !="" ){
$sql = "INSERT INTO w_buyer_tb (cus_name, cus_contact, cus_total_bill, cus_paid_bill, cus_remaining_bill, discount)
 VALUES ('$CusName', ' $CusContact', '$TotalBill', '$PaidBill', '$RemBill', '$Discount')";
 
if ($con-> query($sql)===true){
    echo "record addeed";

}}
else{
   echo "please enter record";
   
}
    ?>
</body>

</html>