
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>sign in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center" action="new-post.php" method="post">
    <form class="form-signin">
      <img class="mb-4" src="images/logo4.png" alt="" width="170" height="150">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <!-- <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
      </div>
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="sign in">
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
<?php

include('connection/db.php');
if(isset($_POST['submit']))
{
 $email=$_POST['email'];
 $pass=$_POST['password'];


$query = mysqli_query($conn,"select * from admin_login where admin_email='$email' and admin_pass='$pass' and where admin_type='2'");
if($query)
{



if(mysqli_num_rows($query)>0)
{
    $_SESSION['email']=$email;
    header('location:admin/admin_dashboard.php');
}
else{
    echo "<script>alert('Email or Password incorrect , Please try again')</script>";
}
}
}

?>

