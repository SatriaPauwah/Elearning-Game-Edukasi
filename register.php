<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
    <div class="login-header">
    <div class="login-box">
    <?php
                include("config/config.php");
                if(isset($_POST['submit'])){
                    $username =$_POST['username'];
                    $email =$_POST['email'];
                    $password =$_POST['password'];
                    $confirm_password =$_POST['confirm_password'];

//verifying the unique email

                $verify_query = mysqli_query($conn,"SELECT email FROM users WHERE email='$email'");
                
                if(mysqli_num_rows($verify_query) !=0){

                    echo "<div class='message'>
                            <p> This email is used, Try another One Please!</p></div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } 
                else{

                    mysqli_query($conn, "INSERT INTO users(username, email, password, confirm_password) VALUES('$username','$email','$password','$confirm_password')") or die ("error Occured");
                    
                    echo "<div class='message'>
                            <p> Registration Succsessfully</p>
                        </div> <br>";
                    echo "<a href='index.php'><button class='submit-btn'>Login Now</button>";
                }
    
                ?>
           
                <header>Register</header>
                <form action="" method="post">

                    <div class="input-box">
                        <input type="text" class="input-field" name="username" id="username" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="email" id="email" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="password" id="password" placeholder="password" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="confirm_password" id="confirm_password" placeholder="Confirm Password" autocomplete="off"
                            required>
                    </div>
                    <div class="input-submit">
                        <button class="submit-btn" name="submit" id="submit" value="Register"></button>
                        <label for="submit">Sign in</label>
                    </div>
                    <div class="sign-up-link">
                        <p>Already a member? <a href="index.php">Sign in</a></p>
                    </div>
                </form>
        </div>
    <?php }?>
    </div>
    </div>
</body>
</html>