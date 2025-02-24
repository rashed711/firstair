<!-- --------------------------------------------- -->
<!-- php login connection -->
<?php
include "./php_fun/login_fun.php"
?>
<!-- php login connection -->
<!-- --------------------------------------------- -->
<!-- ------------------RRR--------------------------- -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Air | Login</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">

    <div class="main_login">

        <form action="login.php" class="form" method="post">

            <h1>LOGIN</h1>
            <input type="email" name="email" class="box" required placeholder="Enter Email" autocomplete="on">
            <input type="password" name="password" class="box" required placeholder="Enter Password" autocomplete="off">
            <input type="submit" name="login" value="LOGIN" id="submit">

            <P>Don't have account? <a href="register.php">SINGE UP</a></P>
        </form>
    </div>
    </div>
</body>

</html>
