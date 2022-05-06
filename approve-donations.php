
 <?php
include('connection.php');

    if(isset($_POST['approve']))
    {
    $id = $_POST['approve'];

    try{
        $query = "INSERT INTO stock_blood_list (fname,lname,username,donationdate,bgroup) SELECT fname,lname,username,donationdate,bgroup FROM blood_donations WHERE id=:id; DELETE FROM blood_donations WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
        $query_execute =  $statement->execute($data);
        if($query_execute)
        {    
            echo "<script>alert('Blood Donation Approved')</script>";
            echo("<script>window.location = 'all-donations.php';</script>");
        }
        else
        {
            echo "<script>alert('Error')</script>";
        }
        }

    catch(PDOException $e){
        echo $e->getMessage();
        }
        }  

?>
