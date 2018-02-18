<?php
session_start();
include 'config.php';

//Session Check
try {
if (!isset($_SESSION['scott-admin'])) {
header('Location:login.php');
}
} catch (Exception $e) {
echo $e;
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Job</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
  </head>
  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php  include 'admin_nav.php'; ?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Job</li>
        </ol>
        
      </div>
      <h4><?php if (!empty($_GET['n'])) {
        echo $_GET['n'];
      } ?></h4>
      <div class="container">
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Edit Job</div>
          <div class="card-body">
  <!-- //Form Starts Here -->
  <?php 
    $qry="SELECT * FROM jobs_list WHERE id=".$_GET['id'];
    $run=mysqli_query($connect, $qry);
    $data=mysqli_fetch_assoc($run);
   ?>
            <form method="post" action="update_job.php">
              <input type="hidden" name="job_id" value="<?php echo $data['id'] ?>">
              <div class="form-group">
                <label>Position Title</label>
                  <input type="text" name="position_title" class="form-control" placeholder="Enter Position Title" value="<?php echo $data['position_title'] ?>">
              </div>

              <div class="form-group">
                <label for="Positiontype">Position Type</label>
                <select class="form-control" name="position_type">
                  <option value="<?php echo $data['position_type'] ?>">
                    <?php echo $data['position_type'] ?>
                  </option>
                  <option value="Temporary(contract)">Temporary(Contract)</option>
                  <option value="Temp-to-Direct">Temp-to-Direct</option>
                  <option value="Direct Hire(Permanent)">Direct Hire(Permanent)</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="Responsbilities">Position Responsibilities</label>
                <textarea name="responsibility" cols="10" rows="6" class="form-control" placeholder="Enter Some text here"><?php echo $data['responsibility'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="Requirements">Minimum Job Requirements</label>
                <textarea name="requirements" cols="10" rows="6" class="form-control" placeholder="Enter Some text here"><?php echo $data['requirements'] ?></textarea>
              </div>

              <div class="form-group">
                <label for="skills">Professional certifications, software knowledge, years of relevant experience, etc.</label>
                <textarea name="skills" cols="10" rows="6" class="form-control" placeholder="Enter Some text here"><?php echo $data['skills'] ?></textarea>
              </div>
              
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="location">Position Location</label>
                    <input class="form-control" type="text" name="location" placeholder="Enter location Names" value="<?php echo $data['location'] ?>">
                  </div>
                  
                  <div class="col-md-6">
                    <label for="education">Required Education</label>
                    <select name="education" class="form-control">
                      <option value="<?php echo $data['education'] ?>">
                        <?php echo $data['education'] ?>
                      </option>
                      <option value="None">None</option>
                      <option value="Vocational">Vocational</option>
                      <option value="High School Diploma">High School Diploma</option>
                      <option value="Associate's Degree">Associate's Degree</option>
                      <option value="Bachelor's Degree">Bachelor's Degree</option>
                      <option value="Master's Degree">Master's Degree</option>
                      <option value="Doctorate">Doctorate</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="hiring_time">Hiring Timetable</label>
                <div class="form-control">
                  <?php 
                  switch ($data['hiring_time']) {
                    case 'ASAP':
                      $checked1=true; $checked2=false; $checked3=false; $checked4=false;
                      break;
                    case '30 to 60 days':
                      $checked1=false; $checked2=true; $checked3=false; $checked4=false;
                      break;
                    case '60 to 90 days':
                      $checked1=false; $checked2=false; $checked3=true; $checked4=false;
                      break;
                    case '90+Days':
                      $checked1=false; $checked2=false; $checked3=false; $checked4=true;
                      break;
                    
                    default:
                      $checked1=false; $checked2=false; $checked3=false; $checked4=false;
                      break;
                  }
                   ?>
                  <input type="radio" name="hiring_time" checked="<?php echo $checked1; ?>" value="ASAP">ASAP<br>
                  <input type="radio" name="hiring_time" checked="<?php echo $checked2; ?>" value="30 to 60 days">30 to 60 days<br>
                  <input type="radio" name="hiring_time" checked="<?php echo $checked3; ?>" value="60 to 90 days">60 to 90 days<br>
                  <input type="radio" name="hiring_time" checked="<?php echo $checked4; ?>" value="90+Days">90+Days<br>
                </div>
              </div>

              <div class="form-group">
                <label for="comments">Additional Comments</label>
                <textarea name="comments" cols="10" rows="6" class="form-control" placeholder="Enter Comments here"><?php echo $data['comments'] ?></textarea>
              </div>

              <fieldset class="form-control">
                <legend>Company &amp; Contact Information</legend>
                <div class="form-group">
                  <label for="company_name">Company Name</label>
                  <input class="form-control" type="text" name="company_name" placeholder="Enter Company Name" value="<?php echo $data['company_name'] ?>">
                </div>
                
                <div class="form-group">
                  <label for="employer_name">Hiring Manager Name</label>
                  <input class="form-control" type="text" name="employer_name" placeholder="Enter Hiring Manager Name" value="<?php echo $data['employer_name'] ?>">
                </div>

                <div class="form-group">
                  <label for="employer_email">Hiring Manager Email Address</label>
                  <input class="form-control" type="email" name="employer_email" placeholder="Enter Hiring Manager Email" value="<?php echo $data['employer_email'] ?>">
                </div>

                <div>
                  <label for="employer_phone">Hiring Manager Phone Number</label>
                  <input type="number" name="employer_phone" class="form-control" value="<?php echo $data['employer_phone'] ?>">
                </div>
              </fieldset>
              
              <fieldset class="form-control">
                <legend>Office Address</legend>
                <div class="form-group">
                  <label>Street Address</label>
                  <input type="text" name="street" class="form-control" value="<?php echo $data['street'] ?>">
                </div>
                
                <div class="form-group">
                  <label>Street Address Line 2</label>
                  <input type="text" name="street2" class="form-control" value="<?php echo $data['street2'] ?>">
                </div>
                
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-sm-6">
                      <label>City</label>
                      <input type="text" name="city" class="form-control" value="<?php echo $data['city'] ?>">
                    </div>

                    <div class="col-sm-6">
                      <label>State/Province</label>
                      <input type="text" name="state" class="form-control" value="<?php echo $data['state'] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-row">
                    <div class="col-sm-6">
                      <label>Postal/Zip Code</label>
                      <input type="number" name="zip_code" class="form-control" value="<?php echo $data['zip_code'] ?>">
                    </div>

                    <div class="col-sm-6">
                      <label>Country</label>
                      <select name="country" class="form-control">
                        <option value="<?php echo $data['country'] ?>">
                          <?php echo $data['country'] ?>
                        </option>
                        <option value="India">India</option>
                        <option value="America">America</option>
                      </select>
                    </div>
                  </div>
                </div>

              </fieldset>

              <input type="submit" name="submit" value="Add Product" class="btn btn-primary btn-block">
            </form>
  <!-- Form Closed Here -->
            
          </div>
        </div>
      </div>
      <!-- /.container-fluid-->
      <!-- /.content-wrapper-->
      <?php include 'admin_footer.php'; ?>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/popper/popper.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin.min.js"></script>
    </div>
  </body>
</html>