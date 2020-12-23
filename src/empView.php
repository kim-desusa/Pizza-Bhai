<?php
session_start();
if(isset($_SESSION['id'])==Null){
  session_destroy();
  header("Location:index.php");
}
$dbname= "pizzabhai";
$tblname= "emplist";
$conn= mysqli_connect("localhost", "root","",$dbname);
$getid = $_GET['id'];
$id= $_SESSION['id'];
$name= $_SESSION['usrName'];
$pagename = $name;
$sql1= "SELECT * FROM $tblname WHERE uid = '$id'";
$result1= mysqli_query($conn, $sql1);
$row= mysqli_fetch_assoc($result1);
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
    <div class="container">
      <div class="nav">
      </div>
      <div class="middle">
        <div class="photo-section">
          <a href="downloadProcess.php?id=<?php echo $getid;?>&post=<?php echo $row['post'];?>">
          <img src=<?php echo $row['photo']; ?> alt="ERROR 503">
          </a>
          <a href="edit.php" class="button">Edit</a>
        </div>
        <div class="data-section">
          <h1><?php echo $row['name']; ?></h1>
          <h3><?php echo $row['post']; ?></h3>
          <h2>Personal Details</h2>
          <table>
            <tr>
              <td>Em@il</td>
              <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td><?php echo $row['phn']; ?></td>
            </tr>
            <tr>
              <td>Birthday</td>
              <td><?php echo $row['date']; ?></td>
            </tr>
            <tr>
              <td>Blood Group</td>
              <td><?php echo $row['bg']; ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $row['gender']; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><?php echo $row['address']; ?></td>
            </tr>
            <tr>
              <td>NID</td>
              <td><?php echo $row['nid']; ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
</body>
</html>