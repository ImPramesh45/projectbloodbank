<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <link rel="stylesheet" href="css/mstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body style="background: linear-gradient(to right, #67b26f, #4ca2cd)">

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark text-center">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php" style="font-weight:600">BLOODBANK</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="notices.php">Notices</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                  <a class="btn btn-outline-info" href="admin-login.php" style= "margin-right:5px;font-weight:650">Admin Login</a>
                  </li>       
                </ul>
                <a class="btn btn-outline-info" href="log-in.php" style= "margin-right:5px;font-weight:650">Log In</a>
                <a class="btn btn-outline-warning" href="signup.php" style=font-weight:650>Sign Up</a>
              </div>
            </div>
          </nav>
    </section>
    
    <!---------------banner section--------------->

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <a class ="promo-title"href="index.php">BLOOD BANK</a>
                    <P>Blood donation will cost you nothing, but it will save a life!</P>
                </div>
                <div class="col-md-3 text-center">
                    <img src="images/banner1.png" class="img-fluid" alt="Blood Bank" style="max-height:200px">
                </div>
                <div class="col-md-3 text-center">
                    <img src="images/banner2.png" class="img-fluid" alt="Blood Bank" style="max-height:200px">
                </div>
            </div>
        </div>
    </section>

    <!-------------Body Section ------------------->
<hr>
    <!-------------service section ----------------->

    <section id="services">
        <div class="container text-center">
          <h4 style="font-size:26px;font-weight:700;"><u>WELCOME TO BLOOD BANK MANAGEMENT SYSTEM</u></h4> <br> 
            <div class="row text-center">
                <div class="col-md-4 services">
                    <img src="images/img1.png" alt="counselor" class="service-img">
                    <h4>Our Motto</h4>
                    <p style="font-size:18px">Our motto "Delivering a million smiles" means we keep customers at the center of our decisions. This customer focus has helped in delivering exceptional value to our clients and has made us the logistics partner of choice for some of the most trusted brands in Nepal.</p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/img2.png" alt="counselor" class="service-img">
                    <h4>Team</h4>
                    <p style="font-size:18px">Our team's e-commerce roots have equipped us with in-depth knowledge about the operational and logistics requirement in the fast-paced e-commerce industry. Our service industry background defines our customer first approach and everyone at BBMS is a CDO, Chief Delivery Officer.</p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/img3.png" alt="counselor" class="service-img">
                    <h4>Vision</h4>
                    <p style="font-size:18px">The vision of becoming an industry leader in providing reliable, time-bound logistics and supply-chain solutions to its business partners. Our network reach, state of the art technology platform and hands-on approach make us one of the fastest growing teams in Nepal.</p>
                </div>
            </div>
        </div>
    </section>
<hr>
    <section>
        <div class="container text-center">
            <div class="row text-center">
                <div class="col-md-12 services">
                    <h4 style="font-weight:600"><u>ABOUT BLOOD BANK</u></h4>
                    <p style="font-size:18px"><img src="images/doubleinv.png" alt="" style= "max-height:30px;max-width:30px">&nbsp;&nbsp; A blood bank is a cache or bank of blood or blood components, gathered as a result of blood donation or collection, stored and preserved for later use in blood transfusion. The term "blood bank" typically refers to a division of a hospital where storage of blood product occurs and where proper testing is performed(to reduce the risk of transfusion related adverse events). However, it sometimes refers to a collection center, and indeed some hospitals also perform collection. &nbsp;&nbsp;<img src="images/doubleinv2.png" alt="" style= "max-height:30px;max-width:30px"></p>
                </div>
            </div>
        </div>
    </section>

      <hr>
      <footer class="text-center text-lg-start" style="background: linear-gradient(to right, #0b486b, #f56217);">
      <!-- Copyright -->
      <div class="text-center p-3" style="color: white;font-weight:600">
        © 2022 Copyright:
        <a class="text-light" href="https://prameshd.com.np/" style="text-decoration:underline;font-weight:600" target="blank">Blood Bank Official</a>
      </div>
      <!-- Copyright -->
    </footer>
  </body>
</html>