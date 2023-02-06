<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>
<body>
    <form action="adduser.php" method = "post">
        <h3>Creat new account</h3>
        <label for="">Name</label><br>
        <input type="text" id="user_name" name="user_name"><br><br>
        <label for="">Contact</label><br>
        <input type="text" id="user_contact" name="user_contact"><br><br>
        <label for="">Email</label><br>
        <input type="email" id="user_email" name="user_email"><br><br>
        <label for="">User Status</label><br>
        <input type="text" id="user_status" name="user_status" value="online_buyer" readonly><br><br>
        <label for="">Password</label><br>
        <input type="text" name = "user_pswrd" id = "user_pswrd">
        <input type="submit" value = "signin">

       
    </form>
</body>
</html>
