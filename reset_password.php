<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CUstume Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Reset Password</title>
</head>
<body>

    <div class="auth-content">
        <form action="" method="post">
            <h2 class="form-title">Reset your Password</h2>

            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input">
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="passwordConf" class="text-input">
            </div>

            <div>
                <button type="submit" name="reset-password-btn" class="btn btn-prim btn-big">Reset Password</button>
            </div>
        </form>
    </div>
</body>
</html>