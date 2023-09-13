<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>
        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"> <button class="btn-logout">Log Out</button></a>

        </div>
    </div>
    <div class="container">
        <div class="login-box">
            <div class="login-header">
                <header>Change Profile</header>
                <form action="" method="post">

                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Username" autocomplete="on" required>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Email" autocomplete="on" required>
                    </div>
                    <div class="input-submit">
                        <button class="submit-btn" id="submit" value="Update"></button>
                        <label for="submit">Update</label>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>