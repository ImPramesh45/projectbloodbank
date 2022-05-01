<?php
session_start();
include('connection.php');

if(isset($_POST['rmvstock']))
{
    $id = $_POST['rmvstock'];

    try{
        $query = "DELETE FROM stock_blood_list WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
       $query_execute =  $statement->execute($data);
       if($query_execute)
       {
            echo "<script>alert('Blood Stock Removed')</script>";
            echo("<script>window.location = 'manage-stock.php';</script>");
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
