<?php
session_start();
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../styles.css">
  </head>
  <body>
    <h1>Login</h1>

    <form method="post" action="../backend/handler.php">
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" id="username" name="username" required>
        <label for="password"><b>Password</b></label>
        <input type="password" id="password" name="password" required>
        <?php
          if (isset($_SESSION['message'])) {
            echo "<div id='message'>" . $_SESSION['message'] . "</div>";
          }
          unset($_SESSION['message']);
        ?>
        <button type="submit">Login</button>
      </div>
    </form>
    <a href="add_employee.php">Add New Employee</a>
  </body>
</html>
