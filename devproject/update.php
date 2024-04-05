<?php
    include "conn.php";
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn,"SELECT * FROM tbl_list WHERE id='$ref_id'");

    while($d=mysqli_fetch_object($getdata)){
        $fname = $d -> fn;
        $lname = $d -> ln;
        $sec = $d -> section;
        $year = $d -> year;
        $course = $d -> course;
        $age = $d -> age;
        $email = $d -> email;
        $gender = $d -> gender;
        $phone = $d -> pn;
        $address = $d -> address;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>

<div class="container">

<h1>Update Records</h1>
    <form action="process.php?id=<?php echo $ref_id;?>" method="POST">

    <div class="user-details">

    <div class="input-box">
        <label> First Name: </label> </br>
        <input type="text" name="update_fn" value="<?php echo $fname;?>" required> </p> 
    </div>

    <div class="input-box">
        <label> Last Name: </label> </br>
        <input type="text" name="update_ln" value="<?php echo $lname;?>" required> </p> 
    </div>

    <div class="input-box">
        <label> Section: </label> </br>
        <input type="text" name="update_sec" value="<?php echo $sec;?>" required> </p> 
    </div>

    <div class="input-box">
        <label> Year: </label> </br>
        <input type="text" name="update_year" value="<?php echo $year;?>" required> </p>
    </div>

    <div class="input-box">
        <label> Course: </label> </br>
        <input type="text" name="update_course" value="<?php echo $course;?>" required> </p>
    </div>

    <div class="input-box">
        <label> Age: </label> </br>
        <input type="text" name="update_age" value="<?php echo $age;?>" required> </p>
    </div>

    <div class="input-box">
       <label> Email: </label> </br>
       <input type="text" name="update_email" value="<?php echo $email;?>" required> </p>
    </div>

    <div class="input-box">
       <label> Gender: </label> </br>
      <input type="text" name="update_gender" value="<?php echo $gender;?>" required> </p>
    </div>

    <div class="input-box">
      <label> Phone Number: </label> </br>
      <input type="text" name="update_pn" value="<?php echo $phone;?>" required> </p>
    </div>

    <div class="input-box">
      <label> Address: </label> </br>
     <input type="text" name="update_address" value="<?php echo $address;?>" required> </p>
    </div>

    <div class="button">
    <input type="submit" name="update_tbl_list" value="UPDATE">
    </div>

    </div>
</form>

</div>
    
</body>
</html>