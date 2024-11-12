<?php
  session_start();
  include('admin/coding/inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include("coding/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("coding/inc/nav.php");?>
  <!-- End Navigation -->

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">WELCOME TO WEERESQ</h1>
    <hr>

    <!-- About Section -->
    <div class="row">
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">ABOUT WEERESQ</h4>
          <div class="card-body" style="text-align:justify;">
            <p class="card-text"> Welcome to WeeResq! This community-focused emergency app enhances public safety by
			providing essential tools and information for managing urgent situations. In an era where
			technology facilitates rapid access to critical information, WeeResq features an SOS button, first
			aid instructions, and a directory of nearby health facilities. By integrating these tools into a user-
			friendly platform, WeeResq empowers individuals with the knowledge and resources needed to
			respond effectively to emergencies, ultimately improving preparedness and saving lives. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header">WEERESQ MISSION</h4>
          <div class="card-body" style="text-align:justify;">
            <p class="card-text">
				WeeResq mission is to enhance community safety through innovative
				emergency management solutions. Our app is designed to provide essential tools and
				information for managing urgent situations, ensuring that individuals and communities are better
				prepared for any emergency.             
            </p>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <h2 class="center">GALLERY</h2>
    <hr>

    <div class="row justify-content-center">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 text-center">
          <a href="#"><img class="card-img-top" src="img/img3.jpg" alt=""></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 text-center">
          <a href="#"><img class="card-img-top" src="img/img4.jpg" alt=""></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100 text-center">
          <a href="#"><img class="card-img-top" src="img/img5.jpg" alt=""></a>
        </div>
      </div>
    </div>
    <br> <br>

    <!-- Button to trigger AJAX request -->
    <button id="getDataBtn" class="btn btn-primary">Get Data</button>

    <hr>
    <div id="responseMessage"></div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("coding/inc/footer.php");?>
  <!-- .Footer -->
  <!-- Bootstrap core JavaScript -->
  <script src="coding/jquery/jquery.min.js"></script>
  <script src="coding/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- AJAX Call to process.php -->
  <script>
    $(document).ready(function() {
      // Trigger the AJAX request when the button is clicked
      $('#getDataBtn').click(function() {
        $.ajax({
          url: 'process.php', // The PHP file to handle the request
          type: 'POST',
          data: {
            action: 'get_data' // Data sent to process.php
          },
          success: function(response) {
            // Parse the JSON response
            var data = JSON.parse(response);
            // Display the message in the responseMessage div
            $('#responseMessage').html('<div class="alert alert-success">' + data.message + '</div>');
          },
          error: function(xhr, status, error) {
            // Display error message if AJAX request fails
            $('#responseMessage').html('<div class="alert alert-danger">An error occurred: ' + error + '</div>');
          }
        });
      });
    });
  </script>

</body>

</html>
