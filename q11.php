<?php
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["submit"])) {
    $color = $_POST["select"] ?? '';

    setcookie("bg_color", $color, time() + 5);
    header('Location:'. $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color</title>
</head>

<body style="background-color: <?= isset($_COOKIE['bg_color']) ? $_COOKIE['bg_color'] : 'white'; ?>;">
    <form action="" method="post">
        <select name="select">
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
        </select>
        <button name="submit" type="submit">Submit</button>
    </form>
</body>

</html>