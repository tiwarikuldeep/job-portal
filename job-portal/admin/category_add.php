<?php
include('connection/db.php');

$category = $_POST['category'];
$des=$_POST['Description'];



$query=mysqli_query($conn," insert into job_category(category , des) values('$category','$des')");

if($query){
    echo "Data has been successfully inserted";
}
else{
    echo "some error please try again";
}

?> 