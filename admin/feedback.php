<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Interviewer</title>
    <style>
        body {
            background-image: linear-gradient(rgb(107, 179, 247), rgb(245, 245, 242));
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h5{
            text-align: left;
            padding: 10px;
            background-color: rgb(212, 212, 248);
            margin-left: -20px;
            padding-left: 20px;
            color: rgb(14, 14, 145);
            font-size: 20px;

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
            background-color: rgb(249, 245, 245);
            border-radius: 10px;
            margin: 10px;
            margin-left: 10ipx;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .main {
            flex: 3;
            padding: 20px;
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

        .sidebar p {
            margin: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: rgb(14, 14, 145);
        }

        table, th, td {
            border: 2px solid #dddddd;
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
          .main{
            height: 100px;
          }
                
            
        }
    </style>
    <script>
        function toggleMenu() {
            var nav = document.querySelector('.menu nav');
            nav.classList.toggle('show');
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
               <a href="http://localhost/grouptask/admin/home.php">Home</a>
                <a href="http://localhost/grouptask/admin/user.php">User</a>
                <a href="http://localhost/grouptask/admin/manageseeker.php">Manage JobSeeker</a>
                <a href="http://localhost/grouptask/admin/manageemployeer.php">Manage Employer</a>
                <a href="http://localhost/grouptask/admin/news.php">News</a>
                <a href="http://localhost/grouptask/admin/feedback.php">Feedback</a>
                <a href="http://localhost/grouptask/admin/manageinterviewer.php">Manage Interviews</a>
                <a href="http://localhost/grouptask/admin/logout.php">Logout</a>
            </nav>
        </div>
        <div class="content">
            <div class="main">
                <p style="color: rgb(125, 125, 222);">You are here: <a href="#"><u>Home</u></a></p>
                <a href="#"><h5>Welcome To Control Panel</h5></a>
                <table>
                  <tr>
                   <th>ID</th>
                   <th>Job Seeker Name</th>
                   <th>Feedback</th>
                   <th>Date</th>
                   </tr>
                   <tr>
                    <td>5</td>
                    <td>Jalpa Prajapati</td>
                    <td>asdad</td>
                    <td>2018-09-13</td>
                   </tr>
                   <tr>
                    <td>6</td>

                    <td>Jalpa Prajapati</td>
                    <td>asd</td>
                    <td>2013-09-18</td>
                   </tr>
                   <tr>
                    <td>8</td>
                    <td>Jalpa Prajapati</td>
                    <td>asd</td>
                    <td>2013-09-22</td>
                   </tr>
                   <tr>
                    <td>7</td>
                    <td>Krunal prajapati</td>
                    <td>Thanks For Your Support.</td>
                    <td>2013-09-18</td>
                   </tr>
                   <tr>
                    <td colspan="4">Total 4 Records</td>
                   </tr>
                </table><br><br><br><br><br>
                <p style="color: rgb(176, 176, 243); font-size: 15px; ">&copy;2014 jobportal.com</p>
            </div>
            <div class="sidebar">
                <h3>Welcome</h3>
                <p>Administrator</p>
                <h3>Section</h3>
                <p>Details</p>
                <h3>Another Section</h3>
                <p>More details</p>
                <h3>Additional Info</h3>
                <p>Other details</p>
                <p style="margin-top: 80px; color: rgb(130, 130, 246);">Developed by Bsit Software</p>
            </div>
        </div>
    </div>
</body>
</html>