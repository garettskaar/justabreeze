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
     echo "TEST1";
     require_once 'Dao.php';
     echo "TEST2";
     $dao = new Dao();
     echo "TEST3";
     $employees = $dao->getEmployees();
     echo "TEST4";
     echo "<table>";
     foreach ($employees as $employee) {
       echo "<tr><td>". $employee['employee_name'] . "</td><td>". $employee['phone_number'] . "</td><td>" . $employee['email'] . "</td></tr>";
     }
     echo "</table>";
     ?>
  </body>
</html>
