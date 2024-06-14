<?php include('header.php'); ?>
<?php include('db_connection.php'); ?>

<center>
  <h4>Add new students:</h4>
  <form action="add_student.php" method="POST">
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="text" name="age" placeholder="Age">
    <input type="submit" name="add_student" value="Add Student">
  </form>
</center>

<center>
  <h4>Update student list:</h4>
  <form action="update_student.php" method="POST">
    <input type="text" name="id" required placeholder="ID">
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="text" name="age" placeholder="Age">
    <input type="submit" name="update_student" value="Update">
  </form>
</center>


<!-- form submission feedback  -->
<center>
  <?php
  if (isset($_GET['insert_message'])) {
    echo $_GET['insert_message'];
  }
  ?>
</center>
<!-- Students Data Table  -->
<table>
  <!-- table column header  -->
  <thead>
    <!-- first row of table head  -->
    <tr>
      <!-- table cell header  -->
      <th>id</th>
      <th>first_name</th>
      <th>last_name</th>
      <th>age</th>
      <th>Delete</th>
    </tr>
  </thead>

  <!-- table body  -->
  <tbody>
    <?php
    $query = "select * from `students`";
    $result = mysqli_query($connect, $query);
    if (!$result) {
      die("mySQL query failed" . mysqli_error());
    } else {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['first_name'] ?></td>
          <td><?php echo $row['last_name'] ?></td>
          <td><?php echo $row['age'] ?></td>
          <td><button><a href="delete_student.php?id=<?php echo $row['id'] ?>">Delete<button></td>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
</table>


<?php include('footer.php'); ?>