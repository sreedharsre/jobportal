<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:home.php");
    exit();
}
$userid=$_SESSION['username'];
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>manage walkin</title>
        <style>
            body {
                background-image: linear-gradient(rgb(107, 179, 247), rgb(245, 245, 242));
                margin: 0;
                font-family: Arial, sans-serif;
            }
            h2{
                text-align: left;
                padding: 10px;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }

            .header, .footer {
                background-color: white;
                border-radius: 15px;
                margin-bottom: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .header {
                padding: 20px;
                text-align: center;
                background-image: url('https://static4.depositphotos.com/1014905/347/i/450/depositphotos_3477954-stock-photo-abstract-blue-background-wave-veil.jpg');
                color: white;
                border-radius: 15px 15px 0 0;
            }

            .menu {
                background-color: rgb(24, 24, 125);
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .menu a {
                color: white;
                text-decoration: none;
                margin-right: 15px;
                border: 1px solid rgb(5, 5, 96);
                background-image: linear-gradient(rgb(41, 55, 135), rgb(4, 4, 96));
                border-radius: 8px;
                padding: 5px 15px;
            }

            .menu-toggle {
                display: none;
                cursor: pointer;
            }

            .menu nav {
                display: flex;
            }

            .content {
                display: flex;
                flex-wrap: wrap;
            }

            .main, .sidebar {
                background-color: white;
                border-radius: 10px;
                margin: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .main {
                flex: 3;
                padding: 20px;
            }
            .a
            {
                background-color: #c0e4f0;
                padding: 5px;

            }
            .p
            {
                margin-top: 300px;
            }

            .sidebar {
                flex: 1;
                padding: 20px;
                background-color: rgb(188, 221, 247);
                box-shadow: 0 0 10px rgba(21, 21, 21, 0.2) inset;
            }

            .sidebar h3 {
                background-color: rgb(176, 176, 248);
                padding: 10px;
                border-radius: 5px;
            }
            select
            {
                width: 300px;
                font-weight: bold;
            }

            .sidebar p {
                margin: 10px 0;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            table, th, td {
                border: 1px solid #dddddd;
                padding: 10px;
                font-size: 15px;
            }

            table th {
                background: #f4f4f4;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            td input[type="text"],
            td input[type="number"],
            td select,
            td textarea,
            td input[type="date"],
            td input[type="time"] {
                width: calc(100% - 20px); 
                box-sizing: border-box;
            }

            @media (max-width: 768px) {
                .menu nav {
                    display: none;
                    flex-direction: column;
                    width: 100%;
                }
                h2{
                    text-align: center;
                }
                .menu nav.show {
                    display: flex;
                }

                .menu a {
                    margin-bottom: 10px;
                }

                .menu-toggle {
                    display: block;
                }

                .content {
                    flex-direction: column;
                    width: 100px;
                    margin-left: -10px;
                }

                .main, .sidebar {
                    flex: 1;
                    width:300%;

                }
                table, th, td {
                    border: 1px solid #dddddd;
                    padding: 10px;
                    font-size: 7px;
                }
                .second {
                    width: 100%;
                    overflow-x: auto; 
                }

                .table-responsive {
                    overflow-y: hidden;
                    border-collapse: collapse;
                    display: block;
                    width: 100%;
                }

                .table-responsive table {
                    width: 100%;
                    border-collapse: collapse;
                }

                .table-responsive th,
                .table-responsive td {
                    padding: 8px; 
                    text-align: center;
                }

                .table-responsive th {
                    background: #f4f4f4;
                }

                .table-responsive td input[type="text"],
                .table-responsive td input[type="number"],
                .table-responsive td select,
                .table-responsive td textarea,
                .table-responsive td input[type="date"],
                .table-responsive td input[type="time"] {
                    width: 100%;
                }
            }
            #welcome{
                font-size: 25px;
                color:#DC143C;
            }
        </style>
        <script>
            function toggleMenu() {
            var nav = document.querySelector('.menu nav');
                    nav.classList.toggle('show');
            }
        </script>
        <script>
            function validateForm() {
            let jobTitle = document.forms["walkinForm"]["jobTitle"].value;
                    let totalVacancy = document.forms["walkinForm"]["totalVacancy"].value;
                    let qualification = document.forms["walkinForm"]["qualification"].value;
                    let description = document.forms["walkinForm"]["description"].value;
                    let interviewDate = document.forms["walkinForm"]["interviewDate"].value;
                    let interviewTime = document.forms["walkinForm"]["interviewTime"].value;
                    let other = document.forms["walkinForm"]["other"].value;
                    if (jobTitle == "") {
            alert("Job title must be filled out");
                    return false;
            }
            if (totalVacancy == "") {
            alert("Total vacancy must be filled out");
                    return false;
            }
            else if (totalVacancy < 0){
            alert("vacancy only given positive numbers");
                    return false;
            }
            if (qualification == "") {
            alert("Qualification must be selected");
                    return false;
            }
            if (description == "") {
            alert("Description must be filled out");
                    return false;
            }
            if (other == "") {
            alert("Other must be filled out");
                    return false;
            }
            if (interviewDate == "") {
            alert("Interview date must be selected");
                    return false;
            }
            let today = new Date();
                    let selectedDate = new Date(interviewDate);
                    if (selectedDate <= today) {
            alert("Interview date must be in the future");
                    return false;
            }
            if (interviewTime == "") {
            alert("Interview time must be selected");
                    return false;
            }
            return true;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2><u>JOB PORTAL</u></h2>
            </div>
            <div class="menu">
                <span style="color:white;" class="menu-toggle" onclick="toggleMenu()">&#9776;</span>
                <nav>
                    <a href="home.php">Home</a>
                    <a href="profile.php">Profile</a>
                    <a href="managejob.php">Manage Job</a>
                    <a href="managewalkin.php">Manage Walkin</a>
                    <a href="application.php">Application</a>
                    <a href="logout_server.php">Logout</a>
                </nav>
            </div>
            <div class="content">
                <div class="main">
                    <p style="color: rgb(125, 125, 222);"> <a href="#"><u></u></a></p>
                    <h2 class="a"><u>Welcome To Control Panel</u></h2>
                    <div class="main-content">
<!--                        <h2> <img id="ic" src="ico_list.gif"><i class="fas fa-bars menu-icon"></i>&ensp;&ensp;<u>Welcome To Control Panel</u></h2><br><br>-->
                        <div class="main-contents">
                            <h2 style="background:lightskyblue">Manage Walkin</h2>

                            <form name="walkinForm" action="submit_form_walkin.php" onsubmit="return validateForm()" method="post">
                                <table>
                                    <tr>
                                        <th>Job Title</th>
                                        <td><input type="text" name="jobTitle"></td>
                                    </tr>
                                    <tr>
                                        <th>Total Vacancy</th>
                                        <td><input type="number" name="totalVacancy"></td>
                                    </tr>
                                    <tr>
                                        <th>Qualification</th>
                                        <td>
                                            <select name="qualification">
                                                <option value="">Select</option>
                                                <option value="Bachelors">Bachelors</option>
                                                <option value="Masters">Masters</option>
                                                <option value="PhD">PhD</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Other</th>
                                        <td><input type="text" name="other"></td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td><textarea name="description"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th>Interview Date</th>
                                        <td><input type="date" name="interviewDate"></td>
                                    </tr>
                                    <tr>
                                        <th>Interview Time</th>
                                        <td><input type="time" name="interviewTime"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: center;">
                                            <button type="submit">Submit</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>


                            <h2 style="background:lightskyblue">Posted Walkin</h2>
                            <div class="table-responsive">
                                <?php
                                include 'db_connect.php';

                                $sql = "SELECT * FROM managewalkin";
                                $result = $conn->query($sql);
                                $num_rows = $result->num_rows;

                                if ($num_rows > 0) {
                                    echo "<table>";
                                    echo "<tr><th>ID</th><th>Job Title</th><th>Total Vacancy</th><th>Qualification</th><th>Other</th><th>Description</th><th>Interview Date</th><th>Interview Time</th><th>Action</th></tr>";

                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        echo "<td>" . $row["jobtitle"] . "</td>";
                                        echo "<td>" . $row["vacancy"] . "</td>";
                                        echo "<td>" . $row["qualification"] . "</td>";
                                        echo "<td>" . $row["other"] . "</td>";
                                        echo "<td>" . $row["description"] . "</td>";
                                        echo "<td>" . $row["interviewdate"] . "</td>";
                                        echo "<td>" . $row["interviewtime"] . "</td>";
                                        echo "<td><a href='submit_form_walkin.php?delete=" . $row["id"] . "'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    echo "<tr><td colspan='9' style='text-align: center;'>No of records: " . $num_rows . "</td></tr>";
                                    echo "</table>";
                                } else {
                                    echo "No walk-ins posted yet.";
                                }

                                $conn->close();
                                ?>
                            </div>
                        </div>
                    </div>


                    <p class="p" style="color: rgb(176, 176, 243);">&copy;2014 jobportal.com</p>
                </div>
                <div class="sidebar">
                    <h3><span id="welcome">welcome</span></h3>
                <p><?php echo htmlspecialchars($userid); ?></p>
                    <h3>.</h3>
                    <p>.</p>
                    <h3>.</h3>
                    <p>.</p>
                    <h3>.</h3>
                    <p>.</p>
                    <p style="margin-top: 80px; color: rgb(130, 130, 246);">Developed by Bsit Software</p>
                </div>
            </div>
        </div>
    </body>
</html>