<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="wbuyer.php" method = "post">
    <h4>Add Bill</h4>
    <label for="">Customer Name</label><br>
    <input type="text" name="cus_name" id="cus_name"><br><br>
    <label for="">Contact no</label><br>
    <input type="text" name="cus_contact" id="cus_contact"><br><br>
    <label for="">Total Bill</label><br>
    <input type="number" name="cus_total_bill" id="cus_total_bill"><br><br>
    <label for="">Paid Bill</label><br>
    <input type="text" name="cus_paid_bill" id="cus_paid_bill"><br><br>
    <label for="">Remaining Bill</label><br>
    <input type="text" name="cus_remaining_bill" id="cus_remaining_bill"><br><br>
    <label for="">Discount</label><br>
    <input type="text" name="discount" id="discount">
    <input type="submit" value="Add" name="" id="">
   </form>
</body>
</html>