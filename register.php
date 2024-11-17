<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>💬Chit Chat💬| Rakshitha & Mayuri </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>💬Chit Chat💬</header>
                <form action="#">
                    <div class="error-txt">This is an error message!</div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First name</label>
                            <input type="text" name="fname" placeholder="First Name" required >
                        </div>
                        <div class="field input">
                            <label>Last name</label>
                            <input type="text"  name="lname" placeholder="Last Name"required>
                        </div>
                    </div>
                    <div class="field input">
                         <label>Email address</label>
                         <input type="text" name="email" placeholder="Enter your address"required>
                    </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password"  name="password" placeholder="Enter new password"required>
                        </div>
                        <div class="field">
                            <label>Select Image</label>
                            <input type="file"  name="image"required >
                        </div>
                    <div class="field button">
                        <input type="Submit" value="Continue to chat">
                    </div>
                </form>
                <div class="link">Already signed up? <a href="login.html">Login now </a></div>
            </section>
        </div>
       
        <script src="javascript/signup.js"></script>

    </body>
</html>