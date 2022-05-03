
 <?php
include('connection.php');

    if(isset($_POST['approve']))
    {
    $id = $_POST['approve'];

    try{
        $query = "INSERT INTO stock_blood_list (fname,lname,bgroup) SELECT fname,lname,bgroup FROM blood_donations WHERE id=:id; DELETE FROM blood_donations WHERE id=:id";
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



    if(isset($_POST['approve']))
    {
    $bgroup = $_POST['approve'];

    try{
        $query = "INSERT INTO stock_blood_quantity (bgroup) SELECT ( COUNT(stock_blood_list.bgroup) FROM stock_blood_list WHERE bgroup=:bgroup";
        $statement = $db->prepare($query);
        $data = [':bgroup' => $bgroup];
        $query_execute =  $statement->execute($data);
        if($query_execute)
        {    
            echo ("<script>alert('Blood Donation Approved')</script>");
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






; INSERT INTO stock_blood_quantity (bgroup) SELECT ( COUNT(stock_blood_list.bgroup) FROM stock_blood_list