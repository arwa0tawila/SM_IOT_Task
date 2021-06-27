<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $_POST['btnvalue'] =  $_POST['btnvalue'] ?? 'off';
		//print_r($_POST['btnvalue']); die();
        // database connection code
        // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

        //$sql = "SELECT * FROM 'motors'";
        $con = mysqli_connect('localhost', 'root', '','motorsrobotarm');

        // get the post records
        $mot1 = $_POST['m1'];
        $mot2 = $_POST['m2'];
        $mot3 = $_POST['m3'];
        $mot4 = $_POST['m4'];
        $mot5 = $_POST['m5'];
        $mot6 = $_POST['m6'];
        $btnValue = $_POST['btnvalue'];
        $IDvalue = 1;

        //database insert SQL code for first time

        // $sql = "INSERT INTO motors (id,motor1,motor2,motor3,motor4,motor5,motor6,opration) VALUES ('1','$mot1', '$mot2', '$mot3', '$mot4', '$mot5' , '$mot6', '$btnValue')";

        //database insert SQL code for first time
        $sql = "UPDATE `motors` SET `id`='$IDvalue',`motor1`='$mot1',`motor2`='$mot2',`motor3`='$mot3',`motor4`='$mot4',`motor5`='$mot5',`motor6`='$mot6',`opration`='$btnValue' WHERE 1";

        // insert in database 
        $rs = mysqli_query($con, $sql);

        if($rs)
        {
            echo "Contact Records Inserted";
        } else {
            echo 'something wrong';
        }
    }

?>