<?php include('dbconn.php'); ?>

<?php

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $query="delete from `students` where `id`='$id'";

        $result=mysqli_query($connection, $query);

        if(!$result){
            die("query failed".mysqli_error());
        }
        else{
            header('location:index.php?delete_msg=You have delete the record. ');
        }


    }

    
?>
