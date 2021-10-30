<?php
include('connection.php');

     //   $sql="create database helpdesk";
    //   $res=mysqli_query($conn,$sql);
    //   if($res){
    //       echo "Database created successfully<br>";
    //   }
    //CRUD -> create read update delete
    //user table
    //first name, middle name, last name, gender,age, office,position,title
    // $sql="create table user( 
    //     first_name VARCHAR(50),
    //     last_name VARCHAR(50),
    //     gender VARCHAR(15),
    //     age int,
    //     office TEXT,
    //     position VARCHAR(100),
    //     title VARCHAR(20)
    // )";

    //$res=mysqli_query($conn,$sql);

   // if($res){
    //    echo "User Table created successfully!!<br>";
    //}
    //user register
  
    
    




    if(isset($_POST['register'])){ //submit button clicked

        if(empty($_POST['firstName'])){
            echo "first Name required <br>";
        }else{
            //get user information
                $firstName   =$_POST['firstName'];
                $lastName    =$_POST['lastName'];
                $age         =$_POST['age'];
                $request     =$_POST['request'];
                $office      =$_POST['office'];


                $insert_sql="insert into user
                (first_name,last_name,gender,age, office,position, title) values
                 ('$firstName','$lastName','Male',$age,'$office','programmer','Mr')
                ";
                $res=mysqli_query($conn,$insert_sql);
                if($res){
                    echo "User REgistered successfully";
                }
                else
                {
                    echo mysqli_error($conn);
                }

        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>
<form action="" method="post">
    First Name: <input type="text" name="firstName" id="" required /></br>
    Last Name: <input type="text" name="lastName" id="" required></br>
    Age: <input type="number" name="age" id="" ></br>
    Office: 
    <select name="office" id="">
    <option value="ict">Select office</option>
       <optgroup label="Offices">
       <option value="ict">ICT Office</option>
        <option value="president">President Office</option>
        <option value="Finance">Finance</option>
        <option value="HR"> Human Resource</option>
        <option value="ExternalRelation"> External Relation</option>

       </optgroup>

       <optgroup label="Colleges">
       <option value="ict">College 1</option>
        <option value="president">College 2</option>
        <option value="Finance">College 3</option>
        <option value="HR"> College 4 </option>
        <option value="ExternalRelation"> External Relation</option>

       </optgroup>
      
    </select>
    <br>
    Request: <textarea name="request" id="" cols="30" rows="4" required>

    </textarea>
    <br>
    <input type="submit" value="Register" name="register">
</form>

</body>
</html>