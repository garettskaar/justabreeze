<?php
session_start();

$employee_name = $_POST['employee_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$restaurant = $_POST['restaurant'];
$position = $_POST['position'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$valid = true;
$messages = array();
if (empty($employee_name)) {
    $messages[] = "Please enter employee's name";
    $valid = false;
}
if (40 < strlen($employee_name)){
  $messages[] = "Name is too long, abbreviate first or last name please.";
  $valid = false;
}
if (empty($phone)) {
    $messages[] = "Please enter employee's phone number";
    $valid = false;
}
if (13 < strlen($phone)){
  $messages[] = "Double check the phone number, its too long";
  $valid = false;
}
if (empty($email)) {
    $messages[] = "Please enter employee's email";
    $valid = false;
}
if (empty($username)) {
  $messages[] = "Please enter employee's username";
  $valid = false;
}
if (20 < strlen($username)){
  $messages[] = "Username is too long, first name initial followed by last name please. (e.g. jsmith)";
  $valid = false;
}
if ($password1 != $password2) {
  $messages[] = "Passwords dont match";
  $valid = false;
}
if (!$valid) {
    $_SESSION['messages'] = $messages;
    $_SESSION['form_input'] = $_POST;
    header("Location: ../pages/add_employee.php");
    exit();
}

require_once 'Dao.php';
$dao = new Dao();
$dao->addEmployee($employee_name, $phone, $email, $restaurant, $position, $username, $password1);
echo "Employee successfully added to schedules...";
header("Location: ../pages/login.php");
exit;

?>
