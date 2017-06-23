<?php
$link = mysqli_connect('localhost' , 'root' , '' , 'phonebook');
if(mysqli_connect_errno()){
    printf("connection failed %s\n" , mysqli_connect_errno());
    exit();
}
mysqli_select_db($link , "contacts");