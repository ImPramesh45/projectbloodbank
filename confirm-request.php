<?php
include('connection.php');
 
     if(isset($_POST['confirmed']))
     {
     $id = $_POST['confirmed'];
 
     try{
         $query = "INSERT INTO confirmed_blood_requests (fullname,username,requestdate,bgroup) SELECT fullname,username,requestdate,bgroup FROM blood_requests WHERE id=:id;  DELETE FROM blood_requests WHERE id=:id";
         $statement = $db->prepare($query);
         $data = [':id' => $id];
         $query_execute =  $statement->execute($data);
         if($query_execute)
         {    
             echo("<script>window.location = 'req-confirmed.php';</script>");
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
