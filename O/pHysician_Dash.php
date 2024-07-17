<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="phyDash.css">
    <title>physician dashboard</title>
    <style>
        /* start of the header css */
.banner {
    width: 100%;
    height: 30vh;
    background-color: black;
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
      url(images/kk.jpg);
    background-size: cover;
    background-position: center;
  }
  .navbar {
    width: 85;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-left: 30px;
  }
  .logo {
    width: 120px;
    cursor: pointer;
  }
  .navbar ul li {
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
    right: 5%;
    bottom: 7px;
  }
  .navbar ul li a {
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
  }
  .navbar ul li::after {
    content: "";
    height: 3px;
    width: 0;
    background: red;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
  }
  .navbar ul li:hover:after {
    width: 100%;
  }
  .sub-menu {
    display: none;
    position: relative;
    top: 10px;
    left: -15px;
  }
  .sub-menu ul li {
    position: relative;
    left: -5px;
    margin-bottom: 10px;
    top: 2px;
  }
  .sub-men ul li {
    position: relative;
    left: -5px;
    bottom: 10px;
    margin-bottom: 10px;
    top: 1;
  }
  .sub-men {
    display: none;
    position: relative;
    top: 80px;
    right: 90px;
  }
  .banner ul li:hover .sub-men {
    display: block;
    position: absolute;
    background-color: rgb(0, 45, 117);
    margin-top: 12px;
    margin-left: -8px;
  }
  .sub-menu ul,
  .sub-men ul {
    position: absolute;
  }
  .banner ul li:hover .sub-menu {
    display: block;
    position: absolute;
    background-color: rgb(0, 45, 117);
    margin-top: 12px;
    margin-left: -8px;
  }
  .banner ul li:hover .sub-menu ul {
    display: block;
    margin: 6px;
  }
  
  .banner ul li:hover .sub-menu ul li a {
    width: 75px;
    padding: 5px;
    border-bottom: 1px #fff;
    background: transparent;
    transition: 0.4 ease;
    text-align: left;
    border-radius: 0px;
  }
  .login-icon {
    width: 40px;
    border-radius: 100%;
    cursor: pointer;
    margin-right: 30px;
  }
  /* osh */
  .login {
    width: 70px;
    border-radius: 100%;
    cursor: pointer;
    margin-right: 30px;
  }
  
  /* end of the header css */
  body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
}
nav {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align:left;
}
nav a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
}
nav a:hover {
    background-color: #555;
}
nav .active {
    background-color: #555;
}
.topic{
    padding: 20px;
    padding-bottom: 5px;
    color:#800000;
}
.box-container {
    display: flex;
    justify-content: flex-start; 
    margin-top: 20px;
    padding :20px;
}

.box {
    padding: 20px;
    width: 200px;
    height: 150px;
    background-color: #820a14; 
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff; 
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    transition: transform 0.3s ease;
    margin-right: 20px; 
}

.box:last-child {
    margin-right: 0; 
}

.box:hover {
    transform: scale(1.05); 
}


.events {
    margin-top: 10px;
    padding-left: 50px;
    display: flex;
    flex-direction: column;
    padding-left: 60px;
    padding-top: 60px;
  }
  
  .info {
    display: flex;
    align-items: center;
  }
  .events img {
    width: 60px;
    border-radius: 50%;
    margin-right: 15px;
  }
  
  .details {
    padding: 60px;
  }
  .events h2 {
    color: #820a14;
  }
  
  .events h4 {
    color: #6d757d;
  }
  .location-map {
    cursor: pointer;
  }
  .location-map:hover {
    color: red;
  }
  
  .events hr {
    border: 0;
    height: 1px;
    background: #6d757d;
    margin: 15px 10px;
  }


  /*Fottetr*/
