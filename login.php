<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="styles/login.css?v=1">    
    </head>
    <body> 
        <div class="wrapper">
            <div id="formContent">
                <form id="form_id" action="login.php" method="POST"> 
                    <div id="username_wrapper" class="input_wrapper">
                        <input id="username_input_id" class="input" type="text" name="username" placeholder="Username" required>
                    </div>

                    <div id="password_wrapper" class="input_wrapper">
                        <input id="password_input_id" class="input" type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" class="fadeIn" name="login_btn" value="Login">

                    <?php echo display_error(); ?>
                </form>
            </div>
        </div>
    </body>
</html>
