
<?php
include('db_connection.php');

if(isset($_POST['update_student'])){

   $id = $_POST['id'];
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $age = $_POST['age'];



    $query = "UPDATE  `students` SET `first_name`='$first_name',`last_name`='$last_name',`age`='$age' WHERE `id`='$id' ";
    $result = mysqli_query($connect, $query);

    
    if(!$result){
        die("Update Failed! ".mysqli_error());
    }
    else{
        header('location:index.php?insert_message=student updated.');
    }
}

?>