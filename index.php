<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

    <!-- Login Form -->
    <div class="glass-container" id="signIn">
        <div class="login-box">
            <h2>Login</h2>
            <form class="form" method="POST" action="register.php">
                <input type="email" class="email" id="email" name="email" required placeholder="Email:">
                <input type="password" class="password" id="password" name="password" required placeholder="Password:">

                <div class="options">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>

                <button class="submit-btn" name="signIn" type="submit">Login</button>

                <div class="links">
                    <p>Don't have account yet?</p>
                    <button id="signUpButton">Register</button>
                </div>
                <!-- <p>Don't have and account? <a href="#" class="link" name="register" id="signUpButton">Register</a></p> -->

            </form>
        </div>
    </div>

    <!--  Register Form  -->
    <div class="register-container" id="signup" style="display:none;">
        <div class="login-box">
            <h2>Register</h2>
            <form class="form" action="register.php" method="POST">
                <input class="name" type="text" id="name" name="firstName" required placeholder="First Name:">
                <input class="name" type="text" id="name" name="lastName" required placeholder="Last Name:">
                <input class="email" type="email" id="email" name="email" required placeholder="Email:">
                <input class="password" type="password" id="password" name="password" required placeholder="Password:">

                <button class="submit-btn" name="signUp" type="submit">Register User</button>

                <div class="links">
                    <p>Already have an account?</p>
                </div>
                <button id="signInButton">Sign In</button>

            </form>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>