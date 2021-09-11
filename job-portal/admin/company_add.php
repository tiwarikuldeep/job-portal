<?php
include('connection/db.php');

$company = $_POST['company'];
$Description=$_POST['Description'];
$admin=$_POST['admin'];


$query=mysqli_query($conn," insert into company(company , Description , admin ) values('$company','$Description','$admin')");

if($query){
    echo "Data has been successfully inserted";
}
else{
    echo "some error please try again";
}

?> 