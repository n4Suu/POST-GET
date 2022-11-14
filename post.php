<?php
    $con = mysqli_connect('localhost', 'root', '', 'elomordo');
    
    if(isset($_POST['fname'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $location = $_POST['location'];

    $sql = "INSERT INTO user VALUES ('', '$fname', '$lname', '$age', '$email', '$location')";

    $rs = mysqli_query($con, $sql);
    }
    
    mysqli_close($con);

?>