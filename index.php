<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="main">
        <h1>Welcome</h1>
    
        <?php include("connection.php"); ?>

        <?php
        session_start();

        $stm = "select * from users where email='$_SESSION[email]'";

        $result = mysqli_query($conn,  $stm);

        $row = mysqli_fetch_array($result);
        ?>

        <p>Name : <span> <?php echo "" . $row["name"]; ?> </span></p>
        <p>Email : <span> <?php echo "" . $row["email"]; ?> </span></p>
        <p>Type : <span> <?php echo "" . $row["type"]; ?> </span></p>

        <br> <br>

        <div class="logout_btn">
            <a href="logout.php">logout</a>
        </div>

    </div>
</body>

</html>