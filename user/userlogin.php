<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>userlogin</title>
<link rel="stylesheet" href="usercss/style userlogin.css">
</head>
<body>

<div class="container">
    <div class="column left-column">
        <div class="logo">
            <img src="userimages/logo-3.jpg" alt="Logo" width="100">
        </div><br>
        <div class="text">
            <p>Welcome to</p>
            <h2> Fundraising and 
                <br>Resource Mobilization</h2>
        </div>
    </div>
    <div class="column">
        <div class="login-form">
            <h1>User Login</h1><br><br>
            <form action="LOGIN.php" method="post">
                <label type="email">Email ID</label><br><br>
                <input type="email" id="email" name="email" placeholder="Enter Email ID" required>
                <br><br><br>
                
                <label type="password">Password</label><br><br>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    <p><a href="forgetpwd.php" id="userforgot">Forgot password ?</a></p>
                <br>
                <input type="submit" value="Login"><br><br><br><br>

                        <!-- USER REGISTRATION -->
                <p> Don't have an account ?<a href="##" id="userreg"> Register</a></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>
