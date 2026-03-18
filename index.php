<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="loginf_style.css">
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">CREATE ACCOUNT</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <input type="text" name="fName" placeholder="First name" required>
            </div>
            <div class="input-group">
                <input type="text" name="lName" placeholder="Last name" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="end">
                <button type="submit" name="signup">Create</button>
                <button type="button" id="signInButton">Sign in</button>
            </div>
        </form>
    </div>
    <!-- Sign in -->
     <div class="container" id="signin">
        <h1 class="form-title">SIGN IN</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <p class="recover">
                <a href="#">Forgot password?</a>
            </p>
            <div class="end">
                <button type="submit" name="signin">Sign in</button>
                <button type="button" id="signUpButton">Create</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>