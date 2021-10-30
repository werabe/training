<?php
include('connection.php');



//delete user
if(isset($_GET['name'])){
    $delete_query="DELETE FROM user where first_name='".$_GET['name']."'";
   
    $result=mysqli_query($conn,$delete_query);
    if($result){
        echo "User Deleted Successfully";
    }   
}
$user_query="SELECT * FROM user";
$result=mysqli_query($conn,$user_query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Office</th>
                <th>Action1</th>
                <th>Action2</th>
            </tr>
        </thead>
       <tbody>
    <?php
    $count=0;
    while($row=mysqli_fetch_assoc($result)){
        $count++;
        echo "<tr>";
        echo "<td>".$count."</td>";
        echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['position']."</td>";
        echo "<td>".$row['office']."</td>";
        echo "<td><a href='?name=".$row['first_name']."'>Delete</a></td>";
        echo "<td><a href='#'>Update</a></td>";
      
        echo "</tr>";
    }
    ?>
       </tbody>
    </table>
</body>
</html>