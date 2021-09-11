<?php
include('connection/db.php');
$del=$_GET['del'];

$query=mysqli_query($conn , " delete from company where id='$del'");
if($query){
    echo "<script>alert('Record has been deleted successfully !!!')<?script>";
    header('location:create_company.php');
}
else{
    echo "<script>alert('Record has not been deleted  !!!')<?script>";
}

?>