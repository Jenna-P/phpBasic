
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min form side</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="button_wrapper">
        <p>Do you not have account yet?</p>
        <form action="signup.php">
            <button class="smallButton">Sign Up</button>
        </form>
    </div>
    <div class="form_container">
        <form action="login.php" method="post">
        <div class="container">
            <h1>Login</h1>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button class="loginButton" type="submit">Login</button>
        </div>
        </form>
        
    </div>
</body>
</html>