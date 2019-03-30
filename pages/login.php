<?php
session_start();
?>
<html>
  <head>
    <link rel="stylesheet" href="../styles.css">
  </head>
  <body>
    <h1>Login Page</h1>
    <form method="post" action="../backend/handler.php">
      <div><label for="password">Username:</label> <input type="text" id="username" name="username"></div>
      <div><label for="username">Password:</label> <input type="password" id="password" name="password"></div>
      <?php
      if (isset($_SESSION['message'])) {
        echo "<div id='message'>" . $_SESSION['message'] . "</div>";
      }
      unset($_SESSION['message']);
      ?>
      <div><input type="submit" value="Login"></div>
    </form>
    <a href="add_employee.php">Add New Employee</a>
  </body>
</html>
