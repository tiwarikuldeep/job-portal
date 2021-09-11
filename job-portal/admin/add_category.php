
<!-- includng header -->
<?php
include('include/header.php');
include('include/sidebar.php');
include('connection/db.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
    <li class="breadcrumb-item"><a href=""> Add category</a></li>
    
    
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2"> Add category</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
             <!-- <a class="btn btn-primary" href="add_customer.php">Add Customers</a> -->
            </div>
          </div>

          <div style="width:60%; height:50%;margin-left:25%; background-color:#F2F4F4;" >
          <div id="msg"></div>
          
          <form action="" method="post" style="margin:3%; padding:3%;" name="category_form" id="category_form">
          <div class="form-group">
          <label for="Customer Email">category Name </label>
          <input type="text" name="category" id="category" class="form-control" placeholder="Enter category Name ">
         
          </div>
          <div class="form-group">
          <label for="Customer Username">Description</label>
         <textarea name="Description" id="Description" cols="30" rows="10" class="form-control"></textarea>
         
          </div>
         
          
          <div class="form-group">
         
          <input type="submit" class="btn btn-block btn-success" placeholder="save"  name="submit" id="submit">
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
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
$(document).ready(function()
{
  $("#submit").click(function()
  {
    // var email=$("#email").val();
    // alert(email); to check if working or not email entred or not 
    var category=$("#category").val();
    var Description=$("#Description").val();
    if(Description==''){
        alert("Please enter description !! ");
        return false;
    }
    if(category==''){
        alert("Please enter category Name !! ");
        return false;
    }
  
    // alert(admin_type); checking 

    var data=$("#category_form").serialize();


    // calling ajax 
    $.ajax({
        type:"POST",
        url:"category_add.php",
        data:data,
        success:function(data){
          alert(data);
        }
    });
  });
});

</script>


  
  </body>
</html>
