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
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
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
                <div class="col-md-6 text-center">
                    <img src="images/banner1.png" class="img-fluid" alt="Blood Bank">
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

    <h1><center>Pending Requests</center></h1>
    <hr>
    <div style="overflow-x:auto;">
      <table class="table table-striped table-dark" style="width:80%; margin:0% auto">
        <thead>
            <tr>
                <th scope="col"><center>ID</center></th>
                <th scope="col"><center>First Name</center></th>
                <th scope="col"><center>Last Name</center></th>
                <th scope="col"><center>Blood Group</center></th>
                <th scope="col"><center>Request Date</center></th>
                <th scope="col"><center>Status</center></th>
            </tr>
        </thead>
            <?php
            $q=$db->query("SELECT * FROM blood_requests WHERE username='$username'");
            while($r1=$q->fetch(PDO::FETCH_OBJ))
            {
                ?>
                <tbody>
                    <tr class="table-info">
                        <td><center><?= $r1->id; ?></center></td>
                        <td><center><?= $r1->fname; ?></center></td>
                        <td><center><?= $r1->lname; ?></center></td>
                        <td><center><?= $r1->bgroup; ?></center></td>
                        <td><center><?= $r1->requestdate; ?></center></td>
                        <td><center><button type="submit" name="" value="#" class="btn btn-danger">Pending</button></center></td>
                    </tr>
                </tbody>
                        <?php
            }
            ?>

      </table>
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