.footer {
    background-color: gray;
    padding: 70px 0;
  }
  
  .footerContainer {
    max-width: 1170px;
    margin: auto;
  }
  ul {
    list-style: none;
  }
  .sociallinks ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .row {
    display: flex;
    flex-wrap: none;
  }
  
  .footer-col {
    width: 25%;
    padding: 0 15px;
  }
  
  .footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
  }
  
  .footer-col h4::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  
  .footer-col ul li:not(:last-child) {
    margin-bottom: 10px;
  }
  
  .footer-col ul li a {
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all o.3s ease;
  }
  
  .footer-col ul li a:hover {
    color: #ffffff;
    padding-left: 8px;
  }
  
  .footer-col .sociallinks li a {
    display: inline-block;
    height: 40px;
    width: 100px;
    background-color: rgba(255, 255, 255, 0.2);
    margin-right: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 10%;
    color: blue;
    transition: all 0.5s ease;
  }
  
  .footer-col .sociallinks a:hover {
    color: black;
    background-color: red;
    width: 1px;
  }
  /*Responsive*/
  @media (max-width: 767px) {
    .footer-col {
      width: 50%;
      margin-bottom: 30px;
    }
  }
  
  @media (max-width: 574px) {
    .footer-col {
      width: 100%;
    }
  }
  
    </style>
  </head>
  <body>
        <!-- Header -->
        <div class="banner">
      <div class="navbar">
        <img src="images/logo main.png" class="logo" />
        <ul>
          <li><a href="HomePage.html">Home</a></li>
          <li><a href="contactUs.html">Contact Us</a></li>
          <li><a href="camoaing.html">Campaing</a></li>
          <li><a href="">Blood</a>
            <div class="sub-menu">
              <ul>
                <li><a href="page1.html">why</a></li>
                <li><a href="page2.html">types</a></li>
                <li><a href="page3.html">can</a></li>
              </ul>
            </div>
          
          </li>
          <li>
            <a href="#">About Us</a>
            <div class="sub-menu">
              <ul>
                <li><a href="contactm.html">Vision<pre>& Mission</a></li>
                
              </ul>
            </div>
          </li>
          <li><a href="camoaing.html">request</a></li>
          <li><a href="fund raise page.html">donate</a></li>
          <li><a href="whareToGiveBlood.html">blood center</a></li>
         
          <li>
            <a href="#"><img src="images/login gray.png" class="login" /></a>
            <div class="sub-men">
              <ul>
                <li><a href="#">Edit </a></li>
                <li><a href="#">LogOut</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <!-- <img src="images/login gray.png" class="login" /> -->
      </div>
    </div>
    <!-- end of the header -->

    <nav>
        <a href="physician_dashboard.html" class="active">Physician Dashboard</a>
    </nav>


    <h2 class="topic">Donor eligibility confirmation</h2>
    <div class="box-container">
        <a href="AddDonorEligibility.php" class="box">Add Status of eligibility and details</a>
        <a href="ViewDonorDetails.php" class="box">View Donor Details</a>
    </div>


    <div class="events">
        <h2>Donation for the canser hospital</h2>
        <div class="details">
          <div class="info">
            <img src="./images/date.png" alt="Date" />
            <h4>Date - 09.05.2024</h4>
          </div>
  
          <div class="info">
            <img src="./images/time.png" alt="Time" />
            <h4>Time - 09.00AM to 04.00PM</h4>
          </div>
  
          <div class="info">
            <img src="./images/location.png" alt="Location" />
            <h4 class="location-map">Location - Models Collage, Kurunagala</h4>
          </div>
        </div>
  
        <br />
        <hr />
  
        <h2>SLIIT University donation</h2>
        <div class="details">
          <div class="info">
            <img src="./images/date.png" alt="Date" />
            <h4>Date - 09.05.2024</h4>
          </div>
  
          <div class="info">
            <img src="./images/time.png" alt="Time" />
            <h4>Time - 09.00AM to 04.00PM</h4>
          </div>
  
          <div class="info">
            <img src="./images/location.png" alt="Location" />
            <h4 class="location-map">Location - Models Collage, Kurunagala</h4>
          </div>
        </div>
  
        <br />
        <hr />
      </div>


    <!-- start of the fotter -->
    <footer class="footer">
        <div class="footerContainer">
          <div class="row">
            <div class="footer-col">
              <h4>Company</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy polcy</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Get help</h4>
              <ul>
                <li><a href="#">whatsapp</a></li>
                <li><a href="#">facebook</a></li>
                <li><a href="#">instagram</a></li>
                <li><a href="#">imo</a></li>
                <li><a href="#">twitter</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Online Shop</h4>
              <ul>
                <li><a href="#">one</a></li>
                <li><a href="#">two</a></li>
                <li><a href="#">three</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Contact Us</h4>
              <div class="sociallinks">
                <ul>
                  <li><a href="#">facebook</a></li>
                  <li><a href="#">instagram</a></li>
                  <li><a href="#">Whatsapp</a></li>
                  <li><a href="#">Twtter</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </body>
  </html>
  