<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admincss/style adminDashboard.css">
     
    
    <title>Admin Dashboard </title> 



</head>
<body>
    <nav>
        <!--<div class="logo-name">-->
            <div class="logo-image">
                <img src="adminimages/COJ Logo.jpeg" alt="Company Logo">
            </div>

                        <!--Side view part-->
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="adminDashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="content.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Strategies</span>
                </a></li>
                <li><a href="Grandwriting.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Grant Writting</span>
                </a></li>
                <li><a href="DonorRelations.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Donor Relations</span>
                </a></li>
                <li><a href="FundD.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Fund Diversifying</span>
                </a></li>
                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Lock</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

     <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <br><br><br><br><br>
            <h1>FUNDERAISING AND RESOURCE MOBILIZATION </h1>

            <img src="adminimages/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text"><b>Dashboard</b></span>
                </div>


                <div class="image-1">
                    <img src="adminimages/Admin 4.jpg">
                    <section class="content">
                     <div class="text1">
                        <h2><b>Welcome to the Admin Dashboard</b></h2>
                        <p1>Your central hub for managing and overseeing<br> 
                            COJ's activities of Fundraising and even <br>
                            Resource mobilization<br><br><br><br>
                            This dashboard is designed to provide you with easy <br> access to important 
                            information and tools to effectively <br>manage our operations. <br><br></p1>
                        
                     </div>
                  </section>
                </div>
                

                    <br> <p2><b>Dashboard Overview</b><br><br>
                    
                    1. Manage Donations <br>Track and manage donation records, including donor information, donation amounts, and donation history. You can generate reports on donations received and track donation trends over time.<br>
                    2. Generate Reports <br>Generate various reports for analysis, including volunteer engagement reports, donation reports, and event participation reports. These reports provide valuable insights into our NGO's activities and impact.<br>
                    3. Manage Events <br>Organize and manage upcoming events, including event details, participant lists, and event schedules. You can add new events, update event information, and track event attendance.<br></p2>

                
            </div>


            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data email">
                        <span class="data-title"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data joined">
                        <span class="data-title"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data type">
                        <span class="data-title"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                    </div>
                    <div class="data status">
                        <span class="data-title"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                        <span class="data-list"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="adminjs/script.js"></script>
</body>
</html>