<?php include 'profile_server.php';?>
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
        h2 {
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
        .a {
            background-color: #c0e4f0;
            padding: 5px;
        }
        .p {
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
        select {
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
            h2 {
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
            .main-content {
                flex-direction: column;
                flex: 100%;
            }
            .content {
                flex-direction: column;
                width: 100px;
                margin-left: -10px;
            }
            .main, .sidebar {
                flex: 1;
                width: 300%;
            }
            table, th, td {
                border: 1px solid #dddddd;
                padding: 10px;
                font-size: 7px;
            }
        }
        #welcome {
            font-size: 25px;
            color: #DC143C;
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
                    <table>
                        <tr>
                            <th>Field</th>
                            <th>Value</th>
                        </tr>
                        <?php if ($userDetails): ?>
                            <?php foreach ($userDetails as $field => $value): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($field); ?></td>
                                    <td><?php echo htmlspecialchars($value); ?></td>
                                </tr>                                
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="2">No details found.</td>
                            </tr>
                        <?php endif; ?>
                    </table>
                    <br><br>
                    <a href="http://localhost/job/edit_profile.php"><button>Edit</button></a>   
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
