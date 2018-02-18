<?php 
session_start();
  include 'config.php';
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
  <title>Scott-HCS Admin Panel</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include 'admin_nav.php' ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Dashboard
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Jobs Report</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Position Title</th>
                  <th>Position Type</th>
                  <th>Location</th>
                  <th>Company Name</th>
                  <th>Employer Name</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
                </tr>
              </thead>
              <!-- <tfoot>
                <tr>
                  <th>Position Title</th>
                  <th>Position Type</th>
                  <th>Location</th>
                  <th>Company Name</th>
                  <th>Employer Name</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
                </tr>
              </tfoot> -->
              <tbody>
                <?php 
  $dataqry="SELECT * FROM jobs_list";
  $datarun= mysqli_query($connect,$dataqry);
while ( $dataresult= mysqli_fetch_assoc($datarun)) {
  echo "<tr><td>".$dataresult['position_title']."</td>";
  echo "<td>".$dataresult['position_type']."</td>";
  echo "<td>".$dataresult['location']."</td>";
  echo "<td>".$dataresult['company_name']."</td>";
  echo "<td>".$dataresult['employer_name']."</td>";
  echo "<td><a href='edit_job.php?id=".$dataresult['id']."'><i class='fa fa-pencil-square' aria-hidden='true'></i>EDIT</a></td>";
  echo '<td>
            <a href="delete_job.php?id='.$dataresult["id"].'"><i class="fa fa-trash" aria-hidden="true"></i>
            DELETE</a>
        </td>';

  echo "</tr>";
}

 ?>
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'admin_footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- //Start Logout Modal-->
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Logout Modal -->
    <!-- //Start DELETE Modal-->
    <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Are you sure! You want to "DELETE" this job post.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href='delete_job.php?id=<?php //echo $dataresult['id']; ?>'>DELETE</a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End DELETE Modal -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
