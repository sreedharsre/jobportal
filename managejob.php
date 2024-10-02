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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="employercss.css">
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
            .main-content{
                flex-direction:column;
                flex:100%;
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
        td input[type="text"],
            td input[type="number"],
            td select,
            td textarea
            {
                width: calc(100% - 20px);
             
                height: 35px;
            }
            #co th{
                background: #36454F;
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

        function validateForm() {
            var jobTitle = document.getElementById("job-title").value.trim();
            var totalVacancy = document.getElementById("total-vacancy").value.trim();
            var qualification = document.getElementById("qualification").value.trim();
            var other = document.getElementById("other").value.trim();
            var description = document.getElementById("description").value.trim();

            if (jobTitle === "") {
                alert("Job Title is required.");
                return false;
            }

            if (totalVacancy === "" || !/^\d+$/.test(totalVacancy) || parseInt(totalVacancy) <= 0) {
                alert("Total Vacancy must be a positive number.");
                return false;
            }

            if (qualification === "") {
                alert("Qualification is required.");
                return false;
            }

            if (other === "") {
                alert("Other field is required.");
                return false;
            }

            if (description === "") {
                alert("Description is required.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2><u>EMPLOYER'S<br></u>&ensp;&ensp;&ensp;<u>PLACE</u></h2>
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
                    <h2 style="background-color: lightskyblue;">Manage Job</h2>
                    <div class="form-container">
                       
                        <form action="submit_job.php" method="post" onsubmit="return validateForm()">
                            <table >
                                <tr>
                                    <td><label for="job-title">Job Title:</label></td>
                                    <td><input type="text" id="job-title" name="job-title"></td>
                                </tr>
                                <tr>
                                    <td><label for="total-vacancy">Total Vacancy:</label></td>
                                    <td><input type="number" id="total-vacancy" name="total-vacancy"></td>
                                </tr>
                                <tr>
                                    <td><label for="qualification">Qualification:</label></td>
                                    <td>
                                        <select id="qualification" name="qualification">
                                            <option value="">Select Qualification</option>
                                            <option value="bachelor">Bachelor's Degree</option>
                                            <option value="master">Master's Degree</option>
                                            <option value="phd">PhD</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="other">Other:</label></td>
                                    <td><input type="text" id="other" name="other"></td>
                                </tr>
                                <tr>
                                    <td><label for="description">Description:</label></td>
                                    <td><textarea id="description" name="description"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <button type="submit">Submit</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <h2 style="background-color: lightskyblue;">Posted Job</h2>
                    <div class="form-container">
                        <div class="table-responsive">
                        <table>
                            <thead>
                                <tr id="co">
                                    <th>Job Title</th>
                                    <th>Total Vacancy</th>
                                    <th>Qualification</th>
                                    <th>Other</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_SESSION['delete'])) : ?>
                                    <h3>
                                        <?php 
                                            echo $_SESSION['delete'];
                                            unset($_SESSION['delete']);
                                        ?>
                                    </h3>
                                <?php endif ?>
                                <?php
                                    include 'db_connect.php';

                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "SELECT id, jobtitle, totalvacancy, qualification, other, description FROM managejob";
                                    $result = $conn->query($sql);

                                    if ($result === false) {
                                        die("Error: " . $conn->error);
                                    }

                                    $num_rows = $result->num_rows;
                                    if ($num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . htmlspecialchars($row["jobtitle"]) . "</td>";
                                            echo "<td>" . htmlspecialchars($row["totalvacancy"]) . "</td>";
                                            echo "<td>" . htmlspecialchars($row["qualification"]) . "</td>";
                                            echo "<td>" . htmlspecialchars($row["other"]) . "</td>";
                                            echo "<td>" . htmlspecialchars($row["description"]) . "</td>";
                                            echo "<td><a href='delete_job.php?id=" . $row["id"] . "'>Delete</a></td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='6'>No jobs posted</td></tr>";
                                    }
                                    $conn->close();
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" style="text-align: right;">Number of Records: <?php echo $num_rows; ?></td>
                                </tr>
                            </tfoot>
                        </table>
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
