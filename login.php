<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Diet | Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

                  <div class="main_login">

        <form action="login.php" class="form" method="post">

            <h1>LOGIN</h1>
            <input type="email" name="email" class="box" required placeholder="Enter Email" autocomplete="on">
            <input type="password" name="password" class="box" required placeholder="Enter Password" autocomplete="off">
            <input type="submit" name="login" value="LOGIN" id="submit">

            <P>Don't have account? <a href="register.php">SINGE UP</a></P>
        </form>

        <?php
        session_start();
        if (isset($_POST["login"])) {
            include 'connection.php';
            // error_reporting(error_level: 0);


            $email      = $_POST['email'];
            $password   = $_POST['password'];

            $stm = "select * from users where email='$email' and password='$password'";

            $result = mysqli_query($conn,  $stm);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;

                header('location:index.php');

            } else {
                ?>
                <p class="error"><span> <?php echo "user or pass is invalid"; ?> </span></p>
                <!-- echo 'user or pass is invalid'; -->
                <?php
            };
        }

        ?>

    </div>
</body>

</html>