<?php
include_once 'database.php';
if(isset($_POST['add_group'])){
    $group_name = $_POST['group'];
    $query = "INSERT INTO groups( group_name ) VALUE('{$group_name}')";
    mysqli_query($link, $query);
    header("Location: index.php");
}else{
    header('Location: index.php');
}
