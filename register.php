<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Diet | Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

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

        <?php
        if (isset($_POST["register"])) {
            include 'connection.php';
            error_reporting(error_level: 0);
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $password   = $_POST['password'];

            $checkEmail = "select * from users where email='$email'";
            $result = mysqli_query($conn,  $checkEmail);

            if($result->num_rows>0){
                echo "email is already exists !";
            }
            else{
            $insert = "INSERT INTO users (name , email , password ) VALUES ('$name','$email','$password')";
            $x = mysqli_query($conn, $insert);
            if ($x) {
                echo "user inserted";
                header('location:login.php');
            } else {
                echo "error";
            }
        } 
    }
        $name       ="";
        $email      = "";
        $password   = "";

        ?>

    </div>
</body>

</html>