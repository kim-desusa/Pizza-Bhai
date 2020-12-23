<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Process</title>
</head>
<body>
<?php
  $id= $_POST['id'];
  $name= $_POST['name'];
  $department= $_POST['department'];
  $email= $_POST['email'];
  $phoneNumber= $_POST['phoneNumber'];

  $conn= mysqli_connect('localhost', 'root', '', 'dbstudentinfo');
  $query= "UPDATE `tbl1` SET `name`='$name',`department`='$department',`email`='$email',`phoneNumber`='$phoneNumber' WHERE `id`='$id'";

  if(mysqli_query($conn, $query)){
    header("Location: dashboard.php");
  }
  else{
    echo "<script>
    alert('error: Unable to update');
    </script>";
  }
?>
</body>
</html>
