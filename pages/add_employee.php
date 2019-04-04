<?php
session_start();
?>

<html>
  <head>
    <link rel="stylesheet" href="forms.css">
  </head>
  <body>
    <h1>Add Employee</h1>
    <form method="post" action="../backend/add_employee_handler.php">
        <div><label for="employee_name"><b>Employee Name</b></label>
            <input value="<?php echo isset($_SESSION['form_input']['employee_name']) ? $_SESSION['form_input']['employee_name'] : ''; ?>" type="text" id="employee_name" name="employee_name">
        </div>
        <div><label for="phone"><b>Phone Number</b></label>
            <input value="<?php echo isset($_SESSION['form_input']['phone']) ? $_SESSION['form_input']['phone'] : ''; ?>" type="text" id="phone" name="phone">
        </div>
        <div><label for="email"><b>Email:</label>
            <input value="<?php echo isset($_SESSION['form_input']['email']) ? $_SESSION['form_input']['email'] : ''; ?>" type="text" id="email" name="email">
        </div>
        <div><label for="restaurant"><b>Restaurant</b></label>
            <select name="restaurant">
                <option value="brickyard">Brickyard</option>
                <option value="brixx">Brixx</option>
                <option value="frontdoor">Frontdoor</option>
                <option value="legends">Legends</option>
                <option value="reef">Reef</option>
            </select>
        </div>
        <div><label for="position"><b>Postition</b></label>
            <select name="position">
                <option value="server">Server</option>
                <option value="bartender">Bartender</option>
                <option value="host">Host/Hostess</option>
                <option value="backwaiter">Backwaiter</option>
                <option value="manager">Manager</option>
            </select>
        </div>
        <div><label for="username"><b>Username</b></label>
            <input value="<?php echo isset($_SESSION['form_input']['username']) ? $_SESSION['form_input']['username'] : ''; ?>" type="text" id="username" name="username">
        </div>
        <div><label for="password1"><b>Password</b></label> <input type="password" id="password1" name="password1"></div>
        <div><label for="password2"><b>Retype Password</b></label> <input type="password" id="password2" name="password2"></div>
      <?php
      if (isset($_SESSION['messages'])) {
        foreach($_SESSION['messages'] as $message) {
          echo "<div class='message bad'>{$message}</div>";
        }
      }
      unset($_SESSION['message']);
      unset($_SESSION['form_input']);
      ?>
      <button type="submit">Add Employee</button>
    </form>
  </body>
</html>
