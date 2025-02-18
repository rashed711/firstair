    <!-- --------------------------------------------- -->
    <!-- php Register connection -->
    <?php
    include "./php_fun/register_fun.php"
    ?>
    <!-- php Register connection -->
    <!-- --------------------------------------------- -->
    <!-- --------------------------------------------- -->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>First Air | Register</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <div class="container">

        <div class="main_login">
            <form action="register.php" class="form" method="post">
                <h1>Register</h1>
                <input type="text" name="name" class="box" required placeholder="Enter name" autocomplete="on">
                <input type="email" name="email" class="box" required placeholder="Enter Email" autocomplete="on">
                <input type="password" name="password" class="box" required placeholder="Enter Password" autocomplete="off">
                <input type="submit" name="register" value="Register" id="submit">

                <P>Don't have account? <a href="login.php">LOGIN</a></P>
            </form>

            <br>
    </div>

        </div>
    </body>

    </html>