<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="form_container">
    <form action="success_signup.php" method="post" style="border:1px solid #ccc">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="name"><b>Username</b></label>
        <input type="text" placeholder="Enter your username" name="username" required>
        <br>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br>
        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter City" name="city" required>
        <br>  
        <label for="zipcode"><b>Zipcode</b></label>
        <input type="text" placeholder="Enter Zipcode" name="zipcode" required>
        <br>  

        <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
    </form>
</div>
</body>
</html>