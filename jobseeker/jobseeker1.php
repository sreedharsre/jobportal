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
        .row {
        display: table-row;
    }
      .cell1 {
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 10px;
        width: 1000px;
    }
    .cell {
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 10px;
        
    }
     .sno1{
        width: 2000px;
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 10px;
        
    }
    .sno{
        width: 10px;
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 10px;
        
    }
    .cell2{
        width: 300px;
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 00px;
         
    }
    .cells{
        width: 300px;
        display: table-cell;
        border: 2px solid #ccccff;
        padding: 10px;
         
    }

    .rows{
        display: table-row;
        background-color: #ccccff;
    }
     
      .menu-icon {
    font-size: 24px; 
    color: #ccccff; 
    cursor: pointer; 
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
            <h2><u>JOB seeker's place</u></h2>
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
                <div class="welcome">
                    <h2><span class="menu-icon">&#9776;</span>&emsp;<u>Search Job</u></h2> 
                   <div class="table">
   
    <div class="row">
        <div class="sno1">select qualification:</div>
        <div class="cell1"> 
            <select>
                <option >M.C.A</option>
                 <option >M.B.A</option> 
                  <option >M.Com</option>
               
            </select>
        </div>
        <div class="cell2"></div>
        
    </div>
                       
                       <div class="row">
        <div class="sno1">Select Company Name:</div>
        <div class="cell1">
             <select>
                <option >Wipro Infotech</option>
                <option >BSIT</option>
                <option >BPO</option>
                
            </select>
        </div>
        <div class="cell2"></div>
                       </div>        
                       
    <div class="row">
        <div class="sno1">select Area of work:</div>
        <div class="cell1">
             <select>
                <option>Sofware Professional Required</option>
                     <option>Computer Professional</option>
                
            </select>
        </div>
        <div class="cell2"></div>
        
    </div>
                       <div class="row" align="right">
                            <button>search</button>
    </div>
              
           
                   </div><br><br>
                    
                   <h2><span class="menu-icon"></span>&emsp;Status of Job</h2> 
                       <div class="table">
    <div class="rows">
        <div class="sno">Company Name</div>
        <div class="cell">Job Title</div>
        <div class="cells">Status</div>
        <div class="cells">Description</div>
        
    </div>
    <div class="row">
        <div class="sno">Wipro Infotech</div>
        <div class="cell">Software Professional Required</div>
        <div class="cells">Call Letter Send</div>
        <div class="cells">Invited on 21-Dec-2013.</div>
    </div>
                                     <div class="row">
        <div class="sno">Wipro Infotech</div>
                <div class="cells">Marketing Executive Required</div>
                <div class="cells">Call Letter Send</div>
                <div class="cells">You are Invited For Interview on 10-Mar-2013.</div>
                       </div>
    <div class="row">
       <div class="sno">TCS Private Limited</div>
                <div class="cells">Software Trainee Required</div>
                <div class="cells">Call Letter Send</div>
                <div class="cells">Invited on 21-Dec-2013.</div>
        
    </div>
                       <div class="row">
     <div class="sno">Wipro Infotech</div>
                <div class="cells">Cleaners Required</div>
                <div class="cells">Call Letter Send</div>
                <div class="cells">Invited on 21-Dec-2013.</div>
        
    </div>
              
                
</div>
                    
                </div>
            </div>
            <div class="sidebar">
                <h3>Welcome</h3>
                <p>Jalpa Prajapati</p> 
                <h3></h3>
                <p></p>
                <h3></h3>
                <p></p>
                <h3></h3>
                <p></p>
                <p style="margin-top: 80px; color: rgb(130, 130, 246);">Developed by Bsit Software</p>
            </div>
        </div>
    </div>
</body>
</html>