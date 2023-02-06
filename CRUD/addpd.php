<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include 'connection.php';
    
    $pdName = $_REQUEST['pd_name'];
    $ctID = $_REQUEST['ct_id'];
    $pdQuantity = $_REQUEST['pd_quantity'];
    $pdRetPrice = $_REQUEST['pd_retail_price'];
    $pdSalPrice = $_REQUEST['pd_sale_price'];

    if ($pdName != ""  && $ctID != ""  && $pdQuantity != ""  &&  $pdRetPrice != ""  && $pdSalPrice!= "")
    {
    $sql = "INSERT into product_tb (pd_name, ct_id, pd_quantity, pd_retail_price, pd_sale_price)
    VALUES ('$pdName', '$ctID', '$pdQuantity', '$pdRetPrice', '$pdSalPrice')";
    if($con->query($sql)===true)
    {
        echo "product added successfully!";
    }}
    else
    {
        echo "something went wrong";
    }
    ?>
</body>

</html>