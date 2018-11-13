<?php 
use entities\User;

$root_path = '../../';

require_once $root_path.'init.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = test_input($_POST['firstname']);
    $last_name = test_input($_POST['lastname']);
    $user_name = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $dateCreated = date('Y-m-d H:i:s');
}

$user = (new User())
        ->setFirstName($first_name)
        ->setLastName($last_name)
        ->setUserName($user_name)
        ->setPassword($password)
        ->setDateCreated($dateCreated);

$em->persist($user);
$em->flush();







