<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>

<body>
    <div class="profile-info">
        <div class="title-info">
            <p> <i class="fa-solid fa-user" ></i> <?php echo "" . $row["name"]; ?></p>
            <p><i class="fa-solid fa-envelope" ></i> <?php echo "" . $row["email"]; ?></p>
            <p><i class="fa-solid fa-unlock" ></i> <?php echo "" . $row["type"]; ?></p>
        </div>

</body>

</html>