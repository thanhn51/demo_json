<?php
include_once "../src/UserManager.php";
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];

$item = [
    "name" => $name,
    "age" => $age,
    "address" => $address,
    "phone" => $phone
];
$userManager = new UserManager('../data.json');
$userManager->addUser($item);
header('Location: ../index.php');
