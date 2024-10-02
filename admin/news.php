<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin news</title>
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
         h1{
            background-color: rgb(212, 212, 248);
            padding:5px;
            font-size:25px; 
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
                <h1><a href="#">Welcome To Control Panel</a></h1>
                   <div>
                       
                       <h3 style="  background-color: rgb(176, 176, 248);">Create News</h3>
 
                   <table>
                   <tr>
                   <td><label for="news">News:</label></td>
                   <td><input type="text" id="news" name="news"></td>
                   </tr>
                   <tr>
                     <td><label for="date">News Date:</label></td>
                     <td><input type="text" id="news" name="news"></td>
                   </tr>
                   <tr>
                      <td colspan="2" style="text-align: center;">
                      <button type="submit">Submit</button>
                      </td>
                   </tr>
                   </table>


                </div>
                <div>
                    <h3 style="  background-color: rgb(176, 176, 248);">News List</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>News</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Register and Get JOB</td>
                                <td>2013-09-24</td>
                                <td><a href="#">Edit</a></td>
                                <td><a href="#">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>New Vacancies will be updated after Diwali</td>
                                <td>2013-10-31</td>
                                <td><a href="#">Edit</a></td>
                                <td><a href="#">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               
                <p>Total 2 Records</p>
                <p style="color: rgb(176, 176, 243);">&copy;2014 jobportal.com</p>
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