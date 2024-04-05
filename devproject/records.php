<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Page</title>
    <link rel="stylesheet" href="records.css">
</head>
<body>

    <div class="nav">
        <a href="index.php"> Add Students </a>
        <a href="records.php"> View Records </a>
    </div>


<h1>List of Students</h1>


    <table class="content-table">
        <thead>
            <tr>
                <th> Id</th>
                <th> Firstname</th>
                <th> Lastname</th>
                <th> Section</th>
                <th> Year</th>
                <th> Course</th>
                <th> Age</th>
                <th> Email</th>
                <th> Gender</th>
                <th> PhoneNumber</th>
                <th> Address</th>
                <th> Action 1</th>
                <th> Action 2</th>
            </tr>
        </thead>
        
            <?php
            $getdata = mysqli_query($conn, "SELECT * FROM tbl_list");
            while($row = mysqli_fetch_array($getdata)){
            ?>
    <tbody>
        <tr class="active-row">
            <td> <?php echo $row['id'];?> </td>
            <td> <?php echo $row['fn'];?> </td>
            <td> <?php echo $row['ln'];?> </td>
            <td> <?php echo $row['section'];?> </td>
            <td> <?php echo $row['year'];?> </td>
            <td> <?php echo $row['course'];?> </td>
            <td> <?php echo $row['age'];?> </td>
            <td> <?php echo $row['email'];?> </td>
            <td> <?php echo $row['gender'];?> </td>
            <td> <?php echo $row['pn'];?> </td>
            <td> <?php echo $row['address'];?> </td>
            <td> <a href="update.php?id=<?php echo $row['id']; ?>"> Update </a> </td>
            <td> <a href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a> </td>
        </tr>
    </tbody>
            <?php
            }
            ?>


    </table>


    
</body>
</html>