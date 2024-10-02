<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        p
        {
            font-size: 19px;
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
        .p
        {
            margin-top: 200px;
        }

        .sidebar {
            flex: 1;
            padding: 20px;
            background-color: rgb(188, 221, 247);
            box-shadow: 0 0 10px rgba(21, 21, 21, 0.2) inset;
        }
       input
        {
            background-color: #f8f9bd;  
        }

        .sidebar h3 {
            background-color: rgb(176, 176, 248);
            padding: 10px;
            border-radius: 5px;
        }
        .a
        {
            background-color: #a9d3ee;
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
               <li><a href="home.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="Employer.php">Employer</a></li>
                <li><a href="job_seeker.php">Job Seeker</a></li>
                <li><a href="latest_news.php">Latest News</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </nav>
        </div>
        <div class="content">
            <div class="main">
                <p style="color: rgb(125, 125, 222);">You are here: <a href="#"><u>Home</u></a></p>
                 
                 <div class="AboutUs">
                    <h2><i class="fas fa-bars menu-icon"></i><u>About Us</u></h2>
                    <p>The Project Resume Processing System is an intranet application for the department 
                        of computer science for automating the process of resume preparation & applying
                        for jobs. This would be facilitating the students & experienced candidates to 
                        make and print their resumes in a proper format. In addition, it will be 
                        facilitating the higher management to search the students depending upon their
                        skill sets and other attributes.</p>
                    <p>This Portal is also designed for various employers who need to 
                        recruit employees in their organization. Employers can register themselves on the web portal and then
                        upload information about various job vacancies in their organization. Employers can view the
                        applications of Job Seekers and send call letters to the job seekers.</p>
                </div>
                 
                <p class="p" style="color: rgb(176, 176, 243);">&copy;2014 jobportal.com</p>
            </div>
            <div class="sidebar">
               <div class="contact">
                   <h2 class="a" id="con">Contact Us</h2>
                    <div class="lo">
                        <p>Job Portal</p>
                        <p>9650975241</p>
                        <p>info@jobportal.com</p>
                    </div>
                </div>
                <div class="login">
                    <h2 class="a" id="con">Login</h2>
                    <div class="lo">
                        <label for="username">User Name</label>
                        <input type="text" id="username" placeholder="User Name"><br><br>
                        <label for="password">Password</label>
                        &nbsp; &nbsp;<input type="password" id="password" placeholder="Password"><br><br>
                        <label for="usertype">User Type</label>
                       &nbsp;  <select id="usertype">
                            <option>User Type</option>
                            <option>Employer</option>
                            <option>Job Seeker</option>
                        </select>
                       <button>Login</button><br><br>
                        <a href="#" style="color:black;"><u>Forgot Password?</u></a>
                <p style="margin-top: 80px; color: rgb(130, 130, 246);">Developed by Bsit Software</p>
            </div>
        </div>
    </div>
</body>
</html>