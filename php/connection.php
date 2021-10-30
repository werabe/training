<?php
//database connection
    $host="localhost";
    $username="extra";
    $password="Qwerty12!@";
    $database="helpdesk";

  $conn=  mysqli_connect($host,$username,$password,$database);
 if(!$conn){
     die("connection error");
 }
  ?>