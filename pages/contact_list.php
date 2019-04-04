<?php
session_start();
?>

<html>
  <head>
    <link rel="stylesheet" href="forms.css">
  </head>
  <body>
    <h1>Employee Contact List</h1>
     <?php
     require_once "../backend/Dao.php";
     $dao = new Dao();
     $employees = $dao->getEmployees();
     echo "<table>";
     foreach ($employees as $employee) {
       echo "<tr><td>". $employee['employee_name'] . "</td><td>". $employee['phone_number'] . "</td><td>" . $employee['email'] . "</td></tr>";
     }
     echo "</table>";
     ?>
  </body>
</html>
