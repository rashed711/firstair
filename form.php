<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="register.php" class="form" method="post">
            <input type="text" name="name" class="box" required placeholder="Enter name" autocomplete="on">
            <input type="email" name="email" class="box" required placeholder="Enter Email" autocomplete="on">
            <input type="password" name="password" class="box" required placeholder="Enter Password" autocomplete="off">
            <div class="btn_1">
            <input type="submit" name="updata" value="تعديل" id="submit">
            <input type="submit" name="delete" value="حذف" id="submit">
            </div>
        </form>
</body>
</html>