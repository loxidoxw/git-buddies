<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="register-body">
<div id="register-background">
<form action="register-back.php" method="post">
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
        <div class="form-container">
            <div id="contact-container">
                <p class="contact-content">Why are you contacting us?</p>
                <div class="checkmarks">
                    <label><input type="checkbox" name="contact reason" class="contact-checkmarks"> Web design</label>
                    <label style="margin-left: 61px"> <input type="checkbox" name="contact reason" class="contact-checkmarks" > Collaboration <br></label>
                    <label> <input type="checkbox" name="contact reason" class="contact-checkmarks" style="margin-top: 40px "> Mobile app design</label>
                    <label> <input type="checkbox" name="contact reason" class="contact-checkmarks"> Others</label>
                </div>
            </div>
        </div>
        <div id="form-submit-div">
            <button type='submit' class="contact-us" id="form-submit-button">Save</button>
        </div>
   <div style="width: 300px; margin: auto;"> <a href="login-form.php" style="color: grey;">Login</a> <span>, if you already have an account</span> </div>
    </form>
    </div>
</body>
</html>