<?php
        session_start();
        if (isset($_POST["login"])) {
            include './php_fun/connection.php';
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
