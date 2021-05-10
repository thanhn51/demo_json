<?php
include_once "../src/UserManager.php";
$index = $_REQUEST['index'];
$userManager = new UserManager('../data.json');
$userManager->deleteUser($index);
header('Location: ../index.php');
