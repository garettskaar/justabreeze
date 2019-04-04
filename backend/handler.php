
<?php
  session_start();

  $input_username = $_POST['username'];
  $input_password = $_POST['password'];

  require_once 'Dao.php';
  $dao = new Dao();
  $login = $dao->login($input_username);

  if ($login['password'] != $input_password) {
    $_SESSION['message'] = "Error, the password was incorrect.";
    header("Location: ../pages/login.php");
    exit();
  } 
  else if($login['user_name'] != $input_username){
    $_SESSION['message'] = "Error, the user name was incorrect.";
    header("Location: ../pages/login.php");
    exit();
  } 
  else {
    $_SESSION['logged_in'] = true;
    header("Location: ../index.php");
  }
?>
