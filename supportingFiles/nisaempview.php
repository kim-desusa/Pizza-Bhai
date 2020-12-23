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
$getid = $_GET['id'];
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
    <link rel="stylesheet" href="empViewStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Poppins:wght@200&display=swap" rel="stylesheet">
    <?php
    echo "
    <title>$pagename</title>
    ";
    ?>
  
</head>
<body>
    <div class="container">

      <div class="navbar">
        <div class="logo"><img src="PizzaBhai.png" alt="logo" srcset=""></div>
        <div></div>
        <div><a class="button" href="logoutProcess.php">Logout</a></div>
      </div>


    <div class="middle">
        <div class="personal-info-box">
        <div class="photo-section">
          <a href="downloadProcess.php?id=<?php echo $getid;?>&post=<?php echo $row['post'];?>">
            <img src=<?php echo $row['photo']; ?> alt="ERROR 503">
          </a>
          <a href="edit.php" class="button">Edit your profile</a>
          <a href="">Delete</a>
        </div>
        <div class="data-section">
            <h1><?php echo $row['name']; ?></h1>
            <h3><?php echo $row['post']; ?></h3>
          <h2>Personal Details</h2>
          <table>
            <tr>
              <td>Em@ail:</td>
              <td><?php echo $row['email']; ?></td>
              <td>Phone Number:</td>
              <td><?php echo $row['phn']; ?></td>
            </tr>
            <tr>
              <td>Birthday:</td>
              <td><?php echo $row['date']; ?></td>
              <td>Blood Group:</td>
              <td><?php echo $row['bg']; ?></td>
            </tr>
            
            <tr>
              <td>Gender:</td>
              <td><?php echo $row['gender']; ?></td>
              <td>NID:</td>
              <td><?php echo $row['nid']; ?></td>
            </tr>
            <tr>
              
              <td>Address:</td>
              <td><?php echo $row['address']; ?></td>
              
            </tr>
          </table>
        </div>
    </div>
    </div>
        
      <div class="footer"><div>
        Follow Us <br>
      <button>  <i class="fab fa-facebook-f"></i></button>
      <button><i class="fab fa-instagram"></i></button>
      <button><i class="fab fa-twitter"></i></button>
      </div>
      <div>© 2019 , Pizza Bhai. All rights reserved.</div>
      <div>Developed by 53batch, BU</div>
      </div>


    </div>
</body>
</html>