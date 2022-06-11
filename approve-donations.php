
 <?php
include('connection.php');

    if(isset($_POST['approve']))
    {
    $id = $_POST['approve'];
    $donationdate = $_POST['approve'];

    try{
        $query = "INSERT INTO stock_blood_list (fullname,username,donationdate,bgroup) SELECT fullname,username,donationdate,bgroup FROM blood_donations WHERE id=:id;INSERT INTO approved_donations (fullname,username,donationdate,bgroup) SELECT fullname,username,donationdate,bgroup FROM blood_donations WHERE id=:id; DELETE FROM blood_donations WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
        $query_execute =  $statement->execute($data);
        if($query_execute)
        {    
            echo("<script>window.location = 'don-approved.php';</script>");
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
