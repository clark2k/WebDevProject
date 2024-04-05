<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="nav">
        <a href="index.php"> Add Students </a>
        <a href="records.php"> View Records </a>
    </div>

<div class="container">
    
    
    <h1>Add Students Form</h1>

    <form action="process.php" method="POST">

    <div class="user-details">

    <div class="input-box">
        <label> First Name: </label> </br>
        <input type="text" name="fn" placeholder="Enter Firstname here..." required> </p> 
    </div>

    <div class="input-box">
        <label> Last Name: </label> </br>
        <input type="text" name="ln" placeholder="Enter Lastname here..." required> </p> 
    </div>

    <div class="input-box">
        <label> Section: </label> </br>
        <input type="text" name="sec" placeholder="Enter Section here..." required> </p> 
    </div>

    <div class="input-box">
        <label> Year: </label> </br>
        <input type="text" name="year" placeholder="Enter Year here..." required> </p>
    </div>

    <div class="input-box">
        <label> Course: </label> </br>
        <input type="text" name="course" placeholder="Enter Course here..." required> </p>
    </div>

    <div class="input-box">
        <label> Age: </label> </br>
        <input type="text" name="age" placeholder="Enter Age here..." required> </p>
    </div>
    
    <div class="input-box">
        <label> Email: </label> </br>
        <input type="text" name="email" placeholder="Enter Email here..." required> </p>
    </div>

    <div class="input-box">
        <label> Gender: </label> </br>
        <input type="text" name="gender" placeholder="Enter Gender here..." required> </p>
    </div>

    <div class="input-box">
        <label> Phone Number: </label> </br>
        <input type="text" name="pn" placeholder="Enter Phone Number here..." required> </p>
    </div>

    <div class="input-box">
        <label> Address: </label> </br>
        <input type="text" name="address" placeholder="Enter Address here..." required> </p>
    </div>
    
    <div class="button">
    <input type="submit" name="attendance" value="SUBMIT">
    </div>

        </div>
    </form>
</div>

</body>
</html>