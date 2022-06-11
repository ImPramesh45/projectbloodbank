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
        <nav class="navbar navbar-expand-lg navbar navbar navbar-dark bg-dark text-center">
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

    <!-------------service section ----------------->
    <hr>
    <section id="services">
    <h4 style="font-size:32px; font-weight:700;text-decoration:underline;color:#F5FFFA"><center>HOSPITALS</center></h4>
      <div class="row" style="margin:0% 2%">
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Dhulikhel Hospital</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 2</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 3</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin:0% 2%">
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 4</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 5</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 6</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin:0% 2%">
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 7</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 8</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4" style="margin:1% 0%">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Hospital 9</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-success" style="font-weight:600">View Full Notice</a>
            </div>
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