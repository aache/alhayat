<?php
  include 'session.php';
  include  'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
 include 'head.php';
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php 
    include 'sidebar.php';
     ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php
         include 'topbar.php' ; 
       ?>
        <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Videos</h1>
            <a href="#"  data-toggle="modal" data-target="#addContactModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>Add Videos</a>
          </div>

          <!-- Content Row -->
          <!-- Dashboard Cards -->
          <?php 
          //include 'dashboard_cards.php' 
          ?>
          <!-- Dashboard Cards End -->

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <?php 
            //include 'area_chart.php'
             ?>
            <!-- Area Chart End-->

            <!-- Pie Chart -->
            <?php
            // include 'pie_chart.php';
             ?>
            <!-- Pie Chart End -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-5 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-body">
                  <iframe width="435" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>  
                </div>
              </div>
        </div>
        <div class="col-lg-6 mb-4">

          <!-- Project Card Example -->
          <!--div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" id="resp">SMS details</h6>
            </div>
            <div class="card-body">
              <h4 class="medium font-weight-bold">Message</h4>
              <textarea id="message" style="height:200px;" class="form-control">
              </textarea>
              <div style="padding:10px;">
                  <button class="btn btn-sm btn-primary" onClick="sendSMS()">Send</button>
              </div>
            </div>
          </div-->

          </div>
</div>
              <!-- Color System -->
              <?php 
              //include 'color_dashboard.php';
              ?>
              <!-- Color System End -->

          
        
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
       <?php include 'footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include 'logout_modal.php' ;?>
  <?php include 'add_videos.php' ;?>
  <!-- Logout Modal End--> 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- Page level plugins -->
  <!--script src="vendor/chart.js/Chart.min.js"></script-->

  <!-- Page level custom scripts -->
  <!--script src="js/demo/chart-area-demo.js"></script-->
  <!--script src="js/demo/chart-pie-demo.js"></script-->
  <script type="text/javascript">
  </script>
</body>

</html>
