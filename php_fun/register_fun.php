
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