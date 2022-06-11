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

    <link rel="stylesheet" href="css/mstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
</head>
<body style="background: linear-gradient(to right, #67b26f, #4ca2cd)">

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark text-center">
            <div class="container-fluid">
                <a class="navbar-brand" href="user-home.php" style="font-weight:600">BLOODBANK</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="user-home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blood-donate.php">Blood Donate</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blood-request.php">Blood Request</a>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      My Tasks
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="mydonations.php">MY DONATIONS</a></li>
                      <li><a class="dropdown-item" href="myrequests.php">MY REQUESTS</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="mydonations-pending.php">PENDING DONATIONS</a></li>
                      <li><a class="dropdown-item" href="myrequests-pending.php">PENDING REQUESTS</a></li>
                    </ul>
                  </li>        
                </ul>
                <h4 style="margin-top:6px; margin-right:12px;color:gainsboro">Welcome, User</h4>
                <a class="btn btn-outline-info" href="user-logout.php" style="font-weight:650">Logout</a>
                
                
                
              </div>
            </div>
          </nav>
    </section>
    
    <!---------------banner section--------------->

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <a class ="promo-title"href="user-home.php">BLOOD BANK</a>
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

    <!------------------body section------------------->

    <?php
    $username=$_SESSION['username'];
    if(!$username)
    {
        header("Location:log-in.php");
    }
    ?>
    <hr>
        <!------------------body section------------------->
    

    <section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-14 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;color:white">
                <div class="card-body p-4 p-md-3"  style="background: linear-gradient(to right, #283048, #859398);border-radius:15px">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><center>Request For Blood</center></h3>
                  
                  <form action="" method="post">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="fullname" id="fullname" class="form-control form-control-lg" required/>
                          <label class="form-label" for="fulname" style="font-weight:600">Full Name</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                          <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-lg" required/>
                          <label class="form-label" for="phoneNumber" style="font-weight:600">Phone Number</label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
      
                        <select class="select form-control-lg" name="bgroup">
                          <option disabled>Blood Group</option>
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>AB+</option>
                          <option>AB-</option>
                          <option>O+</option>
                          <option>O-</option>
                        </select>
                        <label class="form-label select-label" style="font-weight:600">Select the Blood You Need</label>
      
                      </div>
                    <div class="mt-4 pt-2 text-center">
                      <input class="btn btn-danger btn-lg" type="submit" name="subb" value="Request" style="width:60%; font-weight:600; font-size:24px; border-radius:20px"/>
                    </div>
      
                  </form>
                  <?php

                  if (isset($_POST['subb']))
                  {
                      $username=$_SESSION['username'];
                      $fullname=$_POST['fullname'];
                      $phone=$_POST['phone'];
                      $requestdate=$_POST['requestdate'];
                      $bgroup=$_POST['bgroup'];
                      $q=$db->prepare("INSERT INTO blood_requests(fullname,phone,username,requestdate,bgroup) VALUES(:fullname,:phone,:username,:requestdate,:bgroup); INSERT INTO all_time_requests(fullname,phone,username,requestdate,bgroup) VALUES(:fullname,:phone,:username,:requestdate,:bgroup)");
                      $q->bindValue('fullname',$fullname);
                      $q->bindValue('phone',$phone);
                      $q->bindValue('username',$username);
                      $q->bindValue('requestdate',$requestdate);
                      $q->bindValue('bgroup',$bgroup);
                      if($q->execute())
                      {
                        echo("<script>window.location = 'req-submitted.php';</script>");
                      }
                      else
                      { 
                        echo "<script>alert('Blood Request Failed')</script>";
                      }
 
                  }
                  ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    
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