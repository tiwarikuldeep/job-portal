<?php
include('include/my_profile.php');

?>
<br>
    <div style="margin-left:25%;width:50%;border:1px solid gray;padding:10px"> 
    <form action="profile_add.php" method="post"id="profile_form" name="profile_form" enctype="multipart/form-data">
    <div class="row">
    <div class="col-md-4">
    <img src="images/person_1.jpg" class="img-thumbnail"alt="cinque Terre">
    </div>
    
    <div class="col-md-6">
    <input type="file" class="form-control" name="img" name="img-profile " id="img-profile">
    </div>
    <div class="col-md-4">
    <!-- <input type="submit" name="submit" id="img" placeholder="Upload" value="Upload" class="btn btn-success" > -->
    </div>
    </div>
    <div style="margin-left:30%">
    <div class="row">
    <div class="col-md-6">
    <td> Enter Your Name:</td>
    </div>
    <div class="col-md-6">
    <td><input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control"></td>
    </div>
    
    </div>
    <br>
    <div class="row">
    <div class="col-md-6">
    <td> Enter Your Dob:</td>
    </div>
    <div class="col-md-6">
    <td><input type="date" name="dob" id="dob" placeholder="Enter Your DOB" class="form-control"></td>
    </div>
   
    </div>
    <br>
    <div class="row">
    <div class="col-md-6">
    <td> Enter Your Number :</td>
    </div>
    <div class="col-md-6">
    <td><input type="number" name="number" id="number" placeholder="Enter Your Number" class="form-control"></td>
    </div>
    </div>
    
    <br>
    <div class="row">
    <div class="col-md-6">
    <td> Enter Your Email :</td>
    </div>
    <div class="col-md-6">
    <td><input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control"></td>
    </div>
    
    </div>
    <div class="form-group">
    <input type="submit" name="submit" id="submit" placeholder="update" value="update" class="btn btn-success">
    </div>
    </div>
    </div>
    </form>
    
    </div>
    <br>

    
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>For future real time updates related to jobs and newly added features , Kindly subscribe to our newsletter .</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
include('include/footer.php');
    ?>
<!-- <script>
$(document).ready(function()
{
  $("#submit").click(function(e){
  e.preventDefault();
  
    var data=$("#profile_form").serialize();


// calling ajax 
$.ajax({
    type:"POST",
    url:"profile_add.php",
    data:data,
    success:function(data){
      alert(data);
    }
});
  });
});
</script> -->
    