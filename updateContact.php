<?php
include_once 'database.php';
if(isset($_POST['edit_contact'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pnumber = $_POST['pnumber'];
    $group = $_POST['group'];
    $contact_id = $_GET['contact_id'];
    $query = "UPDATE contacts SET first_name='{$fname}' , last_name='{$lname}' , phone_number='{$pnumber}' , group_id={$group} WHERE id={$contact_id}";
    $result = mysqli_query($link, $query);
    header("Location: index.php");
}else{
    header('index.php');
}