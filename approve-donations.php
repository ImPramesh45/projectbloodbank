<?php
include('connection.php');


    if (isset($_POST['approve']))
    {
    $q=$db->query("SELECT * FROM blood_donations");
    while($r1=$q->fetch(PDO::FETCH_OBJ))
    {
        $q=$db->prepare("INSERT INTO stock_blood_list(fname,lname,bgroup) VALUES(:fname,:lname,:bgroup)");
        $q->bindValue('fname',$r1->fname);
        $q->bindValue('lname',$r1->lname);
        $q->bindValue('bgroup',$r1->bgroup);
        if($q->execute())
        {
        echo "<script>alert('Blood Donation Approved')</script>";
        echo("<script>window.location = 'all-donations.php';</script>");
        }
        else   
        {
        echo "<script>alert('Something went wrong')</script>";
        }
    }
    }

    if(isset($_POST['approve']))
    {
    $id = $_POST['approve'];

    try{
        $query = "DELETE FROM blood_donations WHERE id=:id";
        $statement = $db->prepare($query);
        $data = [':id' => $id];
       $query_execute =  $statement->execute($data);
       if($query_execute)
       {
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