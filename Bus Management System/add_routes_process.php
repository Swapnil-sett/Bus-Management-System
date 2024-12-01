<?php
include './connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $fare = $_POST['fare'];
    $time = $_POST['time'];

    $sql = "INSERT INTO routes (source, destination, fare, TIME) VALUES('$source', '$destination', '$fare', '$time')";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "<script>window.location.href='./index.php';</script>";
     }else{
        echo "Error";
    }



}

?>