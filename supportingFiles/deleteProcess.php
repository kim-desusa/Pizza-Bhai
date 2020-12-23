<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Process</title>
</head>
<body>
  <?php
  $id= $_GET["id"];
  $conn= mysqli_connect("localhost","root","","dbstudentinfo");
  $query= "DELETE FROM tbl1 WHERE id='$id'";
  if(mysqli_query($conn,$query)){
    header("Location: http://localhost/tableManagement/dashboard.php");
  }
  else{
    echo '
    <script>
    alert("Deleting Process Failed");
    </script>';
  }
  ?>
</body>
</html>