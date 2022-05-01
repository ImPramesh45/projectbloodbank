<?php
session_start();
include('connection.php');

if(isset($_POST['cancel']))
{
    $id = $_POST['cancel'];

    try{
        $query = "DELETE FROM blood_requests WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
       $query_execute =  $statement->execute($data);
       if($query_execute)
       {
            echo "<script>alert('Blood Request Cancelled')</script>";
            echo("<script>window.location = 'all-requests.php';</script>");
       }
       else
       {
            echo "Error";
       }
    }

    catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>
