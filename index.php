<!-- --------------------------------------------- -->
<!-- php connection -->
<?php include("./php_fun/connection.php"); ?>
<!-- <?php include("./php_fun/getUserData.php"); ?> -->


<!-- php connection -->

<!-- php query -->

<?php

$query = mysqli_query($conn,  "SELECT * FROM `users` WHERE `created-by` = 'rashed1711@gmail.com'");
$num_rows = mysqli_num_rows($query);
?>
<!-- php query -->


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
            <p>Dashboard</p>
            <i class="fas fa-chart-bar"></i>
        </div>

        <div class="data-info">
            <div class="data-box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>users</p>
                    <span><?php echo $num_rows ?></span>
                </div>
            </div>

            <div class="data-box">
                <i class="fas fa-pen"></i>
                <div class="data">
                    <p>Invoices</p>
                    <span>90</span>
                </div>
            </div>

            <div class="data-box">
                <i class="fas fa-table"></i>
                <div class="data">
                    <p>Products</p>
                    <span>35</span>
                </div>
            </div>

            <div class="data-box">
                <i class="fa-solid fa-bullseye"></i>
                <div class="data">
                    <p>Target</p>
                    <span>50,00</span>
                </div>
            </div>
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

                while ($data = mysqli_fetch_array($query)) {
                
            
                ?>

                    <tr>
                        <td> <?php echo $data['id'] ?></td>
                        <td> <?php echo $data['name'] ?></td>
                        <td> <?php echo $data['email'] ?></td>
                        <td> <?php echo $data['type'] ?></td>
                        
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