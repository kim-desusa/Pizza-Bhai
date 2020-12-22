<?php
// connect to database
$con=mysqli_connect("localhost","root","","dbstudentinfo");

// Downloads files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

   // fetch file to download from database
   $sql ="SELECT * FROM tbl1 WHERE id = $id";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $row['photo'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('upload/' . $row['photo']));
        readfile('upload/' . $row['photo']);
        header('Location: dashboard.php');
        exit;
    }
}
?>