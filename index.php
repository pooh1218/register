<html>

<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="action_page.php" style="border:1px solid #ccc">
        <div class="container">
            <hi>Sign Up</hi>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <div>
                
            </div>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter your email" name="email" reuqired>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter your password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat password" name="psw-repeat" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our<a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div>
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="sbumit" calss="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</body>

</html>