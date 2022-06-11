<?php
session_start();
include('connection.php');

if(isset($_POST['failed']))
{
    $id = $_POST['failed'];

    try{
        $query = "DELETE FROM blood_donations WHERE id=:id;DELETE FROM all_time_donations WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
       $query_execute =  $statement->execute($data);
       if($query_execute)
       {
            echo("<script>window.location = 'don-failed.php';</script>");
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
