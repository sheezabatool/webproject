<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="addpd.php" method = "POST">
    <h4>Add New Product</h4>
    <label for="">Product Name</label><br>
    <input type="text" name="pd_name" id="pd_name"><br><br>
    <label for="">Category id</label><br>
    <input type="text" name="ct_id" id="ct_id"><br><br>
    <label for="">Quantity</label><br>
    <input type="number" name="pd_quantity" id="pd_quantity"><br><br>
    <label for="">Retail Price</label><br>
    <input type="text" name="pd_retail_price" id="pd_retail_price"><br><br>
    <label for="">Sale Price</label><br>
    <input type="text" name="pd_sale_price" id="pd_sale_price">
    <input type="submit" value="Add" name="" id="">
   </form> 
</body>
</html>