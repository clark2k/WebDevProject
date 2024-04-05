<?php
include "conn.php";

//this code is for attendance

if(isset($_POST['attendance'])){

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $sec = $_POST['sec'];
    $year = $_POST['year'];
    $course = $_POST['course'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pn = $_POST['pn'];
    $address = $_POST['address'];

    $insert = mysqli_query($conn, "INSERT INTO tbl_list
    VALUES('0','$fn','$ln','$sec','$year','$course','$age','$email','$gender','$pn','$address')");

    if($insert == true){
        ?>
        <script>
                alert("Data is Successfully Inserted");
                window.location.href="index.php";
        </script>
        <?php
    }else{
        ?>
            <script>
                alert("Data is not Inserted! \nPlease try again!");
                window.location.href="index.php";
            </script>
            <?php
            }
        }

        // this program is for update tbl_list
    
        if(isset($_POST['update_tbl_list'])){
            $ref_id = $_GET['id'];

            $a = $_POST['update_fn'];
            $b = $_POST['update_ln'];
            $c = $_POST['update_sec'];
            $d = $_POST['update_year'];
            $e = $_POST['update_course'];
            $f = $_POST['update_age'];
            $g = $_POST['update_email'];
            $h = $_POST['update_gender'];
            $i = $_POST['update_pn'];
            $j = $_POST['update_address'];

            $update_students = mysqli_query($conn, "UPDATE tbl_list 
            SET fn='$a', ln='$b', section='$c', year='$d', course='$e', age='$f', email='$g', gender='$h', pn='$i', address='$j' WHERE id='$ref_id'");
    
    if($update_students == true){
        ?>
        <script>
                alert("Data is Updated!");
                window.location.href="records.php";
        </script>
        <?php
    }else{
        ?>
            <script>
                alert("Error in Updating!");
                window.location.href="records.php";
            </script>
            <?php
            }
        }
    




?>