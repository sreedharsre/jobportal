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
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E0E8F8;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 1000px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: white;
            color: white;
            padding: 5px ;
            text-align: left;
            height: 50px;
        }
        .b{
                  margin-right: 900px;
                   margin-top: -900px;
             
                  background-color: #003366;
                  color: white;
                  padding: 5px;
                  border-radius: 15px;
                  display: inline-block;
             
        }
        .nav {
            background-color: #0074D9;
            overflow: hidden;
        }
        .nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .nav a:hover {
            background-color: orangered;
        }
        .content {
            display: flex;
            padding: 20px;
        }
        .main {
            flex: 70%;
            padding: 20px;
        }
       
            .header img {
                    width: 80%;
                    margin-left: 160px;
                    border-radius: 10px 10px 0 0;
               }  
        
        .sidebar {
            flex: 30%;
            background-color: white;
            padding: 20px;
            box-sizing: border-box;
        }
        .footer {
            background-color: graytext;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
        }
        .welcome {
            background-color: #F2F2F2;
            padding: 20px;
            margin-bottom: 20px;
        }
        .welcome h2 {
            margin-top: 0;
        }
        .contact, .login {
            background-color: darkblue;
            color: white;
            padding: 20px;
            margin-bottom: 20px;
        }
        .login input {
            display: block; 
            width: calc(100% - 20px);
            padding: 8px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
        }
        .login button {
            background-color: #001F3F;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login button:hover {
            background-color: #005BB5;
        }
        @media (max-width: 410px) {
    .nav a {
        float: none;
        width: 100%;
    }
    .content {
        flex-direction: column;
    }
    .main, .sidebar {
        flex: 100%;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy-eDvKoypxUD8Mykt2SbBI7oxmHthAeG4xQ&s" alt="Job Portal Logo"    height="100px" width="100px">
           
        </div>
        <div class="b">
             <h1>JobPortal</h1>
        </div>
        <div class="nav">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Employer</a>
            <a href="jobseeker.php">Job Seeker</a>
            <a href="#">Latest News</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="content">
            <div class="main">
                <div class="welcome">
                    <h2><u>Welcome To</u></h2>
                    <p><b>W</b>elcome to the Project as an internal application for the department of computer science for automating the process of resume preparation & applying for jobs.
                        <br>This would be facilitating the students in experienced candidates to make and print resumes in a proper format. 
                        <br>In addition, it will be facilitating the higher management to students depending upon their skill set and other parameters.</p>
                    <p>The basic requirement is to have a centralized repository of all stakeholders,<br>
                        in the organizations that a student with a particular skill set is already absorbed in the event of urgent requirement.
                        <br>And also scheduling for jobs as per the jobs is possible.</p>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq0GTWQHdYAiKBfzlMlUq-hMKTvAjBiS42DQ&s" alt="Mouse Image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_Ak78e0joxSqwffU1ohhi0d5bLXHVkvblRQ&s" alt="Handshake Image">
                </div>
            </div>
            <div class="sidebar">
                <div class="contact">
                    <h2>Contact Us</h2>
                    <p>Job Portal</p>
                    <p>9650975241</p>
                    <p>info@jobportal.com</p>
                </div>
                <div class="login">
                    <h2>Login</h2>
                    User Name<input type="text" placeholder="User Name">
                    Password<input type="password" placeholder="Password">
                    User Type <br><br><select>
                        <option>User Type</option>
                        <option>Employer</option>
                        <option>Job Seeker</option>
                    </select><br>
                    
                    <button>Login</button><br>
                    <a href="#" style="color: white;">Forgot Password?</a>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>&copy; 2014 jobportal.com  ||
            Developed by Naveen</p>
        </div>
    </div>
</body>
</html>