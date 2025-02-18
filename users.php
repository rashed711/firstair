<!-- --------------------------------------------- -->
<!-- php connection -->
<?php include("./php_fun/connection.php"); ?>
<?php include("./php_fun/getUserData.php"); ?>
<!-- php connection -->
<!-- --------------------------------------------- -->
<!-- --------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | <?php echo "" . $row["name"]; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>




    <!-- --------------------------------------------- -->
    <!-- menu -->
    <?php include("./php_fun/menu.php"); ?>
    <!-- menu -->

    <!-- --------------------------------------------- -->
    <!-- Content -->
    <div class="content">
        <div>
            <?php include("./php_fun/userinfo.php"); ?>
        </div>
        
        <div class="title-info">
            <p>invoices</p>
            <i class="fas fa-table"></i>
        </div>

        <!-- table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = mysqli_query($conn,  "select * from users where email='$_SESSION[email]'");

                while ($row = mysqli_fetch_array($query)) {

                ?>

                    <tr>
                        <td> <?php echo $row['id'] ?></td>
                        <td> <?php echo $row['name'] ?></td>
                        <td> <?php echo $row['email'] ?></td>
                        <td> <?php echo $row['type'] ?></td>

                    </tr>
                <?php } ?>
            </tbody>

        </table>
        <!-- table -->


    </div>
    <!-- Content -->

    <!-- --------------------------------------------- -->

</body>

</html>