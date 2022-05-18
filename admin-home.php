<?php
ob_start();
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

    <link rel="stylesheet" href="css/admstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="admin-home.php"style="font-weight:600">BLOODBANK</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="admin-home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="donor-reg.php">Donor Registration</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="all-requests.php">Blood Requests</a>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="all-donations.php">Blood Donations</a>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Admin Panel
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="user-list.php">USERS LIST</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="stock-blood-list.php">STOCK BLOOD LIST</a></li>
                      <li><a class="dropdown-item" href="manage-stock.php">MANAGE STOCK</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="approved-blood-donations.php">APPROVED DONATIONS</a></li>
                      <li><a class="dropdown-item" href="confirmed-blood-requests.php">CONFIRMED REQUESTS</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="all-time-donations.php">ALL TIME DONATIONS</a></li>
                      <li><a class="dropdown-item" href="all-time-requests.php">ALL TIME REQUESTS</a></li>
                    </ul>
                  </li>   
                </ul>
                <h4 style="margin-top:6px; margin-right:12px;color:gainsboro">Welcome, Admin</h4>
                <a class="btn btn-outline-info" href="admin-logout.php" style="font-weight:650">Logout</a>
              </div>
            </div>
          </nav>
    </section>
    
    <!---------------banner section--------------->

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class ="promo-title"href="admin-home.php">BLOOD BANK</a>
                    <P>Blood donation will cost you nothing, but it will save a life!</P>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/banner1.png" class="img-fluid" alt="Blood Bank">
                </div>
            </div>
        </div>
    </section>

    <!------------------body section------------------->

    <?php
    $un=$_SESSION['un'];
    if(!$un)
    {
        header("Location:admin-login.php");
        ob_end_flush();
    }
    ?>
    <hr>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/image00.jpg" class="d-block w-100" alt="Image" style="max-height:600px">
        </div>
        <div class="carousel-item">
          <img src="images/image0.jpg" class="d-block w-100" alt="Image" style="max-height:600px">
        </div>
        <div class="carousel-item">
          <img src="images/image1.png" class="d-block w-100" alt="Image" style="max-height:600px">
        </div>
        <div class="carousel-item">
          <img src="images/image2.jpg" class="d-block w-100" alt="Image" style="max-height:600px">
        </div>
        <div class="carousel-item">
          <img src="images/image3.jpeg" class="d-block w-100" alt="Image" style="max-height:600px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr>
    <footer class="text-center text-lg-start" style="background: linear-gradient(to right, #0b486b, #f56217);">
      <!-- Copyright -->
      <div class="text-center p-3" style="color: white;font-weight:600">
        © 2022 Copyright:
        <a class="text-dark" href="https://prameshd.com.np/" style="text-decoration:none;font-weight:600">Blood Bank Official</a>
        
      </div>
      <!-- Copyright -->
    </footer>
</body>
</html>