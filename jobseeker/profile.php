<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
        body {
            background-image: linear-gradient(rgb(107, 179, 247), rgb(245, 245, 242));
            margin: 0;
            font-family: Arial, sans-serif;
            background-size: cover;
        }
        h2{
            text-align: left;
            padding: 10px;
        }
        .container {
            max-width: 1100px;
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
            background-size: cover;
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
            padding: 20px;
            border-radius: 5px;
            font-size: 15px;
        }

        .sidebar p {
            margin: 10px 0;
        }
           .cells{
        width: 300px;
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 10px;
         
    }
        .table {
        display: table;
        width: 100%;
        border-collapse: collapse;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .row {
        display: table-row;
    }
    .cell {
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 10px;
        
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
        h2{
            font-size: 10px;
            text-align: center;
        }
        .menu-icon {
           font-size: 24px; 
           color: #ccccff; 
           cursor: pointer; 
        }
        
        }    
        </style>
    </head>
    <body>
        <div class="container">
        <div class="header">
            <h2><u>JOB<br>SEEKER'S<br>PLACE</u></h2>
        </div>
        <div class="menu">
            <span style="color:white;" class="menu-toggle" onclick="toggleMenu()">&#9776;</span>
            <nav>
                <a href="home1job.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="education.php">Education</a>
                <a href="jobseeker1.php">Search Job</a>
                <a href="walkin1.php">Walkin Interview</a>
                <a href="feedback1.php">Feedback</a>
                <a href="home1job.php">Logout</a>
            </nav>
        </div>
        <div class="content">
            <div class="main">
                
                 <h2><span class="menu-icon">&#9776;</span>&emsp;<u>Welcome</u></h2> 
        
  
                               <div class="table">
    <div class="row">
        
        <div class="cell"> <b>Name:</b></div>
        <div class="cells"></div>
        
    </div>
    <div class="row">
        
        <div class="cell"><b>Address:</b></div>
        <div class="cells"></div>
        
    </div>
                       <div class="row">
        
                           <div class="cell"><b>City:</b></div>
        <div class="cells"></div>
                       </div>        
                       
    <div class="row">
        
        <div class="cell"><b>Email:</b></div>
        <div class="cells"></div>
        
    </div>
                       <div class="row">
        
                           <div class="cell"><b>Mobile:</b></div>
        <div class="cells"></div>
        
    </div>
                       <div class="row">
        
                           <div class="cell"><b>Highest Qualification:</b></div>
        <div class="cells"></div>
        
    </div>
                       <div class="row">
       
                           <div class="cell"><b>Gender:</b></div>
        <div class="cells"></div>
        
    </div>
                        <div class="row">
       
                            <div class="cell"><b>Birth Date:</b></div>
        <div class="cells"></div>
        
    </div>
                        <div class="row">
       
                            <div class="cell"><b>Resume:</b></div>
        <div class="cells"></div>
        
    </div>
                       <div class="row">
       
        <div class="cell"></div>
        <div class="cells"></div>
        
    </div>
                       
                                                                
                       
                               </div>
               
               
                <p style="color: rgb(176, 176, 243);">&copy;2014 jobportal.com</p>
            </div>
            <div class="sidebar">
                <h3>Welcome</h3>
                <br>
                <h3 class="h"></h3>
                <br>
                <p></p>
                <h3 class="h"></h3>
                <br>
                <p></p>
                <h3 class="h"></h3>
                <br>
                <p></p>
                <br><br>
                <p style="margin-top: 80px; color: rgb(130, 130, 246);">Developed by Bsit Software</p>
            </div>
        </div>
    </div>
    </body>
</html>