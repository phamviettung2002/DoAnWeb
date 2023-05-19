<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn Login">Login</button>
                <button type="button" class="toggle-btn Register">Register</button>
            </div>
            <form class="input-group" id="Login" method="POST">
                <input type="text" class="input-field" name="username" placeholder="Username" required>
                <input type="password" class="input-field" id="password" name="password" placeholder="Password" required>
                <div class="eye" id="eye1" style="top: 61px;">
                    <img src="image/eye-slash.svg" alt="">
                </div>
                <input type="checkbox" class="check-box">
                <span>Remember Password</span>
                <button type="submit" class="submit-btn">Log in</button>
            </form>
            <form class="input-group" id="Register" method="POST">
                <input type="text" class="input-field" name="R_username" placeholder="Username" required>
                <input type="text" class="input-field check" id="R_password" name="R_password" placeholder="Enter Password" required>
                <input type="password" class="input-field check" id="R_Cpassword" name="R_Cpassword" placeholder="Confirm Password" required>
                <div id="warning"></div>
                <input type="checkbox" class="check-box" checked>
                <span>I agree to the terms & condition</span>
                <button type="submit" class="submit-btn submit-btn-Reg">Register</button>
            </form>

        </div>
    </div>
   
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script>
    
    $('.check').keyup(function() {
        if ($('#R_Cpassword').val() != "" && $('#R_Cpassword').val() != "") {
            if ($('#R_Cpassword').val() != $('#R_password').val()) {
                $('#warning').text('Không khớp')
                $('.submit-btn-Reg').prop('disabled', true);
            } else {
                $('#warning').text('');
                $('.submit-btn-Reg').prop('disabled', false);
            }
        }
    })
    $('.eye').click(function() {
        if ($(this).children().attr('src') == 'image/eye.svg') {
            $(this).children().attr('src', 'image/eye-slash.svg');
            $('#password').attr('type', 'password');
        } else {
            $(this).children().attr('src', 'image/eye.svg');
            $('#password').attr('type', 'text');
        }
    })
    var x = $("#Login");
    var y = $("#Register");
    var z = $("#btn");
    $('.Register').click(function() {
        x.css('left', '-400px');
        y.css('left', '50px');
        z.css('left', '110px');
    })
    $('.Login').click(function() {
        x.css('left', '50px');
        y.css('left', '400px');
        z.css('left', '0px');
    })
</script>

</html>