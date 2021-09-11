<?php
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];

$query=mysqli_query($conn,"select * from company where id= '$id'");
while($row=mysqli_fetch_array($query)){
  $company=$row['company'];
  $Description=$row['Description'];
  $admin=$row['admin'];
  

  

  
}

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="#"> update company</a></li>
    
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2"> Update Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
             <!-- <a class="btn btn-primary" href="add_customer.php">Add Customers</a> -->
            </div>
          </div>

          <div style="width:60%; height:50%;margin-left:25%; background-color:#F2F4F4;" >
          <div id="msg"></div>
          
          <form action="" method="post" style="margin:3%; padding:3%;" name="customer_form" id="customer_form">
          <div class="form-group">
          <label for="Customer Email">Enter company name </label>
          <input type="text" name="company" id="company" class="form-control" value="<?php echo $company ;?>" placeholder="Enter company name">
         
          </div>
          <div class="form-group">
          <label for="Customer Username">Description</label>
         <textarea name="Description" id="Description" class="form-control" cols="30" rows="10">
         <?php echo $Description; ?>

         </textarea>
         
          </div>
          <div class="form-group">
          <label for="Customer Username">Select company Admin</label>
          <select name="admin" class="form-control" id="admin" value="">
          <?php
          include('connection/db.php');
          $sql=mysqli_query($conn , " select * from admin_login where admin_type='2'");
          while($row=mysqli_fetch_array($sql)){ ?>
          <option value="<?php echo $row['admin_email']; ?>"> <?php echo $row['admin_email']; ?></option>

         <?php  } ?>
         </select>
          </div>
         
         
          <input type="hidden" id="id" name="id" value="<?php echo $_GET['edit'] ;?>"> 
          <div class="form-group">
         
          <input type="submit" class="btn btn-block btn-success" placeholder="update"  name="submit" id="submit">
          </form>
          </div>

         

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- datatables plugin  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js">

    </script>
     <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">

</script>



  
  </body>
</html>
<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
  $id=$_POST['id'];
  $company=$_POST['company'];
  $Description=$_POST['Description'];
  $admin=$_POST['admin'];
 

  $query1=mysqli_query($conn, " update company set company='$company', Description='$Description', admin='$admin' where id='$id'");

  if($query1){
  echo "<script>alert('Record has been updated successfully !!!')<?script>";
}
else{
  echo "<script>alert('some error , please try again !!!')<?script>";
}


}

?>
