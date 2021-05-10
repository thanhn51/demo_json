<?php
    include_once "src/UserManager.php";
    include_once "src/User.php";

    $userManager = new UserManager("data.json");
    $users = $userManager->getAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach nguoi dung</title>
    <style>
        table {
            width: 500px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<a href="view/add.php">Them moi</a>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Ten</td>
        <td>Tuoi</td>
        <td>Dia chi</td>
        <td>SDT</td>
        <td></td>
    </tr>

    <?php foreach ($users as $key => $user): ?>
    <tr>
        <td><?php echo $key + 1 ?></td>
        <td><?php echo $user->getName() ?></td>
        <td><?php echo $user->getAge() ?></td>
        <td><?php echo $user->getAddress() ?></td>
        <td><?php echo $user->getPhone() ?></td>
        <td><a onclick="return confirm('Are you sure?')" href="action/delete.php?index=<?php echo $key ?>">Xoa</a></td>
    </tr>

    <?php endforeach; ?>
</table>
</body>
</html>

