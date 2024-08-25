<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.4.2/css/pro.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | Chat App</title>
    <link href="style.css" rel="stylesheet">
    <link href="Logo.png" rel="shortcut icon" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an Error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your Email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter new Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>

            </form>
            <div class="link">Already signed up ? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="javascript/jquery-3.7.1.js">
    <script src="javascript/pass-show-hide.js"></script>
</body>

</html>