<?php
session_start();
?>
<html>
    <head>
        <title>Just A Breeze</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        <h1>Just A Breeze</h1>
        <div>
            <ul>
                <li><a href="pages/brickyard.php">Brickyard</a></li>
                <li><a href="pages/brixx.php">Brixx</a></li>
                <li><a href="pages/rontdoor.php">Frontdoor</a></li>
                <li><a href="pages/legends.php">Legends</a></li>
                <li><a href="pages/reef.php">Reef</a></li>
                <?php
                    if($_SESSION['logged_in'] == true){
                        echo "<li id =\"login\"><a href=\"backend/logout.php\">Logout</a></li>";
                        echo "<li id =\"login\"><a href=\"pages/add_employee.php\">Add Employee</a></li>";
                    }
                    else{
                        echo "<li id =\"login\"><a href=\"pages/login.php\">Login</a></li>";
                    }
                ?>
                <li id ="login"><a href="pages/contact_list.php">Contact List</a></li>
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