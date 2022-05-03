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
                <a class="navbar-brand" href="user-home.php">BLOODBANK</a>
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
                    <a class="nav-link" href="#">Blood Request</a>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </a>
                  </li>         
                </ul>
                <h4 style="margin-top:6px; margin-right:12px;color:gainsboro">Welcome, User</h4>
                <a class="btn btn-outline-success" href="user-logout.php">Logout</a>
                
                
                
              </div>
            </div>
          </nav>
    </section>
    
    <!---------------banner section--------------->

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a class ="promo-title"href="userhome.php">BLOOD BANK</a>
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

    <h1><center>My Donations</center></h1>
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
                <th scope="col"><center>Confirm</center></th>
            </tr>
        </thead>
            <?php
            $q=$db->query("SELECT * FROM all_time_requests WHERE username='$username'");
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
                        <td><center><form action="confirm-request.php" method="POST">
                          <button type="submit" name="confirmed" value="<?=$r1->id;?>" class="btn btn-danger">Confirm</button>
                        </form></center>
                        </td>
                    </tr>
                </tbody>
                        <?php
            }
            ?>

      </table>
    </div>
    <hr>
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