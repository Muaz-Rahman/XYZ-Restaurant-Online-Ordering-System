<!DOCTYPE html>
<html lang="en">
<?php
$con = new mysqli("localhost","root","","xyz_order_db");
if($con->connect_error) die("Connection to database has failed");
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$sql_writer = $con->prepare("INSERT INTO user_table (user_email, user_password, user_phone) VALUES (?,?,?)");
$sql_writer->bind_param("sss", $email, $password, $phone);
$sql_writer->execute();

header("refresh:5; url = login_page.php");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Account Created</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: var(--bs-teal);">
    <div class="container" style="margin-top: 10%;">
        <h1 style="text-align: center;color: var(--bs-white);">Account Created Successfully!</h1>
        <h2 style="text-align: center;color: var(--bs-white);margin-top: 5%;">Redirecting you to the&nbsp;<a href="login_page.php">login page</a>&nbsp;now...</h2>
    </div>

</body>


</html>

