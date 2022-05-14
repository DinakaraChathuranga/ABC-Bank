<!DOCTYPE html>
<html>

<head>
    <title> ABC BANK </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/Home.css">
    <link rel="stylesheet" href="styles/register.css">
    <!-- Load icon library (get a search icon)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>

<body>
    <div id="main">
        <section id="top">
            <!--Avater image-->
            <img align="left" src="images/Bank logo.png" alt="Logo" width="400px" height="200px">
            <div align="right">

                <img src="images/Avatar.png" alt="Avatar" class="avatar">
                <!--Login button-->
                <button class="loginbt" type="button"><a href =Login.php>Login</a></button>
            </div>

            <!--<center>
                <h1> ABC BANK</h1>
            </center>-->
        </section>
        <!--Horizontal line-->
        <hr style="width:100%">
        <!--Navigation bar-->
        <div class="mainnav">
            <a class="openbtn" onclick="openNav()">&#9776; Services</a>
            <a href="Home page.html">Home</a>
            <a class="active" href="#">Registration</a>
            <a href="#contact">Contact us</a>
            <a Shref="#about">About us</a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <!-- Slide bar -->

        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Accounts</a>
            <a href="#">Loan&Leasing</a>
            <a href="#">E-banking</a>
            <a href="#">Promotion</a>
            <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>

            <!--Calender-->
            <section>
                <div class="box">
                    <div class="container">
                        <div id="mycalendar"></div>
                    </div>
                </div>
            </section>
            <script src="js files/mycalendar.js"></script>
            <script>
                mycalendar.draw({
                    target: '#mycalendar',
                    type: 'month',
                    dayformat: 'full',
                    monthformat: 'full',
                    highlighttargetdate: true,
                    prevnextbutton: 'show' //enable prevnextbutton

                })
            </script>
        </div>
        <!--Horizontal line-->
        <hr style="width:100%">
        <!--Register Form-->
        
        <div class="container">
		<form class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register for an new Account</p>
			<div class="input-group">
				<input type="email" placeholder="Email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" required>
			</div>
			<div class="input-group">
				<button class="btn">Login</button>
			</div>
			<p class="login-register-text">Already Have an Account?<br><br><a href="Login.php">Login Now</a></p>
		</form>
            </table>
	</div>
            <!--Horizontal line-->

            <hr style="width:100%">
        </div>
        <!--Footer-->
        <section id="bottom">
            <footer>
                <table width="100%">
                    <tr>
                        <td><img src="" alt="QR code" width="500px" height="300px"></td>
                        <td>
                            <h3>Careers</h3>
                        </td>
                        <td>
                            <h3>News & Evenets</h3>
                        </td>
                        <td>
                            <h3>Get in touch</h3>
                        </td>
                        <td>
                            <h3>Find us</h3>
                        </td>
                        <td></td>
                        <td>
                            <h3>Call us</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Scan for mobile application</td>
                        <td>
                            <ul>
                                <li>Internships</li>
                                <li>Management Trainer</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Central Bank New policies</li>
                                <li>"Husma" Charity Funds</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Address: No.90/A, Flower road, Colombo 7</li>
                                <li>Emails: <a href="" id="footerlink">info@abcbank.lk</a></li>
                                <li>Fax: <a href="" id="footerlink">+94658741235</a></li>
                                <li>Call us: <a href="" id="footerlink">+94754123624</a></li>
                            </ul>
                        </td>
                        <td class="column">
                            <p><img src="images/img_snow.jpg" alt="Snow" style="width:100%"></p>
                            <p><img src="images/img_forest.jpg" alt="Forest" style="width:100%"></p>
                            <p><img src="images/img_mountains.jpg" alt="Mountains" style="width:100%"></p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                        <td class="srch-icon">
                            <p><img src="images/Search icon.jpg" alt="Call icon" style="width:100%">1616</p>
                        </td>
                    </tr>
                </table>
                <hr style="width:100%">
                <center>
                    <p>2022 ABC Bannk PLC.ALL Rights Reserved|Customer Charter & Disclaimer|Solution by:NamsriSolution</p>
                </center>
            </footer>
        </section>
        <script src="js files/Home.js"></script>
    </div>
</body>

</html>