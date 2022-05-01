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

    <link rel="stylesheet" href="css/admstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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
                    <a class="nav-link" href="#">Notices</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </a>
                  </li>         
                </ul>
                <a class="btn btn-outline-success" href="log-in.php">Sign In</a>             
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
    

    <section class="vh-150 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-14 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-3">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><center>Sign Up</center></h3>
                  
                  <form action="" method="post">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" name="fname" id="firstName" class="form-control form-control-lg" />
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" name="lname" id="lastName" class="form-control form-control-lg" />
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 d-flex align-items-center">
      
                        <div class="form-outline datepicker w-100">
                          <input
                            type="text" name="dob"
                            class="form-control form-control-lg"
                            id="birthDate"
                          />
                          <label for="birthdayDate" class="form-label">Date of Birth</label>
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
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="maleGender"
                            value="Male"
                          />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id="otherGender"
                            value="Other"
                          />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="age" name="age" id="age" class="form-control form-control-lg" />
                          <label class="form-label" for="age">Age</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="address" name="address" id="address" class="form-control form-control-lg" />
                          <label class="form-label" for="address">Address</label>
                        </div>
      
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" />
                          <label class="form-label" for="emailAddress">Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-lg" />
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
      
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" name="username" id="userrname" class="form-control form-control-lg" />
                          <label class="form-label" for="Username">Username</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" name="password" id="passsword" class="form-control form-control-lg" />
                          <label class="form-label" for="password">Password</label>
                        </div>
      
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
      
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
                        <label class="form-label select-label">Select Your Blood Group</label>
      
                      </div>
                    </div>
      
                    <div class="mt-4 pt-2">
                      <input class="btn btn-primary btn-lg" type="submit" name="sub" value="Submit"/>
                    </div>
      
                  </form>
                  <?php
                  if (isset($_POST['sub']))
                  {
                      $fname=$_POST['fname'];
                      $lname=$_POST['lname'];
                      $dob=$_POST['dob'];
                      $gender=$_POST['gender'];
                      $age=$_POST['age'];
                      $address=$_POST['address'];
                      $email=$_POST['email'];
                      $phone=$_POST['phone'];
                      $username=$_POST['username'];
                      $password=$_POST['password'];
                      $bgroup=$_POST['bgroup'];
                      $q=$db->prepare("INSERT INTO user_registration(fname,lname,dob,gender,age,address,email,phone,username,password,bgroup) VALUES(:fname,:lname,:dob,:gender,:age,:address,:email,:phone,:username,:password,:bgroup)");
                      $q->bindValue('fname',$fname);
                      $q->bindValue('lname',$lname);
                      $q->bindValue('dob',$dob);
                      $q->bindValue('gender',$gender);
                      $q->bindValue('age',$age);
                      $q->bindValue('address',$address);
                      $q->bindValue('email',$email);
                      $q->bindValue('phone',$phone);
                      $q->bindValue('username',$username);
                      $q->bindValue('password',$password);
                      $q->bindValue('bgroup',$bgroup);
                      if($q->execute())
                      {
                        echo "<script>alert('User Registered Successfully')</script>";
                        echo("<script>window.location = 'log-in.php';</script>");
                      }
                      else
                      {
                        echo "<script>alert('User Registration Failed')</script>";
                      }     
                  }
                  ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    
            <footer class="text-center text-lg-start" style="background-color: #db6930;">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-dark" href="https://prameshd.com.np/">Blood Bank Official</a>
        
            </div>
            <!-- Copyright -->
            </footer>
</body>
</html>