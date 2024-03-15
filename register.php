<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CUstume Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Register</title>
</head>
<body>
<?php include("app/includes/header.php"); ?>

    <div class="auth-content">
        <form action="" method="post">
            <h2 class="form-title">Register</h2>

            <div>
                <label>Username</label>
                <input type="text" name="username" value="" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email" value="" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" value="" class="text-input">
            </div>
            <div>
                <label>Password Conformation</label>
                <input type="password" name="passwordConf" value="" class="text-input">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-prim btn-big">Register</button>
            </div>
            <p>Already a Member? <a href='login.php'>Sign In</a></p>
        </form>
    </div>
</body>
</html>