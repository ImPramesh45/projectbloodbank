<?php
session_start();
include('connection.php');

if(isset($_POST['failed']))
{
    $id = $_POST['failed'];

    try{
        $query = "DELETE FROM blood_donations WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
       $query_execute =  $statement->execute($data);
       if($query_execute)
       {
            echo "<script>alert('Blood Donation Failed')</script>";
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
