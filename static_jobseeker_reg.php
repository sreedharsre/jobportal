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
        h2{
            text-align: left;
            padding: 10px;
        }
         form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="file"],
        input[type="password"] {
            width: 80%;
            padding: 6px;
            box-sizing: border-box;
            border-radius: 6px;
            
        }
        input[type="submit"] {
            width: 80%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .container {
            width: 1000px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
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
        .p
        {
            margin-top: 100px;
        }
         input
        {
            background-color: #f8f9bd;  
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
                <a href="http://localhost/STATIC_PAGES/main_page.php">Home</a>
                <a href="http://localhost/STATIC_PAGES/about_us.php">About us</a>
                <a href="http://localhost/STATIC_PAGES/emp_static.php">Employer</a>
                <a href="http://localhost/STATIC_PAGES/jobseeker_login.php">Job Seeker</a>
                <a href="http://localhost/STATIC_PAGES/latest_news.php">Latest News</a>
                <a href="http://localhost/STATIC_PAGES/contact_us.php">Contact Us</a>
            </nav>
        </div>
        <div class="content">
            <div class="main">
                 
                <h2><u>Job Seeker Registration</u></h2>
                
                <form name="reg" method="POST" onsubmit="return validationjobseeker()" action="reg.php">
    <label for="userid">User ID:</label>
    <input type="text" id="userid" name="userid" placeholder="User ID" ><br><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Username" ><br><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" placeholder="Address" ><br><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" placeholder="City" ><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email" ><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Phone Number"><br><br>

    <label for="qualification">Highest Qualification:</label>
    <input type="text" id="qualification" name="qualification" placeholder="Highest Qualification"><br><br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" >
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="birth">Date of Birth:</label>
    <input type="date" id="birth" name="birth" placeholder="Date of Birth"><br><br>

    <label for="resume">Resume:</label>
    <input type="file" id="resume" name="resume" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password"><br><br>

    <label for="repassword">Re-enter Password:</label>
    <input type="password" id="repassword" name="repassword" placeholder="Re-enter Password" ><br><br>

    <button type="submit">Submit</button>
</form>

                
          
                
                <p class="p" style="color: rgb(176, 176, 243);">&copy;2014 jobportal.com</p>
            </div>
            <aside class="sidebar">
                    <h3>Contact Us</h3>
                    <p>Job Portal</p>
                    <p>9160752841</p>
                    <p>info@jobportal.com</p>
                    <h3>Login</h3>
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
                    <br><a href="#forgot">Forgot Password?</a>
                </aside>
                
            </div>
        </div>
    </div>
</body>
</html>