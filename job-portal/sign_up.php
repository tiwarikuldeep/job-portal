
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Create New Account</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="sign_up.php" method="post">
      <img class="mb-4" src="images/NA2.jpeg" alt="" width="200" height="170">
      <!-- <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1> -->
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      <label for="first_name" class="sr-only">First name</label>
      <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name" required>

      <label for="last_name" class="sr-only">Last name</label>
      <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name" required>

      <label for="dob" class="sr-only">Date of Birth</label>
      <input type="date" id="dob" name="dob" class="form-control" placeholder="Enter Date of Birth" required>

      <label for="mobile" class="sr-only">Mobile No</label>
      <input type="number" id="mobile_no" name="mobile_no" class="form-control" placeholder="Enter Mobile No" required>
      <div class="checkbox mb-3"> </div>
     
  <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" id="submit" value="Sign up">
      <a href="job-post.php">Already Have Account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
 $email=$_POST['email'];
 $password=$_POST['password'];
 $first_name=$_POST['first_name'];
 $last_name=$_POST['last_name'];
 $dob=$_POST['dob'];
 $mobile_no=$_POST['mobile_no'];

 $query=mysqli_query($conn, " insert into jobskeer (email,password,first_name,last_name,dob,mobile_no),values('$email','$password','$first_name','$last_name','$dob','$mobile_no')");

 if($query)
 {
   echo "<script>alert('Now you can login')</script>";
   header('location:job-post.php');
 }
 else{
   echo "<script>alert('Error try again')</script>";
 }
}
?>
