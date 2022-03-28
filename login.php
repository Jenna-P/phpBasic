<?php

$user = $_POST["username"];
$pass = $_POST["password"];
$res = "forkert";
$login_result="Hello! You are logged in";
$btn = "Logout";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "logindb";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// $conn = OpenCon();
$msg = "Connected Successfully";
echo "<script type='text/javascript'>console.log('$msg');</script>";

if($user == "test" && $pass == "1234") {
    $res = "rigtigt";
 }
 
 $sql = "SELECT username, password FROM bruger_tabel WHERE username='$user'";
 $result = $conn->query($sql);
 if($result->num_rows == 1) {
     $row = mysqli_fetch_array($result);
     if($row['password'] == $pass) {
         $res = "Success";
     } else {
         $login_result = "Please Try again";
         $res = "User found, password is incorrect!";
         $btn = "Login";
     }
 } else {
    $login_result = "Please Try again";
     $res = "User not found";
     $btn = "Login";
 }

 $conn -> close();

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Min form Resultat</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="button_wrapper">
        <form action="index.php">
            <button class="smallButton"><?php echo $btn; ?></button>
        </form>
    </div>
    <h1><?php echo $login_result; ?></h1>
    <p class="center_text"> <?php echo $res; ?></p>
</body>
</html>


