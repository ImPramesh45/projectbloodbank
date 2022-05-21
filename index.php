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
    
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">

</head>
<body>

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <div class="col-md-6 text-center">
                    <img src="images/banner1.png" class="img-fluid" alt="Blood Bank">
                </div>
            </div>
        </div>
    </section>

    <!-------------Body Section ------------------->

  <div id="body">

    <!-------------service section ----------------->

    <section id="services">
        <div class="container text-center">
            <h1 class="title">OUR SERVICES</h1>
            <div class="row text-center">
                <div class="col-md-4 services">
                    <img src="images/counselor.png" alt="counselor" class="service-img">
                    <h4>Counselling</h4>
                    <p>Personal issues, a lack of career direction, and poor study strategies can all impact your ability to succeed. Counsellors can help you develop study skills and assist in working through your personal problems so you can better focus on school.</p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/career.png" alt="counselor" class="service-img">
                    <h4>Career Centers</h4>
                    <p>Most schools provide job search coaching and can review your résumé and cover letter. Some also have an on-campus recruitment program where employers conduct interviews on campus. Many Career Centres offer opportunities to meet employers, including job fairs, employer information sessions, and networking events. Some schools have a job board for on-campus and off-campus work.</p>
                </div>
                <div class="col-md-4 services">
                    <img src="images/aid.png" alt="counselor" class="service-img">
                    <h4>Financial Aid</h4>
                    <p>The Financial Aid office offers assistance with paying for your education. Financial aid includes student loans, bursaries and scholarships. Some schools also offer emergency bursaries or loans.  
                    </p>
                </div>
            </div>
            <button type="button" class="btn btn-primary">All Services</button>
        </div>
    </section>
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