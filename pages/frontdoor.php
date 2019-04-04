<?php
session_start();
?>
<html>
    <head>
        <title>Just A Breeze</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        <div>
            <h1>Frontdoor</h1>
            <ul>
                <li><a href="brickyard.php">Brickyard</a></li>
                <li><a href="brixx.php">Brixx</a></li>
                <li><a class="active" href="frontdoor.php">Frontdoor</a></li>
                <li><a href="legends.php">Legends</a></li>
                <li><a href="reef.php">Reef</a></li>
                <?php
                    if($_SESSION['logged_in'] == true){
                        echo "<li id =\"login\"><a href=\"../backend/logout.php\">Logout</a></li>";
                        echo "<li id =\"login\"><a href=\"add_employee.php\">Add Employee</a></li>";
                    }
                    else{
                        echo "<li id =\"login\"><a href=\"login.php\">Login</a></li>";
                    }
                ?>
                <li id ="login"><a href="contact_list.php">Contact List</a></li>
            </ul>
        </div>
        <div>
            <table>
                <th>Schedule</th>
                <tr>
                    <td>Monday</td>
                    <td>Tuesday</td>
                    <td>Wednesday</td>
                    <td>Thursday</td>
                    <td>Friday</td>
                    <td>Saturday</td>
                </tr>
            </table>
        </div>
    </body>
</html>
