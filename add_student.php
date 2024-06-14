
<?php
include('db_connection.php');

if(isset($_POST['add_student'])){

   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $age = $_POST['age'];



    $query = "insert into students (`first_name`,`last_name`,`age`) values ('$first_name','$last_name','$age')";
    $result = mysqli_query($connect, $query);

    
    if(!$result){
        die("Query Failed! ".mysqli_error());
    }
    else{
        header('location:index.php?insert_message=Student Added in List.');
    }
}

?>