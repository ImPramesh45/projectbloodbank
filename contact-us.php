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
    <link rel="stylesheet" href="css/abtstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
    <script src="https://kit.fontawesome.com/caec819051.js" crossorigin="anonymous"></script>
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
    <hr>
    
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
                                    <p>Certified&nbsp;Ethical&nbsp;Hacker</p>
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
    <form action="" method="POST">
        <div class="container" style="max-width:80%; background: linear-gradient(to right, #3a6186, #89253e);padding:4px">
            <div class="title mb-3">
                <h5 style="text-align:center;color:white;margin:10px">Email us with any questions or inquiries or call 011-111111</h5>
            </div>
            <br>
            <div class="input-group mb-3">
              <input type="text" name="fname" id="firstname" class="form-control form-control-lg" placeholder="First Name"  aria-describedby="basic-addon2" required/> &nbsp;
              <input type="text" name="lname" id="lastname" class="form-control form-control-lg" placeholder="Last Name" aria-describedby="basic-addon2" required/>
            </div>

            <div class="input-group mb-3">
              <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" placeholder="Email" aria-describedby="basic-addon2" required/>
              <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">Message</span>
              <textarea class="form-control" name="message" placeholder="Your Message Here..."></textarea>
            </div>
            <div class="input-group mb-3">
            <input class="btn btn-success btn-lg" type="submit" name="submitt" value="Send" style="width:50%; font-size:22px; font-weight:700;margin:0% 25%"/>
            </div>
        </div>
    </form>
    <?php
        if (isset($_POST['submitt']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $message=$_POST['message'];
            $msgdate=$_POST['msgdate'];
            $q=$db->prepare("INSERT INTO contact_message(fname,lname,email,message,msgdate) VALUES(:fname,:lname,:email,:message,:msgdate)");
            $q->bindValue('fname',$fname);
            $q->bindValue('lname',$lname);
            $q->bindValue('email',$email);
            $q->bindValue('message',$message);
            $q->bindValue('msgdate',$msgdate);
            if($q->execute())
            {
              echo "<script>alert('Message Sent Successfully')</script>";
              echo("<script>window.location = 'index.php';</script>");
            }
            else
            { 
              echo "<script>alert('Message Sending Failed')</script>";
            }
        }
    ?>
    <hr>

    <footer class="text-center text-lg-start" style="background: linear-gradient(to right, #0b486b, #f56217);">
    <!-- Copyright -->
    <div class="text-center p-3" style="color: white;font-weight:600">
    © 2022 Copyright:
    <a class="text-light" href="https://prameshd.com.np/" style="text-decoration:underline;font-weight:600" target="blank">Blood Bank Official</a>
    </div>
    <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>