<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Registration</title>
  
</head>

<body>
  

<div>
  <?php
  if(isset($_POST['create'])){
    header("Location:index.php");
  }
  ?>
</div>
  <div class="box">

    <form action="regProcess.php" method="post"enctype="multipart/form-data">
    <form action="regFrom.php" method="post">
    <div class="container">
    <h1> Employee Registration</h1>
    <p>Fill up the form with correct values.</p>
<table>
  <tr>
    <td> <label for="userid"><b>Username: </b></label> </td>
    <td><input type="text" name="userid" required
    placeholder="Enter Your User Id"></td>
  </tr> 

  <tr>  
    <td><label for="password"><b>Password: </b></label></td>
    <td><input type="password" name="password" required
    placeholder="Enter Your Password"></td>
  </tr>  

  <tr> 
    <td><label for="firstname"><b>Name: </b></label></td>
    <td><input type="text" name="firstname" required
    placeholder="Enter Your Name"></td>
  </tr>

  <tr>  
    <td><label for="email"><b>Email Address: </b></label></td>
    <td><input type="email" name="email" required
    placeholder="Enter Your Email"></td>
  </tr>

  <tr>  
    <td><label for="phone"><b>Phone Number: </b></label></td>
    <td><input type="contact" name="phone" required
    placeholder="Enter Your Phone Number"></td>
  </tr> 

  <tr> 
    <td><label for="post"><b>Post: </b></label></td>
    <td><input type="text" name="post" required
    placeholder="Enter Your Post"></td>
  </tr> 

  <tr>
    <td><label for="nid"><b>National Id No: </b></label></td>
    <td><input type="text" name="nid" required
    placeholder="Enter Your NID No"></td>
  </tr>  

  <tr>
    <td><label for="paddress"><b>Present Address: </b></label></td>
    <td><input type="text" name="paddress" required
    placeholder="Enter Your Present Adress"></td>
  </tr>

  <tr>
    <td><label for="bgroup"><b>Blood Group: </b></label></td>
    <td><select name="bgroup">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB+</option>
                <option>AB-</option>
        </select></td>
    </tr>

  <tr>  
    <td><label for="gender"><b>Gender: </b></label></td>
    <td>
      <input type="radio" name="gender" value="Male">Male
      <input type="radio" name="gender" value="Female">Female
      <input type="radio" name="gender" value="other">Other
    </td>
  </tr>
  <tr>           
    <td><label for="date"><b>Birth Date: </b></label></td>
    <td><input type="Date" name="date"></td>
  </tr>  

  <tr>  
    <td><label for="file"><b>Photo</b></label></td>        
    <td><input type="file" name="file"></td>
  </tr>

</table>   

     <input type="submit" name="create" values="Sign Up">

     </div>

    </form>
  </div>
  
</body>
</html>