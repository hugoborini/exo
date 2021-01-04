<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <form class="form"  method="post" action="script/login-script.php">
        <input placeholder="username" type="text" name="username">
        <input placeholder="password" type="password" name="password">
        <input type="submit">
    </form>
    <?php if($_GET["error"] == 1) : ?>
        <p>username exite ap mglllll </p>
    <?php endif?>
    <?php if($_GET["error"] == 2) : ?>
        <p>mot de pass pa bon mon ti pote </p>
    <?php endif?>
</body>
</html>