
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>

<body>
    <!-- menu -->
    <div class="menu">

        <ul>
            <li class="profile">
                <div class="img-box">
                    <img src="./img/background.jpg" alt="profile">
                </div>
                <div class="acc">
                    <h3><?php echo "" . $row["name"]; ?></h3>
                   
                </div>

            </li>
            <br>
            
            <li>
                <a class="active" href="index.php">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li>
                <a href="users.php">
                    <i class="fa-solid fa-user-group"></i>
                    <p>users</p>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-brands fa-product-hunt"></i>
                    <p>Products</p>
                </a>
            </li>

            <li>
                <a href="./php_fun/menu.php">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <p>invoices</p>
                </a>
            </li>

            <li class="logout">
                <a href="logout.php">
                    <i class="fas fa-sign-out"></i>
                    <p>logout</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- menu -->
</body>

</html>