<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body id="register-body">
<div id="register-background">
    <form action="login-back.php" method="post">
        <div class="form-container" id="name-email">
            <div class="personal-data">
                <p class="form-content">Full name</p>
                <input type="text" placeholder="Type here" name="full-name" class="form-content" required>
            </div>
            <div class="personal-data">
                <p class="form-content">Email</p>
                <input type="text" placeholder="Type here" name="email" class="form-content" required>
            </div>
        </div>
        <div id="form-submit-div">
            <button type='submit' class="contact-us" id="form-submit-button">Login</button>
        </div>
</html>