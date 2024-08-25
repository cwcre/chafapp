<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Chat App</title>
    <link href="style.css" rel="stylesheet">
    <link href="Logo.png" rel="shortcut icon" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an Error message</div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your Email">
                </div>
                <div class="field input passwordField">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your Password">
                    <i class="fas fa-eye Myeye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>

            </form>
            <div class="link">Not yet signed up ? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="javascript/jquery-3.7.1.js"></script>
    <script src="javascript/pass-show-hide.js"></script>
</body>

</html>