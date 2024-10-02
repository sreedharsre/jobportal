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
    <title>Manage Interviewer</title>
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
        .n{
           margin-top: 200px;
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
        }
    </style>
    <script src="validation.js">
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
                <a href="shome.php">Home</a>
                    <a href="sabout_us.php">About Us</a>
                    <a href="semployer.php">Employer</a>
                    <a href="sjobseeker.php">Job Seeker</a>
                    <a href="slatestnews.php">Latest News</a>
                    <a href="scontact.php">Contact Us</a>
            </nav>
        </div>
        <div class="content">
            <div class="main">
                <section>
            
            <h3 style="  background-color: rgb(176, 176, 248);"><u>Our Employer</u></h3>
        <table>
            <tr>
                <th>company name</th>
                <th>Contact person</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>Tcs private limited</td>
                <td>Mr.Mohan Shah</td>
                <td>mohan@gmail.com</td>
            </tr>
            <tr>
                <td>Wipro infotech</td>
                <td>Mr.sunil Pandya</td>
                <td>sunil@wipro.com</td>
            </tr>
            <tr>
                <td>Solusoft Pvt limite</td>
                <td>Mr.Nirav Soni</td>
                <td>nirav@gmail.com</td>
            </tr>
            <tr>
                <td>Info Matrics</td>
                <td>Mr.Narayan</td>
                <td>narayan@yahoo.com</td>
            </tr>
             
            
            
        </table><br><br>
        &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="#">New Employer?<a href="static_employer_reg.php"> Register Here</a></a>
        </section>
                <div class="n">
                <p style="color: rgb(176, 176, 243);">&copy;2014 jobportal.com</p>
                </div>
            </div>
            <div class="sidebar">
                <h3>Contact us</h3>
                <p>Job Portal</p> 
                <p>9650975241</p>
                <p>info@jobportal.com</p>
                  <form onsubmit="return validateLoginForm()" action="login_server.php" method="post">
                    <h3>Login</h3>
                    <?php  if (isset($_SESSION['umsg'])) : ?>
			<h3>
				<?php 
					echo $_SESSION['umsg'];
					unset($_SESSION['umsg']);
				?>
			</h3>
	            <?php endif ?>
                    <?php  if (isset($_SESSION['upmsg'])) : ?>
			<h3>
				<?php 
					echo $_SESSION['upmsg'];
					unset($_SESSION['upmsg']);
				?>
			</h3>
	            <?php endif ?>
                    User Name:&ensp;<input type="text" id="login-username" name="un"><br><br>
                    Password:&ensp;&ensp;<input type="password" id="login-password" name="pas">
                    UserType <br><br>
                    <select id="user-type" name="type">
                        <option value="">Select</option>
                        <option value="admin">Admin</option>
                        <option value="Employer">Employer</option>
                        <option value="Job Seeker">Job Seeker</option>
                    </select><br><br>
                    <button type="submit" name="login_emp">Login</button><br>
                    <a href="#" style="color: black;">Forgot Password?</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>