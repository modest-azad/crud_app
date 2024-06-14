<?php
include('db_connection.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = "DELETE FROM `students` WHERE `id`='$id'";
    $result = mysqli_query($connect,$query);

    
    
    if(!$result){
        die("Delete Failed! ".mysqli_error());
    }
    else{
        header('location:index.php?insert_message=Student deleted.');
    }
    
}
?>