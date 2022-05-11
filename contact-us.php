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
    <link rel="stylesheet" href="css/aboutstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/caec819051.js" crossorigin="anonymous"></script>
</head>
<body>

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">BLOODBANK</a>
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
                    <a class="nav-link" href="about-us.php">About Us</a>
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
                <a class ="promo-title"href="index.php">BLOODBANK</a>
                    <P>Blood donation will cost you nothing, but it will save a life!</P>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/banner1.png" class="img-fluid" alt="Blood Bank">
                </div>
            </div>
        </div>
    </section>

<br>
    <h2><center><u>OUR TEAM</u></center></h2>

        <div class="container" style="width:100%">
            <div class="mainn">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                            <div class="profile-card">
                                <div class="img">
                                    <img src="images/pramesh1.jpg" alt="Pramesh Dahal">
                                </div>
                                <div class="caption">
                                    <h3>Pramesh&nbsp;Dahal</h3>
                                    <p>Full&nbsp;Stack&nbsp;Developer</p>
                                    <div class="social-links">
                                        <a href="https://www.facebook.com\pramesh.dahal.7" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com\impramesh45" target="blank"><i class="fa-brands fa-instagram" target="blank"></i></i></a>
                                        <a href="https://www.twitter.com\impramesh45" target="blank"><i class="fa-brands fa-twitter" target="blank"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                            <div class="profile-card">
                                <div class="img">
                                    <img src="images/pramesh1.jpg" alt="Pramesh Dahal">
                                </div>
                                <div class="caption">
                                    <h3>Pramesh&nbsp;Dahal</h3>
                                    <p>Full&nbsp;Stack&nbsp;Developer</p>
                                    <div class="social-links">
                                        <a href="https://www.facebook.com\pramesh.dahal.7" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/impramesh45"><i class="fa-brands fa-instagram" target="blank"></i></i></a>
                                        <a href="https://www.twitter.com\impramesh45" target="blank"><i class="fa-brands fa-twitter" target="blank"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                            <div class="profile-card">
                                <div class="img">
                                    <img src="images/pramesh1.jpg" alt="Pramesh Dahal">
                                </div>
                                <div class="caption">
                                    <h3>Pramesh&nbsp;Dahal</h3>
                                    <p>Full&nbsp;Stack&nbsp;Developer</p>
                                    <div class="social-links">
                                        <a href="https://www.facebook.com\pramesh.dahal.7" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/impramesh45"><i class="fa-brands fa-instagram" target="blank"></i></i></a>
                                        <a href="https://www.twitter.com\impramesh45" target="blank"><i class="fa-brands fa-twitter" target="blank"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>