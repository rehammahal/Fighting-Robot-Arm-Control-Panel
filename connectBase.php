<?php

    $conn = new mysqli('localhost', 'root', '', 'robotarmbase');
    if($conn){
        echo 'Successfully Connected <br>';
    }else{
        echo 'Connection Failure <br>';
    }


    if(isset($_POST['backward'])) {
        $backward = $_POST['backward'];
        $query = "INSERT INTO directions (dir) VALUES('$backward')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo 'You Are Moving Backward';
            } else {
                echo 'Failed Inserting Value';
            }
    } elseif(isset($_POST['left'])) {
        $left = $_POST['left'];
        $query = "INSERT INTO directions (dir) VALUES('$left')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo 'You Are Moving To Left';
            } else {
                echo 'Failed Inserting Value';
            }
    } elseif(isset($_POST['stop'])) {
        $stop = $_POST["stop"];
        $query = "INSERT INTO directions (dir) VALUES('$stop')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo 'You Are Stopped Now';
            } else {
                echo 'Failed Inserting Value';
            }
    } elseif(isset($_POST['right'])) {
        $right = $_POST["right"];
        $query = "INSERT INTO directions (dir) VALUES('$right')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                echo 'You Are Moving To Right';
            } else {
                echo 'Failed Inserting Value';
            }
    } elseif(isset($_POST['forward'])) {
        $forward = $_POST['forward'];
        $query = "INSERT INTO directions (dir) VALUES('$forward')";
        $query_run = mysqli_query($conn, $query);
            if($query_run) {
                $last_id = $conn->insert_id;
                echo 'You Are Moving Forward' ;
            } else {
                echo 'Failed Inserting Value';
            }
    }
    

?>