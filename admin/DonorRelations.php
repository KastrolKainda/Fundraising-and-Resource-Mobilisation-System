<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!----======== CSS ======== -->
    <link rel="stylesheet" href="admincss/style adminDashboard.css">
     
            <!----===== Iconscout CSS ===== 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->

    <title>Content Panel</title> 
</head>
<body>
    <nav>
        
            <div class="logo-image">
                <img src="adminimages/COJ Logo.jpeg" alt="">
            </div>

        

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

            
            <br><br><br>
            <h1>FUNDERAISING AND RESOURCE MOBILIZATION</h1>

            <img src="adminimages/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text"><b>Donor Relations</b></span>
                </div>




                <!-- Dashboard Layout-->

            <div class="container">
                <div class="section">
                    <h2>Donors List</h2><br>
                    <img src="adminimages/medical-report.png" alt="Image 1">
                    <p><a href="#" style="text-decoration: none;" >• Registered Donors</a></p><br>
                    <p><a href="#" style="text-decoration: none;" >• Donors Dashboard</a></p><br>
                    <p><a href="#" style="text-decoration: none;" >• Reports</a></p><br>
                    <button class="btn" type="button">View More</button>
                </div>
                <div class="section">
                    <h2> Upcoming Events  </h2><br>
                    <img src="adminimages/upcoming.png" alt="Image 2">
                    <p><a href="#" style="text-decoration: none;" >• Event List</a></p><br>
                    <p><a href="#" style="text-decoration: none;" >• Event Partners</a></p><br>
                    <p><a href="#" style="text-decoration: none;" >• Reports</a></p><br>
                    <button class="btn" type="button">View More</button>
                </div>
                <div class="section">
                    <h2>Transaction History</h2><br>
                    <img src="adminimages/money-transfer.png" alt="Image 3">
                    <p><a href="#" style="text-decoration: none;" >• Total Transactions</a></p><br>
                    <p><a href="#" style="text-decoration: none;" >• Pending Transactions</a></p><br>
                    <p><a href="#" style="text-decoration: none;" >• Reports</a></p><br>
                    <button class="btn" type="button">View More</button>
                </div>
            </div>



                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Donors</span>
                        <span class="number">500</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total Events</span>
                        <span class="number">20</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Transfers</span>
                        <span class="number">1000</span>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>

    <script src="adminjs/script.js"></script>
</body>
</html>