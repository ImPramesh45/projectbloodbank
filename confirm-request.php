<?php
include('connection.php');

    if(isset($_POST['confirmed']))
    {
    $id = $_POST['confirmed'];

    try{
        $query = "DELETE FROM blood_requests WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
       $query_execute =  $statement->execute($data);
       if($query_execute)
       {
            echo "<script>alert('Blood Request Confirmed')</script>";
            echo("<script>window.location = 'all-requests.php';</script>");
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

    if(isset($_POST['confirmed']))
    {

    $q=$db->query("SELECT * FROM blood_requests");
    while($r1=$q->fetch(PDO::FETCH_OBJ))
    {
        $q=$db->prepare("INSERT INTO confirmed_blood_requests(fname,lname,bgroup) VALUES(:fname,:lname,:bgroup)");
        $q->bindValue('fname',$r1->fname);
        $q->bindValue('lname',$r1->lname);
        $q->bindValue('bgroup',$r1->bgroup);
        if($q->execute())
        {
        echo "<script>alert('Blood Request Confirmed')</script>";
        echo("<script>window.location = 'all-requests.php';</script>");
        }
        else   
        {
        echo "<script>alert('Blood Request Cancelled')</script>";
        }
    }
    }
    if(isset($_POST['confirmed']))
    {
    $id = $_POST['confirmed'];

    try{
        $query = "DELETE FROM stock_blood_list WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
       $query_execute =  $statement->execute($data);
       if($query_execute)
       {
            echo("<script>window.location = 'all-requests.php';</script>");
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