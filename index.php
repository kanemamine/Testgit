<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="post" action="" >
        <input type="text" name="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
if ($_POST) {
    $data = $_POST['password'];
    echo $data;
}?>