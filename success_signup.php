<?php

$user = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];
$city = $_POST["city"];
$zip = $_POST["zipcode"];

// $res = "forkert";

// if($user == "test" && $pass == "1234") {
//     $res = "rigtigt";
// }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signup success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="success">
        <div>
        <h1>You are now signed up!</h1></div>
        <div class="signup_result">
            <p>Username: <?php echo $user; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>Password: <?php echo $pass; ?></p>
            <p>City: <?php echo $city; ?></p>
            <p>Zip code: <?php echo $zip; ?></p>
        </div>
    </div>



</body>
</html>


