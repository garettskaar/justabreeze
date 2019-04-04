
<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  require_once 'Dao.php';
  $dao = new Dao();
  $login = $dao->login($username, $password);
  if ($password_in_the_database != $password) {
    $_SESSION['message'] = "Error, the password was incorrect.";
    header("Location: ../pages/login.php");
    exit();
  } else {
    $_SESSION['logged_in'] = true;
    header("Location: index.html");
  }
?>
