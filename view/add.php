<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them moi</title>
</head>
<body>
<form action="../action/create.php" method="post">
    <table>
        <tr>
            <td>Ten</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Tuoi</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>Dia chi</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>SDT</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Luu</button></td>
        </tr>
    </table>
</form>
</body>
</html>
