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

    <link rel="stylesheet" href="css/adminstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body style="background: linear-gradient(to right, #67b26f, #4ca2cd)">

  <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark text-center">
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
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
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
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="message-feedback.php">Messages/Feedbacks</a></li>
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
    $un=$_SESSION['un'];
    if(!$un)
    {
        header("Location:admin-login.php");
    }
    ?>
    
    <hr>
    <section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-14 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;color:white">
                <div class="card-body p-4 p-md-3"  style="background: linear-gradient(to right, #283048, #859398);border-radius:15px">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><center>Sign Up</center></h3>
                  
                  <form action="" method="post">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" name="fname" id="firstName" class="form-control form-control-lg" required/>
                          <label class="form-label" for="firstName" style="font-weight:600">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" name="lname" id="lastName" class="form-control form-control-lg" required/>
                          <label class="form-label" for="lastName" style="font-weight:600">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                          <input
                            type="date" name="dob"
                            class="form-control form-control-lg"
                            id="birthDate"
                            required/>
                          <label for="birthdayDate" class="form-label" style="font-weight:600">Date of Birth</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <h6 class="mb-2 pb-1">Gender: </h6>
      
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="femaleGender"
                            value="Female"
                            checked
                          />
                          <label class="form-check-label" for="femaleGender" style="font-weight:600">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="maleGender"
                            value="Male"
                          />
                          <label class="form-check-label" for="maleGender" style="font-weight:600">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="otherGender"
                            value="Other"
                          />
                          <label class="form-check-label" for="otherGender" style="font-weight:600">Other</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">

                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="address" name="address" id="address" class="form-control form-control-lg" required/>
                          <label class="form-label" for="address" style="font-weight:600">Address</label>
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
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline" >
                          <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" required/>
                          <label class="form-label" for="emailAddress" style="font-weight:600">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
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
                        <label class="form-label select-label" style="font-weight:600">Select Your Blood Group</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" name="username" id="userrname"class="form-control form-control-lg" required/>
                          <label class="form-label" for="Username" style="font-weight:600">Username</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="password" name="password" id="passsword" class="form-control form-control-lg" required/>
                          <label class="form-label" for="password" style="font-weight:600">Password</label>
                          <label class="form-label" for="password" style="font-weight:600">(must contain 8 characters, uppercase, number and special character)</label>
                        </div>
      
                      </div>
                    </div>

                    <div class="row">

                    </div>
      
                    <div class="mt-4 pt-2 text-center">
                      <input class="btn btn-outline-warning btn-lg" type="submit" name="sub" value="Sign Up" style="width:60%; font-weight:600; font-size:24px; border-radius:20px"/>
                    </div>
      
                  </form>
                  <?php
                  if (isset($_POST['sub']))
                  {
                      $fname=$_POST['fname'];
                      $lname=$_POST['lname'];
                      $dob=$_POST['dob'];
                      $gender=$_POST['gender'];
                      $address=$_POST['address'];
                      $email=$_POST['email'];
                      $phone=$_POST['phone'];
                      $username=$_POST['username'];
                      $password=$_POST['password'];
                      $bgroup=$_POST['bgroup'];
                      // Validate password strength
                      $uppercase = preg_match('@[A-Z]@', $password);
                      $lowercase = preg_match('@[a-z]@', $password);
                      $number    = preg_match('@[0-9]@', $password);
                      $specialChars = preg_match('@[^\w]@', $password);
                                        
                      if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                          echo "<script>alert('Password should be at least 8 characters in length and should include at least one uppercase letter, one number, and one special character.')</script>";
                      }
                      else{
                      $vlduser = $db->prepare("SELECT * from user_registration WHERE username=?");
                      $vlduser->execute(array($username));
                      if ( $vlduser->rowCount() > 0 ) {
                        echo "<script>alert('Username Already Taken. Please use another username.')</script>";
                        echo("<script>window.location = 'donor-reg.php';</script>");
                      }
                      else{
                      $q=$db->prepare("INSERT INTO user_registration(fname,lname,dob,gender,address,email,phone,username,password,bgroup,registered_date) VALUES(:fname,:lname,:dob,:gender,:address,:email,:phone,:username,:password,:bgroup,:registered_date)");
                      $q->bindValue('fname',$fname);
                      $q->bindValue('lname',$lname);
                      $q->bindValue('dob',$dob);
                      $q->bindValue('gender',$gender);
                      $q->bindValue('address',$address);
                      $q->bindValue('email',$email);
                      $q->bindValue('phone',$phone);
                      $q->bindValue('username',$username);
                      $q->bindValue('password',$password);
                      $q->bindValue('bgroup',$bgroup);
                      $q->bindValue('registered_date',$registered_date);
                      if($q->execute())
                      {
                        echo "<script>alert('User Registered Successfully')</script>";
                        echo("<script>window.location = 'user-list.php';</script>");
                      }
                      else
                      {
                        echo "<script>alert('User Registration Failed')</script>";
                      }
                      }   
                       
                    }
                  }
                  ?>
                </div>
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