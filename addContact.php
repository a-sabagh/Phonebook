<?php
include_once 'database.php';
if(isset($_POST['add_contact'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pnumber = $_POST['pnumber'];
    $group = $_POST['group'];
        $query = "INSERT INTO contacts(first_name , last_name , phone_number , group_id) VALUES('{$fname}' , '{$lname}' , '{$pnumber}' , {$group})";
    $result = mysqli_query($link, $query);
    header("Location: index.php");
}else{
    header('Location: index.php');
}