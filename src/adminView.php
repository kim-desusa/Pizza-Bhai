<?php
session_start();
if(isset($_SESSION['id'])==Null){
  session_destroy();
  header("Location:index.php");
}
$dbname= "pizzabhai";
$tblname= "emplist";
$conn= mysqli_connect("localhost", "root","",$dbname);
$id= $_SESSION['id'];
$name= $_SESSION['usrName'];
$pagename = $name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  echo "
  <title>$pagename</title>
  ";
  ?>
</head>
<body>
  
</body>
</html>