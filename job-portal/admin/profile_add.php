<?php
session_start();
include('connection/db.php');
$img=$_FILES['img']['name'];
$user_email=$_SESSION['email'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$number=$_POST['number'];
$email=$_POST['email'];
$tmp_name=$_FILES['img']['tmp_name'];

move_uploaded_file($_FILES["img"]["tmp_name"],'profile_img/'.$img);
$query=mysqli_query($conn, " insert into profile(img , name , dob,number,email,user_email)values('$img','$name','$dob','$number','$email','$user_email') ");
if($query)
{
    echo "<h1> Profile had been added successfully </h1>";
}
else{
    echo " <h1> some error Please try again </h1>";
}

?>